<?php

namespace App\Http\Controllers\Auth\Citizen;

use App\Http\Controllers\Controller;
use App\Models\Citizen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Sos;
use App\Models\CitizenRequest;
use App\Models\Compliment;
use App\Models\Appointment;
use App\Support\Collection;
use Carbon\Carbon;
use Kyslik\ColumnSortable\Sortable;

class CitizenController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:citizen');
        /* $this->middleware('guest:employee'); */
    }
    /**
     * show dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* SELECT c2.cssn, c2.ctype, c2.ssn FROM Care as c1
        INNER JOIN Care as c2 ON c1.cssn = c2.cssn and c1.ssn = 10*/
        $cares = DB::select('SELECT fname from citizens inner join Care on ? = care.id
        where citizens.id = care.cid and citizens.status = 1', [Auth::guard('citizen')->user()->id]);
        //dd($cares);
        return view('auth.citizen.citizenPanel', ['cares' => $cares]);
    }

    public function signOut()
    {
        Auth::guard('citizen')->logout();
        return redirect()->route('citizen.login');
    }

    public function dashboard()
    {
        $home = DB::select('SELECT Homes.home_id , Homes.bid , Homes.floor_no ,Roads.rname
        FROM citizens inner join Homes on citizens.hid = Homes.home_id
        inner join Buildings on homes.bid = Buildings.building_id
        inner join lands on lands.land_id=Buildings.lid
        inner join Roads on Roads.road_id=lands.rid where citizens.id = ?', [Auth::guard('citizen')->user()->id]);
        //dd($home);
        $job = DB::select('SELECT jobs.jtype FROM jobs INNER JOIN asjobs ON asjobs.jid = jobs.jid
        where citizen_id = ?', [Auth::guard('citizen')->user()->id]);
        $emp = DB::select('select count(citizen_id) as cid from employee where citizen_id = ?', [Auth::guard('citizen')->user()->id]);
        //dd($emp);
        if ($emp[0]->cid == 1) {
            $emp = 1;
        } else {
            $emp = DB::select('select count(citizen_id) as cid from admin where citizen_id = ?', [Auth::guard('citizen')->user()->id]);
            if ($emp[0]->cid == 1) {
                $emp = 1;
            }
            $emp = 0;
        }
        return view('auth.citizen.dashboard', ['home' => $home, 'job' => $job, 'emp' => $emp]);
    }

    public function showChangePassword()
    {
        return view('auth.citizen.changePassword');
    }

    public function changePassword(Request $request)
    {
        //dd((Hash::check($request->get('oldPassword'), Auth::guard('citizen')->user()->password)));
        if (!(Hash::check($request->get('oldPassword'), Auth::guard('citizen')->user()->password))) {
            return redirect()->back()->with("error", "Your old password  is not correct.");
        }
        if (strcmp($request->get('oldPassword'), $request->get('newPassword')) == 0) {
            return redirect()->back()->with("error", "New Password cannot be same as your current password.");
        }
        $this->validate($request, [
            'oldPassword'   => 'required',
            'newPassword' => 'required|confirmed|min:8'
        ]);
        //dd(Auth::guard('citizen')->user());
        // $citizen = new Citizen;
        // $citizen->id = Auth::guard('citizen')->user()->id;
        // $citizen->password = bcrypt($request->get('newPassword'));
        // $citizen->save();
        Citizen::where('id', Auth::guard('citizen')->user()->id)->update(['password' => bcrypt($request->get('newPassword'))]);
        return redirect()->back()->with("success", "Password successfully changed!");
    }

    public function careshow(Request $request)
    {
        $this->validate(
            $request,
            [
                'fname'   => 'required|string',
            ],
            [
                'fname.required' => 'Choose from Drop menu'
            ]
        );
        $care = DB::select('SELECT * from citizens inner join Care on ? = care.id
        where citizens.id = care.cid and fname = ?', [Auth::guard('citizen')->user()->id, $request->fname]);
        //dd($care);
        $home = DB::select('SELECT Homes.home_id , Homes.bid , Homes.floor_no ,Roads.rname
        FROM citizens inner join Homes on citizens.hid = Homes.home_id
        inner join Buildings on homes.bid = Buildings.building_id
        inner join lands on lands.land_id=Buildings.lid
        inner join Roads on Roads.road_id=lands.rid where citizens.id = ?', [$care[0]->cid]);
        //dd($home);
        $job = DB::select('SELECT jobs.jtype FROM jobs INNER JOIN asjobs ON asjobs.jid = jobs.jid
            where citizen_id = ?', [$care[0]->cid]);
        /*     dd($job);
        $age = Carbon::parse($care[0]->bdate)->diff(Carbon::now())->y;
        if ($age < 18) {
            $job = [];
        } else {
            $job = DB::select('SELECT jobs.jtype FROM jobs INNER JOIN asjobs ON asjobs.jid = jobs.jid
            where citizen_id = ?', [$care[0]->cid]);
            //dd($job);
        } */
        return view('auth.citizen.profile', ['care' => $care, 'home' => $home, 'job' => $job]);
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
            'gas' => $gas, 'gas_amount' => $gas_amount,
            'elec' => $elec, 'elec_amount' => $elec_amount, 'water' => $water, 'water_amount' => $water_amount,
            'tax' => $tax, 'costPerkilo' => $costPerkilo
        ];
    }

    public function apartment()
    {
        $home = DB::select('SELECT Homes.home_id , Homes.area , Homes.rooms_no , Homes.bid , Homes.floor_no ,Roads.rname as road_name
            FROM citizens inner join Homes on citizens.hid = Homes.home_id
            inner join Buildings on homes.bid = Buildings.building_id
            inner join lands on lands.land_id=Buildings.lid
            inner join Roads on Roads.road_id=lands.rid where citizens.id = ?', [Auth::guard('citizen')->user()->id]);
        //dd($home);
        if (!empty($home)) {
            $facilities =  $this->facilities();
            //dd($facilities);
            return view('auth.citizen.apartment', [
                'home' => $home, 'facilities' => $facilities
            ]);
        }
        return view('auth.citizen.apartment', ['home' => $home]);
    }

    /* public function payment()
    {
        $other_serveies = 15;
        $facilities =  $this->facilities();
        $total = $facilities['gas_amount'] + $facilities['elec_amount'] + $facilities['water_amount'] + $other_serveies;
        $accounts = DB::select('SELECT bank_no FROM bank WHERE citizen_id = ?', [Auth::guard('citizen')->user()->id]);
        return view('auth.citizen.payment', [
            'gas_amount' => $facilities['gas_amount'], 'elec_amount' => $facilities['elec_amount'], 'water_amount' => $facilities['water_amount'],
            'other_serveies' => $other_serveies, 'total' => $total, 'accounts' => $accounts
        ]);
    } */

    public function bank(Request $request)
    {
        $accounts = DB::select('SELECT bank_no FROM bank WHERE citizen_id = ?', [Auth::guard('citizen')->user()->id]);
        if (count($accounts)) {
            if ($request->has('bank_no')) {
                if ($request->bank_no == 'all') {
                    return redirect()->back();
                } else {
                    $this->validate($request, [
                        'bank_no'   => 'exists:bank,bank_no',
                    ]);
                    $trans = DB::table('transactions')->join('bank', 'transactions.bank_no', '=', 'bank.bank_no')
                        ->where('citizen_id', '=', Auth::guard('citizen')->user()->id)
                        ->where('transactions.bank_no', '=', $request->bank_no)->orderBy('transactions.created_at', 'DESC')->get();
                    //dd($trans);
                    $trans = (new Collection($trans))->paginate(5, null, null, 'transactions');
                }
            } else {
                $trans = DB::table('transactions')->join('bank', 'transactions.bank_no', '=', 'bank.bank_no')
                    ->where('citizen_id', '=', Auth::guard('citizen')->user()->id)->orderBy('transactions.created_at', 'DESC')->get();
                $trans = (new Collection($trans))->paginate(5, null, null, 'transactions');
            }
        } else {
            $trans = [];
        }
        return view('auth.citizen.bank', ['accounts' => $accounts, 'trans' => $trans]);
    }

    public function job(Request $request)
    {
        if ($request->has('jtype')) {
            $this->validate($request, [
                'jtype'   => 'string|nullable',
            ]);
            $s = '%' . $request->jtype . '%';
            //dd($s);
            $free = DB::select('SELECT * from jobs where confirm = ? and NOT EXISTS(SELECT *  FROM  asjobs WHERE jobs.jid = asjobs.jid)
                and jobs.jtype like ?', [1, $s]);
            //dd($free);
            $jobs = (new Collection($free))->paginate(5, null, null, 'jobs');
        } else {
            $free = DB::select('SELECT * from jobs where confirm = ? and NOT EXISTS(SELECT *  FROM  asjobs WHERE jobs.jid = asjobs.jid)', [1]);
            $jobs = (new Collection($free))->paginate(5, null, null, 'jobs');
        }
        return view('auth.citizen.job', ['jobs' => $jobs]);
    }

    /* public function jobsearch(Request $request){
        $this->validate($request, [
            'jtype'   => 'required|string',
        ]);
        $s = '%'.$request->jtype.'%';
        //dd($s);
        $free = DB::select('SELECT * from jobs where NOT EXISTS(SELECT *  FROM  asjobs WHERE jobs.jid = asjobs.jid)
            and jobs.jtype like ?',[$s]);
        //dd($free);
        $jobs = (new Collection($free))->paginate(5,null,null,'jobs');
        return view('auth.citizen.job', ['jobs' => $jobs]);
    } */

    public function car()
    {
        $car = DB::select('SELECT * FROM car WHERE car.owner_id = ?', [Auth::guard('citizen')->user()->id]);
        return view('auth.citizen.car', ['car' => $car]);
    }

    public function sos()
    {
        $last = DB::select('SELECT * from sos where citizen_id = ? and type = 0', [Auth::guard('citizen')->user()->id]);
        if (!empty($last)) {
            return redirect()->back()->withSuccess('Your Last SOS Request Sent Successfully');
        }
        Sos::create([
            'citizen_id' => auth('citizen')->user()->id,
            'type' => 0,
        ]);
        return redirect()->Route('citizen.sos')->withSuccess('You have Send SOS request successfully');
    }

    public function citizenRequest(Request $request)
    {
        //dd($request);
        $this->validate($request, [
            'selected_modify'   => 'required|not_in:Select',
            'details' => 'required|string'
        ]);
        CitizenRequest::create([
            'citizen_id' => auth('citizen')->user()->id,
            'selected_modify' => $request['selected_modify'],
            'details' => $request['details'],
        ]);
        return redirect()->back()->with('success', 'Request sent successfully');
    }

    public function certficateOfBirth(Request $request)
    {
        if ($request->cid == 0) {
            return redirect()->route('citizen.login')->with('warning', 'You Have to Login First.');
        }
        $this->validate($request, [
            'cid'   => 'required|integer|exists:citizens,id',
        ]);
        $father = DB::select('SELECT citizens.id, fname, minit, lname from citizens inner join Care on ?=care.cid
        where citizens.id = care.id and ctype = ?', [$request->cid, 'father']);
        $mother = DB::select('SELECT citizens.id, fname, minit, lname from citizens inner join Care on ?=care.cid
        where citizens.id = care.id and ctype = ?', [$request->cid, 'mother']);
        $citizen = DB::select('SELECT * from citizens where id = ?', [$request->cid]);
        //dd($mother);
        return view('auth.citizen.eGov.certficateOfBirth', ['father' => $father, 'mother' => $mother, 'citizen' => $citizen]);
    }

    public function idCard()
    {
        $home = DB::select('SELECT Homes.home_id, Homes.bid , Roads.rname 
            FROM citizens inner join Homes on citizens.hid = Homes.home_id
            inner join Buildings on homes.bid = Buildings.building_id
            inner join lands on lands.land_id=Buildings.lid
            inner join Roads on Roads.road_id=lands.rid where citizens.id = ?', [Auth::guard('citizen')->user()->id]);
        //dd($home);
        $job = DB::select('SELECT jobs.jtype FROM jobs INNER JOIN asjobs ON asjobs.jid = jobs.jid
            where citizen_id = ?', [Auth::guard('citizen')->user()->id]);
        //dd($job);
        $emp = DB::select('select count(citizen_id) as cid from employee where citizen_id = ?', [Auth::guard('citizen')->user()->id]);
        //dd($emp);
        if ($emp[0]->cid == 1) {
            $emp = 1;
        } else {
            $emp = 0;
        }
        return view('auth.citizen.eGov.idCard', ['home' => $home, 'job' => $job, 'emp' => $emp]);
    }

    public function drivingLicense()
    {
        $age = Carbon::parse(Auth::guard('citizen')->user()->bdate)->diff(Carbon::now())->y;
        //dd($age);
        $job = DB::select('SELECT jobs.jtype FROM jobs INNER JOIN asjobs ON asjobs.jid = jobs.jid
            where citizen_id = ?', [Auth::guard('citizen')->user()->id]);
        $home = DB::select('SELECT Homes.home_id, Homes.bid , Roads.rname
        FROM citizens inner join Homes on citizens.hid = Homes.home_id
        inner join Buildings on homes.bid = Buildings.building_id
        inner join lands on lands.land_id=Buildings.lid
        inner join Roads on Roads.road_id=lands.rid where citizens.id = ?', [Auth::guard('citizen')->user()->id]);
        $emp = DB::select('select count(citizen_id) as cid from employee where citizen_id = ?', [Auth::guard('citizen')->user()->id]);
        //dd($emp);
        if ($emp[0]->cid == 1) {
            $emp = 1;
        } else {
            $emp = 0;
        }
        return view('auth.citizen.eGov.drivingLicense', ['age' => $age, 'job' => $job, 'home' => $home, 'emp' => $emp]);
    }

    public function appointmentReservation()
    {
        return view('auth.citizen.eGov.appointmentReservation');
    }

    public function appointmentReservationSave(Request $request)
    {
        //dd(0);
        $this->validate($request, [
            'adate' => 'required|date|after:today'
        ]);
        //dd('1');
        $date = DB::select('SELECT count(id) as cid from appointments where citizen_id=? and adate=?', [Auth::guard('citizen')->user()->id, $request->adate]);
        //dd($date);
        if ($date[0]->cid >= 1) {
            return redirect()->route('eGovernment')->withErrors('You Can Not Reserve two Appointments In The Same Day');
        }
        Appointment::create([
            'citizen_id' => auth('citizen')->user()->id,
            'adate' => $request['adate'],
        ]);
        return redirect()->route('eGovernment')->withSuccess('You have Send the request successfuly');
    }

    public function compliment()
    {
        return view('auth.citizen.eGov.compliment');
    }

    public function complimentSave(Request $request)
    {
        $this->validate($request, [
            'category'   => 'required|not_in:Select|string',
            'massage' => 'required|string'
        ]);
        Compliment::create([
            'citizen_id' => auth('citizen')->user()->id,
            'category' => $request['category'],
            'massage' => $request['massage'],
        ]);
        return redirect()->route('eGovernment')->withSuccess('You have Send the compliment successfuly');
    }

    public function showContract(Request $request)
    {
        $this->validate($request, [
            'select'   => 'required|string',
        ]);
        if ($request->select == 'Car') {
            $car = DB::select('SELECT * from car where owner_id = ?', [Auth::guard('citizen')->user()->id]);
            //dd($car);
            if (!count($car)) {
                $type = 'empty';
                return view('auth.citizen.eGov.contract', ['type' => $type]);
            }
            $type = 'Car';
            $owner = DB::select('SELECT fname, lname from citizens where id = ?', [$car[0]->owner_id]);
            //dd($owner);
            return view('auth.citizen.eGov.contract', ['type' => $type, 'car' => $car, 'owner' => $owner]);
        } elseif ($request->select == 'Apartment') {
            $home = DB::select('SELECT Homes.home_id, Homes.bid
            FROM citizens inner join Homes on citizens.hid = Homes.home_id
            inner join Buildings on homes.bid = Buildings.building_id
            inner join lands on lands.land_id=Buildings.lid
            inner join Roads on Roads.road_id=lands.rid where citizens.id = ?', [Auth::guard('citizen')->user()->id]);
            $owner = DB::select('SELECT citizens.id, fname, lname from citizens inner join Care on ?=care.cid
            where citizens.id = care.id and ctype = ?', [Auth::guard('citizen')->user()->id, 'father']);
            $type = 'Apartment';
            return view('auth.citizen.eGov.contract', ['type' => $type, 'home' => $home, 'owner' => $owner]);
        } else {
            return redirect()->back()->withErrors('Unauthorized Access');
        }
    }

    public function showChangePhoto()
    {
        return view('auth.citizen.changePhoto');
    }

    public function changePhoto(Request $request)
    {
        $this->validate($request, [
            'image'   => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);
        $image_name = time() . '_' . Auth::guard('citizen')->user()->id . '.' . $request->image->extension();
        //dd($image_name);
        $request->image->move(public_path('uploads'), $image_name);
        Citizen::where('id', Auth::guard('citizen')->user()->id)->update(['avatar' => $image_name]);
        return redirect()->route('citizen.dashboard')->with("success", "Photo successfully changed!");
    }
}
