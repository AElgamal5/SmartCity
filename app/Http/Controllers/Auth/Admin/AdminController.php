<?php

namespace App\Http\Controllers\Auth\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $admin = DB::select(
            'select fname, lname, avatar from citizens where id=?',
            [Auth('admin')->user()->citizen_id]
        );
        return view('auth.admin.mainpanel', ['admin' => $admin]);
    }

    public function signOut()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }


    public function dashboard()
    {
        //dd(Auth('employee')->user()->citizen_id);
        //$id = Auth('employee')->user()->citizen_id;
        $admin = DB::select('select * from citizens where id=?', [Auth('admin')->user()->citizen_id]);
        //dd($emp);
        return view('auth.admin.profile', ['admin' => $admin]);
    }

    public function showChangePassword()
    {
        return view('auth.admin.changePassword');
    }

    public function changePassword(Request $request)
    {
        //dd((Hash::check($request->get('oldPassword'), Auth::guard('citizen')->user()->password)));
        if (!(Hash::check($request->get('oldPassword'), Auth::guard('admin')->user()->password))) {
            return redirect()->back()->with("error", "Your old password is Wrong.");
        }
        if (strcmp($request->get('oldPassword'), $request->get('newPassword')) == 0) {
            return redirect()->back()->with("error", "New Password cannot be same as your current password.");
        }
        $this->validate($request, [
            'oldPassword'   => 'required|string',
            'newPassword' => 'required|string|confirmed|min:8'
        ]);
        Admin::where('id', Auth::guard('admin')->user()->id)->update(['password' => bcrypt($request->get('newPassword'))]);
        return redirect()->back()->with("success", "Password successfully changed!");
    }

    
    public function employees()
    {
        $emps = Employee::sortable()->paginate(10, ['*'], 'employees');
        return view('auth.admin.emp.panel', ['emps' => $emps]);
    }
    
    public function addEmployee()
    {
        return view('auth.admin.emp.add');
    }
    
    public function addEmployeeSave(Request $request)
    {
        $this->validate($request, [
            'citizen_id' => 'required|integer|exists:citizens,id|min:1',
            'password' => 'required|string|min:6',
        ]);
        //dd('1');
        Employee::create([
            'citizen_id' => $request->citizen_id,
            'password' => Hash::make($request->password),
        ]);
        //dd('2');
        return redirect()->route('admin.employees')->withSuccess('You have added Employee successfuly');
    }

    public function editEmployee($id)
    {
        $emp = DB::select('SELECT * FROM employee WHERE id=?', [$id]);
        return view('auth.admin.emp.edit', ['emp' => $emp]);
    }

    public function editEmployeeSave(Request $request, $id)
    {
        //dd($request);
        $this->validate($request, [
            'citizen_id' => 'required|integer|exists:citizens,id|min:1',
            'password' => 'required|string|min:6',
        ]);
        DB::update('UPDATE employee SET citizen_id=?, password=? WHERE id=? ', [$request->citizen_id, Hash::make($request->password), $id]);
        //dd('2');
        return redirect()->route('admin.employees')->withSuccess('You have edit the Employee successfuly');
    }

    public function deleteEmployee($id)
    {
        DB::delete('DELETE FROM employee WHERE id=?', [$id]);
        return redirect()->back()->withSuccess('You have Deleted the Employee successfuly');
    }

    public function statistics()
    {
        $all = DB::select('SELECT count(id) as cn from citizens'); 
        $fem = DB::select('SELECT count(id) as cf from citizens where Sex=0');
        $male = DB::select('SELECT count(id) as cm from citizens where Sex=1');
        $teen = DB::select('SELECT count(id) as ct from citizens where ((((DATEDIFF(DAY, ( BDate ), GetDate()) / 365.25))) >= 16 and ((((DATEDIFF(DAY, ( BDate  ), GetDate()) / 365.25))) <=21))');
        $adult = DB::select('SELECT count(id) as ca  from citizens where ((((DATEDIFF(DAY, ( BDate ), GetDate()) / 365.25))) >= 21 and ((((DATEDIFF(DAY, ( BDate  ), GetDate()) / 365.25))) <=40))');
        $old = DB::select('SELECT count(id) as co from citizens where ((((DATEDIFF(DAY, ( BDate ), GetDate()) / 365.25))) >= 40 and ((((DATEDIFF(DAY, ( BDate  ), GetDate()) / 365.25))) <=50))');
        $child = DB::select('SELECT count(cid) as cc from care where ctype = \'father\'');
        $married = DB::select('SELECT count(cid) as cm from care where ctype = \'partner\'');
        $home = DB::select('SELECT count(home_id) as ch from homes');
        $ehome = DB::select('SELECT count(home_id) as ceh FROM homes WHERE NOT EXISTS(SELECT * FROM  citizens WHERE citizens.hid = homes.home_id);');
        $company = DB::select('SELECT count(company_id) as cc from Companies');
        $wpeople = DB::select('SELECT count(citizen_id) as cj from asjobs');
        /*$nwpeople = DB::select('SELECT((select count(id) as cnj from citizens where ((((DATEDIFF(DAY, ( BDate ), GetDate()) / 365.25))) >= 16 and ((((DATEDIFF(DAY, ( BDate  ), GetDate()) / 365.25))) <=60)))');*/
        $mostworked = DB::select('SELECT count(jtype) as nowp ,jtype from jobs inner join asjobs on asjobs.jid = jobs.jid group by jtype order by nowp desc');
        $mostwanted = DB::select('SELECT count(jid) as an , jtype FROM jobs WHERE NOT EXISTS(SELECT * FROM  asjobs WHERE jobs.jid = asjobs.jid) group by jtype order by an desc');
        $bankacc = DB::select('SELECT count(acc_id) as an,bank_name from bank group by bank_name order by an desc');
        //dd($mostworked);
        return view('auth.admin.statistics',[
            'all' => $all,
            'fem' => $fem,
            'male' => $male,
            'teen' => $teen,
            'adult' => $adult,
            'old' =>  $old,
            'child' => $child,
            'married' => $married,
            'home' => $home,
            'ehome' => $ehome,
            'company' => $company,
            'wpeople' => $wpeople,
            /* 'nwpeople' => $nwpeople, */
            'mostworked' => $mostworked,
            'mostwanted' => $mostwanted,
            'bankacc' => $bankacc,
        ]);
    }
}
