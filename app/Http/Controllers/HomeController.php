<?php

namespace App\Http\Controllers;

use App\Models\ForgotPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{

    public function index()
    {
        return view('homePage');
    }

    public function about()
    {
        return view('about');
    }

    public function contactUs()
    {
        return view('contactUs');
    }

    public function forgotPassword()
    {
        if (Auth::guard('citizen')->check()) {
            return redirect()->route('citizen')->withErrors('Can\'t access this page');
        } elseif (Auth::guard('employee')->check()) {
            return redirect()->route('employee')->withErrors('Can\'t access this page');
        } else {
            return view('forgotPassword');
        }
    }

    public function forgotPasswordSave(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
        ]);
        ForgotPassword::create([
            'email' => $request->email,
        ]);
        return redirect()->back()->withSuccess('Check your email we\'ll contact you as soon as possible');
    }

    public function eGovernment(){
        if(Auth::guard('employee')->check() || Auth::guard('admin')->check()){
            return redirect()->back()->with('warning','Logout And login as a citizen');
        }
        return view('eGovernent');
    }
}
