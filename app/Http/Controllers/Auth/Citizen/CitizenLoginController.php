<?php

namespace App\Http\Controllers\Auth\Citizen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class CitizenLoginController extends Controller
{

  public function __construct()
  {
    $this->middleware('guest:citizen');
    $this->middleware('guest:employee');
    $this->middleware('guest:admin');
  }

  /* public function checkadmin()
  {
    if (Auth::guard('admin')->check()) {
      return redirect()->route('admin');
    }
  } */

  public function index()
  {
    return view('citizenLogin');
  }

  public function login(Request $request)
  {
    $this->validate($request, [
      'id' => 'required|integer|min:1',
      'password' => 'required|min:6'
    ]);
    //dd($request->get('password'));
    $citizen = DB::select('SELECT password, bdate from citizens where id = ?', [$request->id]);
    if (Hash::check($request->password, $citizen[0]->password)) {
      $state = DB::select('SELECT status from citizens where id=?',[$request->id]);
      /* dd($state); */
      if($state[0]->status == 0){
        return redirect()->route('citizen.login')->withErrors('This Is Account Is Not Avaliable Any More.');
      }
      $age = Carbon::parse($citizen[0]->bdate)->diff(Carbon::now())->y;
      //dd($age);
      if ($age < 16) {
        return redirect()->route('citizen.login')->with('warning', 'Your Age Less Than 16 Years Old.');
      }
    }
    if (Auth::guard('citizen')->attempt(['id' => $request->id, 'password' => $request->password])) {
      return redirect()->intended(route('citizen'));
    }
    /* return redirect()->back()->with("error", "Wrong input data")->withInput($request->only('id', 'remember')); */
    return redirect()->route('citizen.login')->with("error", "Wrong input data")->withInput($request->only('id'));

  }
}
