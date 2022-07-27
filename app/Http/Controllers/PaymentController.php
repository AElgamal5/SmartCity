<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Omnipay\Omnipay;
//use App\Http\Controllers\Auth\Citizen\CitizenController;

class PaymentController extends Controller
{
    private $gateway;

    public function __construct()
    {
        $this->middleware('auth:citizen');
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true); //set it to 'false' when go live
    }

    public function amounts()
    {
        $tax = 5;
        $costPerkilo = 10;
        $gas = DB::select('select top 1 * from (
            select homes.home_id,gas_his.last_read as gl, gas_his.current_read as gc , gas_his.created_at as gh from citizens
            inner join homes on citizens.hid = homes.home_id
            inner join gas on Homes.home_id = gas.hid
            inner join gas_his on gas.reader_id = gas_his.reader_id
            where citizens.id = ? )  as result order by gh desc', [Auth::guard('citizen')->user()->id]);
        //dd($gas);
        $gas_amount = ($gas[0]->gc - $gas[0]->gl) * $costPerkilo  + ($tax / 100) * (($gas[0]->gc - $gas[0]->gl) * $costPerkilo);
        //dd($gas_amount);
        $elec = DB::select('select top 1 * from (
            select homes.home_id,elec_his.last_read as el, elec_his.current_read as ec , elec_his.created_at as eh
            from citizens
            inner join homes on citizens.hid = homes.home_id
            inner join elec on Homes.home_id = elec.hid
            inner join elec_his on elec.reader_id = elec_his.reader_id
            where citizens.id = ? ) as result order by eh desc', [Auth::guard('citizen')->user()->id]);
        //dd($elec);
        $elec_amount = ($elec[0]->ec - $elec[0]->el) * $costPerkilo  + ($tax / 100) * (($elec[0]->ec - $elec[0]->el) * $costPerkilo);
        //dd($elec_amount);
        $water = DB::select('select top 1 * from (
            select homes.home_id, water_his.last_read as wl, water_his.current_read as wc , water_his.created_at as wh
            from citizens
            inner join homes on citizens.hid = homes.home_id
            inner join water on Homes.home_id = water.hid
            inner join water_his on water.reader_id = water_his.reader_id
            where citizens.id = ? ) as result order by wh desc', [Auth::guard('citizen')->user()->id]);
        //dd($water);
        $water_amount = ($water[0]->wc - $water[0]->wl) * $costPerkilo  + ($tax / 100) * (($water[0]->wc - $water[0]->wl) * $costPerkilo);
        //dd($water_amount);
        return [
            'gas_amount' => $gas_amount,
            'elec_amount' => $elec_amount,
            'water_amount' => $water_amount,
        ];
    }

    /**
     * Initiate a payment on PayPal.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function charge(Request $request)
    {
        //$citizen = new CitizenController();
        $facilities =  $this->amounts();
        //dd($facilities);
        if ($request->type == 'elec') {
            $total = $facilities['elec_amount'];
        } elseif ($request->type == 'gas') {
            $total = $facilities['gas_amount'];
        } elseif ($request->type == 'water') {
            $total = $facilities['water_amount'];
        } else {
            return redirect()->back()->with('warning', 'Error in selected amount. please try again');
        }
        //dd($total);
        if ($request->input('submit')) {
            try {
                $response = $this->gateway->purchase(array(
                    'amount' => $total,
                    'currency' => env('PAYPAL_CURRENCY'),
                    'returnUrl' => url('/citizen/apartment/success'),
                    'cancelUrl' => url('/citizen/apartment/error'),
                ))->send();

                if ($response->isRedirect()) {
                    $response->redirect(); // this will automatically forward the customer
                } else {
                    // not successful
                    return redirect()->route('citizen.apartment')->withErrors('Error Occurred');
                }
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }
    }
    

    /**
     * Charge a payment and store the transaction.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function success(Request $request)
    {
        // Once the transaction has been approved, we need to complete it.
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id'             => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();

            if ($response->isSuccessful()) {
                /* dd($response); */
                $arr_body = $response->getData();
                $amount = $arr_body['transactions'][0]['amount']['total'];
                $facilities = $this->amounts();
                if ($facilities['elec_amount'] == $amount) {
                    DB::statement('EXEC pay_elec @id = ?', [Auth::guard('citizen')->user()->id]);
                } elseif ($facilities['water_amount'] == $amount) {
                    DB::statement('EXEC pay_water @id = ?', [Auth::guard('citizen')->user()->id]);
                } elseif ($facilities['gas_amount'] == $amount) {
                    DB::statement('EXEC pay_gas @id = ?', [Auth::guard('citizen')->user()->id]);
                }
                return redirect()->back()->with('success', 'Payment done  successfully');
            } else {
                /* return $response->getMessage(); */

                return redirect()->route('citizen.apartment')->withErrors('Error Occurred');
            }
        } else {
            return redirect()->route('citizen.apartment')->withErrors('Transaction is declined');
        }
    }

    /**
     * Error Handling.
     */
    public function error()
    {
        return redirect()->route('citizen.apartment')->withErrors('Citizen Cancelled The Payment');
    }

    public function facilities()
    {
        $tax = 5;
        $costPerkilo = 10;
        $gas = DB::select('select top 1 * from (
            select homes.home_id,gas_his.last_read as gl, gas_his.current_read as gc , gas_his.created_at as gh from citizens
            inner join homes on citizens.hid = homes.home_id
            inner join gas on Homes.home_id = gas.hid
            inner join gas_his on gas.reader_id = gas_his.reader_id
            where citizens.id = ? )  as result order by gh desc', [Auth::guard('citizen')->user()->id]);
        //dd($gas);
        $gas_amount = ($gas[0]->gc - $gas[0]->gl) * $costPerkilo  + ($tax / 100) * (($gas[0]->gl - $gas[0]->gc) * $costPerkilo);
        //dd($gas_amount);
        $elec = DB::select('select top 1 * from (
            select homes.home_id,elec_his.last_read as el, elec_his.current_read as ec , elec_his.created_at as eh
            from citizens
            inner join homes on citizens.hid = homes.home_id
            inner join elec on Homes.home_id = elec.hid
            inner join elec_his on elec.reader_id = elec_his.reader_id
            where citizens.id = ? ) as result order by eh desc', [Auth::guard('citizen')->user()->id]);
        //dd($elec);
        $elec_amount = ($elec[0]->ec - $elec[0]->el) * $costPerkilo  + ($tax / 100) * (($elec[0]->el - $elec[0]->ec) * $costPerkilo);
        //dd($elec_amount);
        $water = DB::select('select top 1 * from (
            select homes.home_id, water_his.last_read as wl, water_his.current_read as wc , water_his.created_at as wh
            from citizens
            inner join homes on citizens.hid = homes.home_id
            inner join water on Homes.home_id = water.hid
            inner join water_his on water.reader_id = water_his.reader_id
            where citizens.id = ? ) as result order by wh desc', [Auth::guard('citizen')->user()->id]);
        //dd($water);
        $water_amount = ($water[0]->wc - $water[0]->wl) * $costPerkilo  + ($tax / 100) * (($water[0]->wc - $water[0]->wl) * $costPerkilo);
        //dd($water_amount);
        return [
            'gas' => $gas, 'gas_amount' => $gas_amount,
            'elec' => $elec, 'elec_amount' => $elec_amount, 'water' => $water, 'water_amount' => $water_amount
        ];
    }
}
