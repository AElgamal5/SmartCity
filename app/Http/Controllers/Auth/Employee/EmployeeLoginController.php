<?php

namespace App\Http\Controllers\Auth\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EmployeeLoginController extends Controller
{
  public function __construct()
  {
    $this->middleware('guest:employee');
    $this->middleware('guest:citizen');
    $this->middleware('guest:admin');
  }

  public function index()
  {
    /* if (Auth::guard('citizen')->check() || Auth::guard('admin')->check()) {
      return redirect()->back()->with('warning', 'Logout And Login As A Employee');
    } */
    return view('employeeLogin');
  }

  public function login(Request $request)
  {
    $this->validate($request, [
      'citizen_id'   => 'required|integer',
      'password' => 'required|min:6'
    ]);
    if (Auth::guard('employee')->attempt(['citizen_id' => $request->citizen_id, 'password' => $request->password])) {
      return redirect()->intended(route('employee'));
    }
    return redirect()->back()->withInput($request->only('citizen_id'))->withErrors('Wrong Input Data');
  }
}
