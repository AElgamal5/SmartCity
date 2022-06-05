<?php

namespace App\Http\Controllers\Auth\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
  public function __construct()
  {
    /* $this->middleware('guest'); */
    $this->middleware('guest:admin');
    $this->middleware('guest:citizen');
    $this->middleware('guest:employee');
  }

  public function index()
  {
    /* if (Auth::guard('citizen')->check() || Auth::guard('employee')->check()) {
      return redirect()->back()->with('warning', 'Unauthorized Action');
    } */
    return view('adminLogin');
  }

  public function login(Request $request)
  {
    $this->validate($request, [
      'citizen_id'   => 'required|integer',
      'password' => 'required|min:6'
    ]);
    if (Auth::guard('admin')->attempt(['citizen_id' => $request->citizen_id, 'password' => $request->password])) {
      return redirect()->intended(route('admin'));
    }
    return redirect()->back()->withInput($request->only('citizen_id'))->withErrors('Wrong Input Data');
  }
}
