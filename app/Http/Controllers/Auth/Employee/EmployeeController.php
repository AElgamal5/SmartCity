<?php

namespace App\Http\Controllers\Auth\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\AsJob;
use App\Models\Bank;
use App\Models\Building;
use App\Models\Car;
use App\Models\Care;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Citizen;
use App\Models\CitizenRequest;
use App\Models\Company;
use App\Models\Electricity;
use App\Models\Employee;
use App\Models\EndRoad;
use App\Models\ForgotPassword;
use App\Models\Gas;
use App\Models\GasHis;
use App\Models\Home;
use App\Models\Iot;
use App\Models\Job;
use App\Models\Land;
use App\Models\Road;
use App\Models\StartRoad;
use App\Models\Transaction;
use App\Models\Water;
use App\Models\WaterHis;
use App\Models\Compliment;
use App\Models\ElectricityHis;
use App\Models\Sos;
use App\Models\User;
use Kyslik\ColumnSortable\Sortable;


class EmployeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:employee');
    }

    /**
     * show dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emp = DB::select(
            'SELECT fname, lname, avatar from citizens where id=?',
            [Auth('employee')->user()->citizen_id]
        );
        return view('auth.employee.mainpanel', ['emp' => $emp]);
    }

    public function signOut()
    {
        Auth::guard('employee')->logout();
        return redirect()->route('employee.login');
    }

    public function dashboard()
    {
        //dd(Auth('employee')->user()->citizen_id);
        //$id = Auth('employee')->user()->citizen_id;
        $emp = DB::select('select * from citizens where id=?', [Auth('employee')->user()->citizen_id]);
        //dd($emp);
        $home = DB::select('SELECT Homes.home_id , Homes.bid , Homes.floor_no ,Roads.rname
        FROM citizens inner join Homes on citizens.hid = Homes.home_id
        inner join Buildings on homes.bid = Buildings.building_id
        inner join lands on lands.land_id=Buildings.lid
        inner join Roads on Roads.road_id=lands.rid where citizens.id = ?', [Auth::guard('employee')->user()->citizen_id]);
        //dd(count($home));
        return view('auth.employee.profile', ['emp' => $emp, 'home' => $home]);
    }

    public function showChangePassword()
    {
        return view('auth.employee.changePassword');
    }

    public function changePassword(Request $request)
    {
        //dd((Hash::check($request->get('oldPassword'), Auth::guard('citizen')->user()->password)));
        if (!(Hash::check($request->get('oldPassword'), Auth::guard('employee')->user()->password))) {
            return redirect()->back()->with("error", "Your old password is Wrong.");
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
        Employee::where('id', Auth::guard('employee')->user()->id)->update(['password' => bcrypt($request->get('newPassword'))]);
        return redirect()->back()->with("success", "Password successfully changed!");
    }

    public function editCitizens()
    {
        //$citizens = DB::select('select * from citizens');
        //$citizens = Citizen::paginate(10, ['*'], 'citizens');
        $citizens = Citizen::sortable()->paginate(10, ['*'], 'citizens');

        return view('auth.employee.citizen&care.editCitizens', ['citizens' => $citizens]);
    }

    public function addCitizen()
    {
        return view('auth.employee.citizen&care.addCitizen');
    }

    public function addCitizenSave(Request $request)
    {
        /* phone from 1,000,000,000 to 2,147,483,647 */
        $request->validate([
            'password' => 'required|min:6|string',
            'email' => 'required|email|unique:citizens,email|max:100',
            'fname' => 'required|string|max:30',
            'minit' => 'required|string|max:30',
            'lname' => 'required|string|max:30',
            'bdate' => 'required|date|before:tomorrow',
            'sex' => 'required|integer|in:0,1',
            'sstatus' => 'required|integer|in:0,1',
            'hid' => 'required|integer|exists:Homes,home_id|min:1|max:2147483647',
            'phone' => 'required|integer|gte:1000000000|lte:2147483647|unique:citizens,phone'
        ]);
        Citizen::create([
            'password' => Hash::make($request['password']),
            'email' => $request['email'],
            'fname' => $request['fname'],
            'minit' => $request['minit'],
            'lname' => $request['lname'],
            'bdate' => $request['bdate'],
            'sex' => $request['sex'],
            'sstatus' => $request['sstatus'],
            'hid' => $request['hid'],
            'phone' => $request['phone'],
        ]);
        return redirect()->route('employee.editCitizens')->withSuccess('You have added a citizen successfuly');
    }

    /* public function deleteCitizen($id)
    {
        if ($id != Auth::guard('employee')->user()->citizen_id) {
            DB::delete('delete from citizens where id = ?', [$id]);
            return redirect()->back()->withSuccess('You have deleted citizen successfuly');
        } else {
            return redirect()->back()->withErrors('You can\'t delete your citizen account');
        }
        $emp = DB::select('SELECT citizen_id from employee where citizen_id = ?', [$id]);
        if (!empty($emp)) {
            return redirect()->back()->withErrors('You can\'t delete This account');
        }
        $admin = DB::select('SELECT citizen_id from admin where citizen_id = ?', [$id]);
        if (!empty($admin)) {
            return redirect()->back()->withErrors('You can\'t delete This account');
        }
        DB::statement('exec delete_citizen @id =?',[$id]);
        return redirect()->back()->withSuccess('You have deleted citizen successfuly');
    } */

    public function editCitizen($id)
    {
        /* dd($emp); */
        /* $emp = DB::select('SELECT citizen_id from employee where citizen_id = ?', [$id]);
        if (!empty($emp)) {
            return redirect()->back()->withErrors('You can\'t edit your This account');
        } */
        $citizen = DB::select('select * from citizens where id=?', [$id]);
        return view('auth.employee.citizen&care.editCitizen', ['citizen' => $citizen]);
    }

    public function editCitizenSave(Request $request, $id)
    {
        //dd($idl);
        $request->validate([
            'password' => 'nullable|min:6|string',
            'email' => 'required|email|max:100',
            'fname' => 'required|string|max:30',
            'minit' => 'required|string|max:30',
            'lname' => 'required|string|max:30',
            'bdate' => 'required|date|before:tomorrow',
            'sex' => 'required|integer|in:0,1',
            'sstatus' => 'required|integer|in:0,1',
            'hid' => 'required|integer|exists:Homes,home_id|min:1|max:2147483647',
            'phone' => 'required|integer|gte:1000000000|lte:2147483647',
            'status' => 'required|integer|in:0,1'
        ]);
        /* dd($request); */
        $admin = DB::select('SELECT citizen_id from admin where citizen_id = ?', [$id]);

        $citizen = Citizen::find($id);
        if ($request->password) {
            $citizen->password = Hash::make($request->password);
        }
        $citizen->email = $request->email;
        $citizen->fname = $request->fname;
        $citizen->minit = $request->minit;
        $citizen->lname = $request->lname;
        $citizen->bdate = $request->bdate;
        $citizen->sex = $request->sex;
        $citizen->sstatus = $request->sstatus;
        $citizen->hid = $request->hid;
        $citizen->phone = $request->phone;
        if (empty($admin)) {
            DB::statement('exec delete_citizen @id =?',[$id]);
        }
        $citizen->save();
        // DB::update('update citizens 
        // set email=?, fname= ?, minit=?, lname=?, bdate=?, sex=?, sstatus=?, 
        // where id = ?', [$request->email, $request->fname, $request->minit, $request->lname, $request->bdate, $request->sex, $request->sstatus, $id]);
        return redirect()->route('employee.editCitizens')->withSuccess('You have Edited the citizen successfuly');
    }

    public function sosRequests()
    {
        //$reqs = DB::select('select * from sos order by type, created_at');
        //$reqs = DB::table('sos')->orderBy('type')->paginate(10, ['*'], 'sos');
        $reqs = Sos::sortable('type')->paginate(10, ['*'], 'sos');

        return view('auth.employee.sosRequests', ['reqs' => $reqs]);
    }

    public function soschecked($sos_id)
    {
        DB::update('UPDATE sos SET type = 1 WHERE sos_id=?', [$sos_id]);
        return redirect()->back()->withSuccess('You have Edited request successfuly');
    }

    public function citizenRequests()
    {
        //$reqs1 = DB::select('SELECT * FROM requests WHERE state = 0');
        $reqs1 = CitizenRequest::query()->where('state', '0')->sortable()->paginate(10, ['*'], 'state0');
        //$reqs1 = DB::table('requests')->where('state', '0')->paginate(10, ['*'], 'state0');
        $reqs2 = CitizenRequest::query()->where('state', '1')->sortable()->paginate(10, ['*'], 'state1');
        //$reqs2 = DB::table('requests')->where('state', '1')->paginate(10, ['*'], 'state1');
        //$reqs2 = DB::select('SELECT * FROM requests WHERE state = 1');
        return view('auth.employee.citizenRequests', ['reqs1' => $reqs1, 'reqs2' => $reqs2]);
    }

    public function citizenRequestsDone($req_id)
    {
        DB::update('UPDATE request SET state = 1 WHERE req_id = ?', [$req_id]);
        return redirect()->back()->withSuccess('You have compelpted the requests citizen successfuly');
    }

    public function citizenCare()
    {
        $cares = Care::sortable()->paginate(10, ['*'], 'cares');
        return view('auth.employee.citizen&care.citizenCare', ['cares' => $cares]);
    }

    public function addCitizenCare()
    {
        return view('auth.employee.citizen&care.addCitizenCare');
    }

    public function addCitizenCareSave(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|integer|exists:citizens,id|min:1|max:2147483647',
            'cid' => 'required|integer|exists:citizens,id|different:id|min:1|max:2147483647',
            'ctype' => 'required|string|in:father,mother,partner|max:30',
        ]);
        /* if ($request->id == $request->cid) {
            return back()->withInput($request->input())->withErrors('SSN must be diffrent form Cared SSN');
        } */
        Care::create([
            'id' => $request->id,
            'cid' => $request->cid,
            'ctype' => $request->ctype,
        ]);
        return redirect()->route('employee.citizenCare')->withSuccess('You have added the relation successfuly');
    }

    public function editCitizenCare($id, $cid)
    {
        $ctype = DB::select('SELECT ctype, status FROM care WHERE id = ? AND cid = ?', [$id, $cid]);
        return view('auth.employee.citizen&care.editCitizenCare', ['id' => $id, 'cid' => $cid, 'ctype' => $ctype]);
    }

    public function editCitizenCareSave(Request $request, $id, $cid)
    {
        $this->validate($request, [
            'id' => 'required|integer|exists:citizens,id|min:1|max:2147483647',
            'cid' => 'required|integer|exists:citizens,id|different:ssn|min:1|max:2147483647',
            'ctype' => 'required|string|in:father,mother,partner|max:30',
            'status' => 'required|integer|in:0,1'
        ]);
        DB::update('UPDATE care SET id = ?, cid = ?, ctype = ?, status=? WHERE id = ? AND cid = ?', [$request->id, $request->cid, $request->ctype,$request->status, $id, $cid]);
        return redirect()->route('employee.citizenCare')->withSuccess('You have edited the care relation successfuly');
    }

    public function deleteCitizenCare($id, $cid)
    {
        DB::delete('delete from care where id = ? and cid = ?', [$id, $cid]);
        return redirect()->back()->withSuccess('You have deleted citizen care relation successfuly');
    }

    public function statistics()
    {
        return view('auth.employee.statistics');
    }

    public function bankPanel()
    {
        $banks = Bank::sortable()->paginate(10, ['*'], 'banks');
        $transs = Transaction::sortable()->paginate(10, ['*'], 'transactions');
        return view('auth.employee.bank&trans.bank', ['banks' => $banks, 'transs' => $transs]);
    }

    public function addBank()
    {
        return view('auth.employee.bank&trans.addBank');
    }

    public function addTrans()
    {
        return view('auth.employee.bank&trans.addTrans');
    }

    public function addBankSave(Request $request)
    {
        //dd(1);
        $this->validate($request, [
            'bank_no' => 'required|integer|unique:bank,bank_no',
            'bank_name' => 'required|string|max:50',
            'citizen_id' => 'required|integer|lte:2147483647|gte:1|exists:citizens,id',
            'balance' => 'required|numeric|min:-922337203685477.5808|max:922337203685477.5807',
        ]);
        Bank::create([
            'bank_no' => $request->bank_no,
            'bank_name' => $request->bank_name,
            'citizen_id' => $request->citizen_id,
            'balance' => $request->balance,
        ]);
        return redirect()->route('employee.bankPanel')->withSuccess('You have added the bank account successfuly');
    }

    public function addTransSave(Request $request)
    {
        $this->validate($request, [
            'bank_no' => 'required|integer|exists:bank,bank_no|min:1|max:2147483647',
            'amount' => 'required|numeric|max:922337203685477.5807|min:1',
            'sendto' => 'required|integer|exists:bank,bank_no|different:bank_no|min:1|max:2147483647',
        ]);
        Transaction::create([
            'bank_no' => $request->bank_no,
            'amount' => $request->amount,
            'sendto' => $request->sendto,
        ]);
        return redirect()->route('employee.bankPanel')->withSuccess('You have added the bank Transaction successfuly');
    }

    public function editBank($bank_no)
    {
        $bank = DB::select('SELECT * FROM bank WHERE bank_no = ?', [$bank_no]);
        return view('auth.employee.bank&trans.editBank', ['bank' => $bank]);
    }

    public function edittrans($trans_id)
    {
        $trans = DB::select('SELECT * FROM transactions WHERE trans_id = ?', [$trans_id]);
        return view('auth.employee.bank&trans.editTrans', ['trans' => $trans]);
    }

    public function editBankSave(Request $request, $bank_no)
    {
        $this->validate($request, [
            'bank_no' => 'required|integer|unique:bank,bank_no|min:1|max:2147483647',
            'bank_name' => 'required|string|max:50|min:1',
            'citizen_id' => 'required|integer|lte:2147483647|gte:1|exists:citizens,id',
            'balance' => 'required|numeric|min:-922337203685477.5808|max:922337203685477.5807',
        ]);
        DB::update('UPDATE bank SET bank_no=?, bank_name=?, citizen_id=?, balance=? WHERE bank_no=? ', [$request->bank_no, $request->bank_name, $request->citizen_id, $request->balance, $bank_no]);
        return redirect()->route('employee.bankPanel')->withSuccess('You have Edited the bank account successfuly');
    }

    public function editTransSave(Request $request, $trans_id)
    {
        $this->validate($request, [
            'bank_no' => 'required|integer|exists:bank,bank_no|min:1|max:2147483647',
            'amount' => 'required|numeric|max:922337203685477.5807|min:1',
            'sendto' => 'required|integer|exists:bank,bank_no|different:bank_no',
        ]);
        DB::update('UPDATE transactions SET bank_no=?, amount=?, sendto=? WHERE trans_id=? ', [$request->bank_no, $request->amount, $request->sendto, $trans_id]);
        return redirect()->route('employee.bankPanel')->withSuccess('You have Edited the bank account successfuly');
    }

    public function deleteBank($bank_no)
    {
        DB::delete('DELETE FROM bank WHERE bank_no=?', [$bank_no]);
        return redirect()->back()->withSuccess('You have Deleted the bank account successfuly');
    }

    public function deleteTrans($trans_id)
    {
        DB::delete('DELETE FROM transactions WHERE trans_id=?', [$trans_id]);
        return redirect()->back()->withSuccess('You have Deleted the bank Transaction successfuly');
    }

    public function roads()
    {
        //$roads = DB::select('SELECT * FROM roads');
        //Paginator::setPageName('roads');
        $roads = Road::sortable()->paginate(10, ['*'], 'roads');
        $sroads = StartRoad::sortable()->paginate(10, ['*'], 'sroads');
        $eroads = EndRoad::sortable()->paginate(10, ['*'], 'eroads');
        return view('auth.employee.roads.roads', ['roads' => $roads, 'sroads' => $sroads, 'eroads' => $eroads]);
    }

    public function addRoad()
    {
        return view('auth.employee.roads.addRoad');
    }

    public function addRoadSave(Request $request)
    {
        $this->validate($request, [
            'rname' => 'required|string|max:60',
            'lanes' => 'required|integer|min:1|max:2147483647',
            'rlength' => 'required|integer|min:1|max:2147483647',
        ]);
        Road::create([
            'rname' => $request->rname,
            'lanes' => $request->lanes,
            'rlength' => $request->rlength,
        ]);
        return redirect()->route('employee.roads')->withSuccess('You have added Road successfuly');
    }

    public function editRoad($road_id)
    {
        $road = DB::select('SELECT * FROM Roads WHERE road_id=?', [$road_id]);
        return view('auth.employee.roads.editRoad', ['road' => $road]);
    }

    public function editRoadSave(Request $request, $road_id)
    {
        $this->validate($request, [
            'rname' => 'required|string|max:60',
            'lanes' => 'required|integer|min:1|max:2147483647',
            'rlength' => 'required|integer|min:1|max:2147483647',
        ]);
        DB::update('UPDATE Roads SET rname=?, lanes=?, rlength=? WHERE road_id=? ', [$request->rname, $request->lanes, $request->rlength, $road_id]);
        return redirect()->route('employee.roads')->withSuccess('You have Edited the road successfuly');
    }

    public function deleteRoad($road_id)
    {
        DB::delete('DELETE FROM Roads WHERE road_id=?', [$road_id]);
        return redirect()->back()->withSuccess('You have Deleted the Road successfuly');
    }

    public function addStartRoad()
    {
        return view('auth.employee.roads.addStartRoad');
    }

    public function addStartRoadSave(Request $request)
    {
        $this->validate($request, [
            'rid' => 'required|integer|exists:roads,road_id|min:1|max:2147483647',
            'srid' => 'required|integer|exists:roads,road_id|min:1|max:2147483647',
        ]);

        StartRoad::create([
            'rid' => $request->rid,
            'srid' => $request->srid,
        ]);
        return redirect()->route('employee.roads')->withSuccess('You have added the Start road successfuly');
    }

    public function editStartRoad($rid, $srid)
    {
        return view('auth.employee.roads.editStartRoad', ['rid' => $rid, 'srid' => $srid]);
    }

    public function editStartRoadSave(Request $request, $rid, $srid)
    {
        $this->validate($request, [
            'rid' => 'required|integer|exists:roads,road_id|min:1|max:2147483647',
            'srid' => 'required|integer|exists:roads,road_id|min:1|max:2147483647',
        ]);
        DB::update('UPDATE Start_road SET rid = ?, srid = ? WHERE rid = ? AND srid = ?', [$request->rid, $request->srid, $rid, $srid]);
        return redirect()->route('employee.roads')->withSuccess('You have edited the start road successfuly');
    }

    public function deleteStartRoad($rid, $srid)
    {
        DB::delete('delete from Start_road where rid = ? and srid = ?', [$rid, $srid]);
        return redirect()->back()->withSuccess('You have deleted the start road care successfuly');
    }

    public function addEndRoad()
    {
        return view('auth.employee.roads.addEndRoad');
    }

    public function addEndRoadSave(Request $request)
    {
        $this->validate($request, [
            'rid' => 'required|integer|exists:roads,road_id|min:1|max:2147483647',
            'erid' => 'required|integer|exists:roads,road_id|min:1|max:2147483647',
        ]);

        EndRoad::create([
            'rid' => $request->rid,
            'erid' => $request->erid,
        ]);
        return redirect()->route('employee.roads')->withSuccess('You have added the End road successfuly');
    }

    public function editEndRoad($rid, $erid)
    {
        return view('auth.employee.roads.editEndRoad', ['rid' => $rid, 'erid' => $erid]);
    }

    public function editEndRoadSave(Request $request, $rid, $erid)
    {
        $this->validate($request, [
            'rid' => 'required|integer|exists:roads,road_id|min:1|max:2147483647',
            'erid' => 'required|integer|exists:roads,road_id|min:1|max:2147483647',
        ]);
        DB::update('UPDATE End_road SET rid = ?, erid = ? WHERE rid = ? AND erid = ?', [$request->rid, $request->erid, $rid, $erid]);
        return redirect()->route('employee.roads')->withSuccess('You have edited the end road successfuly');
    }

    public function deleteEndRoad($rid, $erid)
    {
        DB::delete('delete from End_road where rid = ? and erid = ?', [$rid, $erid]);
        return redirect()->back()->withSuccess('You have deleted the end road successfuly');
    }

    public function lands()
    {
        $lands = Land::sortable()->paginate(10, ['*'], 'lands');
        return view('auth.employee.lands.lands', ['lands' => $lands]);
    }

    public function addLand()
    {
        return view('auth.employee.lands.addLand');
    }

    public function addLandSave(Request $request)
    {
        //dd('1');
        $this->validate($request, [
            'llength' => 'required|integer|min:1|max:2147483647',
            'lwidth' => 'required|integer|min:1|max:2147483647',
            'rid' => 'required|integer|exists:Roads,road_id|min:1|max:2147483647',
        ]);
        //dd('2');
        Land::create([
            'llength' => $request->llength,
            'lwidth' => $request->lwidth,
            'rid' => $request->rid,
        ]);
        //dd('3');
        return redirect()->route('employee.lands')->withSuccess('You have added Land successfuly');
    }

    public function editLand($land_id)
    {
        $land = DB::select('SELECT * FROM Lands WHERE land_id=?', [$land_id]);
        return view('auth.employee.lands.editLand', ['land' => $land]);
    }

    public function editLandSave(Request $request, $land_id)
    {
        $this->validate($request, [
            'llength' => 'required|integer|min:1|max:2147483647',
            'lwidth' => 'required|integer|min:1|max:2147483647',
            'rid' => 'required|integer|exists:Roads,road_id|min:1|max:2147483647',
        ]);
        DB::update('UPDATE Lands SET llength=?, lwidth=?, rid=? WHERE land_id=? ', [$request->llength, $request->lwidth, $request->rid, $land_id]);
        return redirect()->route('employee.lands')->withSuccess('You have Edited the land successfuly');
    }

    public function deleteLand($land_id)
    {
        DB::delete('DELETE FROM Lands WHERE land_id=?', [$land_id]);
        return redirect()->back()->withSuccess('You have Deleted the Land successfuly');
    }

    public function buildings()
    {
        $buildings = Building::sortable()->paginate(10, ['*'], 'buildings');
        //$buildings = Building::simplePaginate(10);
        //$homes = Home::simplePaginate(10);
        $homes = Home::sortable()->paginate(10, ['*'], 'homes');
        return view('auth.employee.building&homes.buildings', ['buildings' => $buildings, 'homes' => $homes]);
    }

    public function addBuilding()
    {
        return view('auth.employee.building&homes.addbuilding');
    }

    public function addBuildingSave(Request $request)
    {
        $this->validate($request, [
            'no_flats' => 'required|integer|min:1|max:2147483647',
            'no_floors' => 'required|integer|min:1|max:2147483647',
            'lid' => 'required|integer|exists:Lands,land_id|min:1|max:2147483647',
            'sb_type' => 'required|string|max:60',
            'area' => 'required|integer|min:1|max:2147483647',
        ]);
        Building::create([
            'no_flats' => $request->no_flats,
            'no_floors' => $request->no_floors,
            'lid' => $request->lid,
            'sb_type' => $request->sb_type,
            'area' => $request->area,
        ]);
        return redirect()->route('employee.buildings')->withSuccess('You have added Building successfuly');
    }

    public function editBuilding($building_id)
    {
        $building = DB::select('SELECT * FROM Buildings WHERE building_id=?', [$building_id]);
        return view('auth.employee.building&homes.editbuilding', ['building' => $building]);
    }

    public function editBuildingSave(Request $request, $building_id)
    {
        $this->validate($request, [
            'no_flats' => 'required|integer|min:1|max:2147483647',
            'no_floors' => 'required|integer|min:1|max:2147483647',
            'lid' => 'required|integer|exists:Lands,land_id|min:1|max:2147483647',
            'sb_type' => 'required|string|max:60',
            'area' => 'required|integer|min:1|max:2147483647',
            'status' => 'required|in:0,1'
        ]);
        DB::update('UPDATE Buildings SET no_flats=?, no_floors=?, lid=?, sb_type=?, area=? WHERE building_id=? ', [$request->no_flats, $request->no_floors, $request->lid, $request->sb_type,  $request->area, $building_id]);
        if($request->status == 0){
            DB::statement('exec delete_building @id =?',[$building_id]);
        }
        return redirect()->route('employee.buildings')->withSuccess('You have Edited the home successfuly');
    }

    /* public function deleteBuilding($building_id)
    {
        // DB::delete('DELETE FROM Buildings WHERE building_id=?', [$building_id]);
        DB::statement('exec delete_building @id =?',[$building_id]);
        return redirect()->back()->withSuccess('You have Deleted the building successfuly');
    } */

    public function addHome()
    {
        return view('auth.employee.building&homes.addhome');
    }

    public function addHomeSave(Request $request)
    {
        //dd(1);
        $this->validate($request, [
            'bid' => 'required|integer|exists:Buildings,building_id|min:1|max:2147483647',
            'area' => 'required|integer|min:1|max:2147483647',
            'floor_no' => 'required|integer|min:1|max:2147483647',
            'rooms_no' => 'required|integer|min:1|max:2147483647',
            'home_rent' => 'required|numeric|max:922337203685477.5807|min:1',
        ]);
        //dd(2);
        Home::create([
            'bid' => $request->bid,
            'area' => $request->area,
            'floor_no' => $request->floor_no,
            'rooms_no' => $request->rooms_no,
            'home_rent' => $request->home_rent,
        ]);
        //dd(3);
        return redirect()->route('employee.buildings')->withSuccess('You have added Home successfuly');
    }

    public function editHome($home_id)
    {
        $home = DB::select('SELECT * FROM Homes WHERE home_id=?', [$home_id]);
        return view('auth.employee.building&homes.edithome', ['home' => $home]);
    }

    public function editHomeSave(Request $request, $home_id)
    {
        $this->validate($request, [
            'bid' => 'required|integer|exists:Buildings,building_id|min:1|max:2147483647',
            'area' => 'required|integer|min:1|max:2147483647',
            'floor_no' => 'required|integer|min:1|max:2147483647',
            'rooms_no' => 'required|integer|min:1|max:2147483647',
            'home_rent' => 'required|numeric|max:922337203685477.5807|min:1',
            'status' => 'required|in:0,1'
        ]);
        DB::update('UPDATE Homes SET bid=?, area=?, floor_no=?, rooms_no=?, home_rent=? WHERE home_id=? ', [$request->bid, $request->area, $request->floor_no, $request->rooms_no, $request->home_rent, $home_id]);
        if($request->status == 0){
            DB::statement('exec delete_home @id =?',[$home_id]);
        }
        return redirect()->route('employee.buildings')->withSuccess('You have Edited the home successfuly');
    }

    /* public function deleteHome($home_id)
    {
        //DB::delete('DELETE FROM Homes WHERE home_id=?', [$home_id]);
        DB::statement('exec delete_home @id =?',[$home_id]);
        return redirect()->back()->withSuccess('You have Deleted the home successfuly');
    } */

    public function water()
    {
        $readers = Water::sortable()->paginate(10, ['*'], 'readers');
        $logs = WaterHis::sortable()->paginate(10, ['*'], 'logs');
        return view('auth.employee.water.panel', ['readers' => $readers, 'logs' => $logs]);
    }

    public function addWater()
    {
        return view('auth.employee.water.add');
    }

    public function addWaterSave(Request $request)
    {
        //dd(1);
        $this->validate($request, [
            'bid' => 'required|integer|exists:Buildings,building_id|min:1|max:2147483647',
            'hid' => 'required|integer|exists:Homes,home_id|min:1|max:2147483647',
        ]);
        //dd(2);
        Water::create([
            'bid' => $request->bid,
            'hid' => $request->hid,
        ]);
        //dd(3);
        return redirect()->route('employee.water')->withSuccess('You have added reader successfuly');
    }

    public function editWater($reader_id)
    {
        $reader = DB::select('SELECT * FROM water WHERE reader_id=?', [$reader_id]);
        return view('auth.employee.water.edit', ['reader' => $reader]);
    }

    public function editWaterSave(Request $request, $reader_id)
    {
        $this->validate($request, [
            'bid' => 'required|integer|exists:Buildings,building_id|min:1|max:2147483647',
            'hid' => 'required|integer|exists:Homes,home_id|min:1|max:2147483647',
        ]);
        DB::update('UPDATE water SET bid=?, hid=? WHERE reader_id=? ', [$request->bid, $request->hid, $reader_id]);
        return redirect()->route('employee.water')->withSuccess('You have Edited the reader successfuly');
    }

    public function deleteWater($reader_id)
    {
        DB::delete('DELETE FROM water WHERE reader_id=?', [$reader_id]);
        return redirect()->back()->withSuccess('You have Deleted the water reader successfuly');
    }

    public function gas()
    {
        $readers = Gas::sortable()->paginate(10, ['*'], 'readers');
        $logs = GasHis::sortable()->paginate(10, ['*'], 'logs');
        return view('auth.employee.gas.panel', ['readers' => $readers, 'logs' => $logs]);
    }

    public function addGas()
    {
        return view('auth.employee.gas.add');
    }

    public function addGasSave(Request $request)
    {
        //dd(1);
        $this->validate($request, [
            'bid' => 'required|integer|exists:Buildings,building_id|min:1|max:2147483647',
            'hid' => 'required|integer|exists:Homes,home_id|min:1|max:2147483647',
        ]);
        //dd(2);
        Gas::create([
            'bid' => $request->bid,
            'hid' => $request->hid,
        ]);
        //dd(3);
        return redirect()->route('employee.gas')->withSuccess('You have added reader successfuly');
    }

    public function editGas($reader_id)
    {
        $reader = DB::select('SELECT * FROM gas WHERE reader_id=?', [$reader_id]);
        return view('auth.employee.gas.edit', ['reader' => $reader]);
    }

    public function editGasSave(Request $request, $reader_id)
    {
        $this->validate($request, [
            'bid' => 'required|integer|exists:Buildings,building_id|min:1|max:2147483647',
            'hid' => 'required|integer|exists:Homes,home_id|min:1|max:2147483647',
        ]);
        DB::update('UPDATE gas SET bid=?, hid=? WHERE reader_id=? ', [$request->bid, $request->hid, $reader_id]);
        return redirect()->route('employee.gas')->withSuccess('You have Edited the reader successfuly');
    }

    public function deleteGas($reader_id)
    {
        DB::delete('DELETE FROM gas WHERE reader_id=?', [$reader_id]);
        return redirect()->back()->withSuccess('You have Deleted the gas reader successfuly');
    }

    public function electricity()
    {
        $readers = Electricity::sortable()->paginate(10, ['*'], 'readers');
        $logs = ElectricityHis::sortable()->paginate(10, ['*'], 'logs');
        return view('auth.employee.electricity.panel', ['readers' => $readers, 'logs' => $logs]);
    }

    public function addElectricity()
    {
        return view('auth.employee.electricity.add');
    }

    public function addElectricitySave(Request $request)
    {
        //dd(1);
        $this->validate($request, [
            'bid' => 'required|integer|exists:Buildings,building_id|min:1|max:2147483647',
            'hid' => 'required|integer|exists:Homes,home_id|min:1|max:2147483647',
        ]);
        //dd(2);
        Electricity::create([
            'bid' => $request->bid,
            'hid' => $request->hid,
        ]);
        //dd(3);
        return redirect()->route('employee.electricity')->withSuccess('You have added reader successfuly');
    }

    public function editElectricity($reader_id)
    {
        $reader = DB::select('SELECT * FROM elec WHERE reader_id=?', [$reader_id]);
        return view('auth.employee.electricity.edit', ['reader' => $reader]);
    }

    public function editElectricitySave(Request $request, $reader_id)
    {
        $this->validate($request, [
            'bid' => 'required|integer|exists:Buildings,building_id|min:1|max:2147483647',
            'hid' => 'required|integer|exists:Homes,home_id|min:1|max:2147483647',
        ]);
        DB::update('UPDATE elec SET bid=?, hid=? WHERE reader_id=? ', [$request->bid, $request->hid, $reader_id]);
        return redirect()->route('employee.electricity')->withSuccess('You have Edited the reader successfuly');
    }

    public function deleteElectricity($reader_id)
    {
        DB::delete('DELETE FROM elec WHERE reader_id=?', [$reader_id]);
        return redirect()->back()->withSuccess('You have Deleted the Electricity reader successfuly');
    }


    public function jobs()
    {
        $jobs = Job::sortable()->paginate(10, ['*'], 'jobs');
        $ajobs = AsJob::sortable()->paginate(10, ['*'], 'ajobs');
        return view('auth.employee.job.panel', ['jobs' => $jobs, 'ajobs' => $ajobs]);
    }

    public function addJob()
    {
        return view('auth.employee.job.add');
    }

    public function addJobSave(Request $request)
    {
        $this->validate($request, [
            'salary' => 'required|numeric|max:922337203685477.5807|min:1',
            'jtype' => 'required|string|max:50',
            'work_place_id' => 'required|integer|min:1|max:2147483647',
            'confirm' => 'required|integer|in:0,1'
        ]);

        /* Job::create([
            'salary' => $request->salary,
            'jtype' => $request->jtype,
            'cofirm' => $request->cofirm,
            'work_place_id' => $request->work_place_id,
        ]); */
        DB::insert(
            'INSERT into jobs (salary, jtype,work_place_id ,confirm, created_at, updated_at) values (?, ?, ?, ?,?,?)',
            [$request->salary, $request->jtype, $request->work_place_id, $request->confirm, now(), now()]
        );
        return redirect()->route('employee.jobs')->withSuccess('You have added the job successfuly');
    }

    public function editJob($jid)
    {
        $job = DB::select('SELECT * FROM jobs WHERE jid=?', [$jid]);
        return view('auth.employee.job.edit', ['job' => $job]);
    }

    public function editJobSave(Request $request, $jid)
    {
        /* intmax=2147483647 */
        $this->validate($request, [
            'salary' => 'required|numeric|max:922337203685477.5807|min:1',
            'jtype' => 'required|string|max:50',
            'work_place_id' => 'required|integer|min:1|max:2147483647',
            'confirm' => 'required|integer|in:0,1',
            'status' => 'required|integer|in:0,1'
        ]);
        DB::update(
            'UPDATE jobs SET salary=?, jtype=?, work_place_id=?, confirm=?, updated_at=? WHERE jid=? ',
            [$request->salary, $request->jtype, $request->work_place_id, $request->confirm, now(), $jid]
        );
        if($request->status == 0){
            DB::statement('exec delete_job @id =?',[$jid]);
        }
        return redirect()->route('employee.jobs')->withSuccess('You have edit the job successfuly');
    }

    /* public function deletejob($jid)
    {
        DB::delete('DELETE FROM jobs WHERE jid=?', [$jid]);
        DB::statement('exec delete_job @id =?',[$jid]);
        return redirect()->back()->withSuccess('You have Deleted the job successfuly');
    } */

    public function addAJob()
    {
        return view('auth.employee.job.adda');
    }

    public function addAJobSave(Request $request)
    {
        $this->validate($request, [
            'citizen_id' => 'required|integer|exists:citizens,id|min:1|max:2147483647',
            'jid' => 'required|integer|exists:jobs,jid|min:1|max:2147483647',
        ]);
        $state = DB::select('SELECT confirm,status from jobs where jid=?', [$request->jid]);
        if ($state[0]->confirm == 0) {
            return redirect()->back()->withInput()->withErrors('Can Not Assign Unconfirmed Job');
        }
        if ($state[0]->status == 0) {
            return redirect()->back()->withInput()->withErrors('Can Not Assign Idle Job');
        }
        AsJob::create([
            'citizen_id' => $request->citizen_id,
            'jid' => $request->jid,
        ]);
        return redirect()->route('employee.jobs')->withSuccess('You have assign the job successfuly');
    }

    public function editAJob($id)
    {
        $ajob = DB::select('SELECT * FROM asjobs WHERE id=?', [$id]);
        return view('auth.employee.job.editA', ['ajob' => $ajob]);
    }

    public function editAJobSave(Request $request, $id)
    {
        $this->validate($request, [
            'citizen_id' => 'required|integer|exists:citizens,id|min:1|max:2147483647',
            'jid' => 'required|integer|exists:jobs,jid|min:1|max:2147483647',
            'status' => 'required|integer|in:0,1'
        ]);
        $state = DB::select('SELECT confirm from jobs where jid=?', [$request->jid]);
        if ($state[0]->confirm == 0) {
            return redirect()->back()->withInput()->withErrors('Can Not Assign Unconfirmed Job');
        }
        DB::update('UPDATE asjobs SET citizen_id=?, jid=?, status=? WHERE id=? ', [$request->citizen_id, $request->jid,$request->status, $id]);
        return redirect()->route('employee.jobs')->withSuccess('You have edit the Assign successfuly');
    }

    /* public function deleteajob($id)
    {
        DB::delete('DELETE FROM asjobs WHERE id=?', [$id]);
        return redirect()->back()->withSuccess('You have Deleted the ass successfuly');
    } */

    public function cars()
    {
        $cars = Car::sortable()->paginate(10, ['*'], 'cars');
        return view('auth.employee.car.panel', ['cars' => $cars]);
    }

    public function addCar()
    {
        return view('auth.employee.car.add');
    }

    public function addCarSave(Request $request)
    {
        $this->validate($request, [
            'owner_id' => 'required|integer|exists:citizens,id|min:1|max:2147483647',
            'name' => 'required|string|max:100',
            'model' => 'required|integer|min:1900|max:2022',
            'color' => 'required|string|max:100',
            'motor_number' => 'required|string|max:100',
            'chasette_number' => 'required|integer|min:1|max:2147483647',
            'motor_capacity' => 'required|integer|min:1|max:2147483647',
            'cylinder_number' => 'required|integer|min:1|max:2147483647',
            'fuel_tank' => 'required|integer|min:1|max:2147483647',
            'hp' => 'required|integer|min:1|max:2147483647',
            'nos' => 'required|integer|min:1|max:2147483647',
            'tt' => 'required|integer|min:1|max:2147483647',
        ]);
        //dd('1');
        Car::create([
            'owner_id' => $request->owner_id,
            'name' => $request->name,
            'model' => $request->model,
            'color' => $request->color,
            'motor_number' => $request->motor_number,
            'chasette_number' => $request->chasette_number,
            'motor_capacity' => $request->motor_capacity,
            'cylinder_number' => $request->cylinder_number,
            'fuel_tank' => $request->fuel_tank,
            'hp' => $request->hp,
            'nos' => $request->nos,
            'tt' => $request->tt,
        ]);
        //dd('2');
        return redirect()->route('employee.cars')->withSuccess('You have added car successfuly');
    }

    public function editCar($car_id)
    {
        $car = DB::select('SELECT * FROM car WHERE car_id=?', [$car_id]);
        return view('auth.employee.car.edit', ['car' => $car]);
    }

    public function editCarSave(Request $request, $car_id)
    {
        $this->validate($request, [
            'owner_id' => 'required|integer|exists:citizens,id|min:1|max:2147483647',
            'name' => 'required|string|max:100',
            'model' => 'required|integer|min:1900|max:2022',
            'color' => 'required|string|max:100',
            'motor_number' => 'required|string|max:100',
            'chasette_number' => 'required|integer|min:1|max:2147483647',
            'motor_capacity' => 'required|integer|min:1|max:2147483647',
            'cylinder_number' => 'required|integer|min:1|max:2147483647',
            'fuel_tank' => 'required|integer|min:1|max:2147483647',
            'hp' => 'required|integer|min:1|max:2147483647',
            'nos' => 'required|integer|min:1|max:2147483647',
            'tt' => 'required|integer|min:1|max:2147483647',
        ]);
        DB::update(
            'UPDATE car SET owner_id=?, name=?, model=?, color=?, motor_number=?, chasette_number=?, motor_capacity=?, cylinder_number=?, fuel_tank=?, hp=?, nos=?, tt=? WHERE car_id=? ',
            [$request->owner_id, $request->name, $request->model, $request->color, $request->motor_number, $request->chasette_number, $request->motor_capacity, $request->cylinder_number, $request->fuel_tank, $request->hp, $request->nos, $request->tt, $car_id]
        );
        return redirect()->route('employee.cars')->withSuccess('You have edited the car successfuly');
    }

    public function deleteCar($car_id)
    {
        DB::delete('DELETE FROM car WHERE car_id=?', [$car_id]);
        return redirect()->back()->withSuccess('You have Deleted the car successfuly');
    }

    public function companies()
    {
        $coms = Company::sortable()->paginate(10, ['*'], 'coms');
        return view('auth.employee.company.panel', ['coms' => $coms]);
    }

    public function addCompany()
    {
        return view('auth.employee.company.add');
    }

    public function addCompanySave(Request $request)
    {
        $this->validate($request, [
            'cname' => 'required|string|max:60',
            'field' => 'required|string|max:60',
            'Capital' => 'required|numeric|max:922337203685477.5807|min:1',
            'Bid' => 'required|integer|exists:Buildings,building_id|min:1|max:2147483647',
        ]);
        //dd('1');
        Company::create([
            'cname' => $request->cname,
            'field' => $request->field,
            'Capital' => $request->Capital,
            'Bid' => $request->Bid,
        ]);
        //dd('2');
        return redirect()->route('employee.companies')->withSuccess('You have added company successfuly');
    }

    public function editCompany($company_id)
    {
        $com = DB::select('SELECT * FROM Companies WHERE company_id=?', [$company_id]);
        return view('auth.employee.company.edit', ['com' => $com]);
    }

    public function editCompanySave(Request $request, $company_id)
    {
        //dd($request);
        $this->validate($request, [
            'cname' => 'required|string|max:60',
            'field' => 'required|string|max:60',
            'Capital' => 'required|numeric|max:922337203685477.5807|min:1',
            'Bid' => 'required|integer|exists:Buildings,building_id|min:1|max:2147483647',
            'status' =>'required|integer|in:0,1'
        ]);
        /* dd('1'); */
        DB::update('UPDATE Companies SET cname=?, field=?, Capital=?, Bid=? WHERE company_id=? ', [$request->cname, $request->field, $request->Capital, $request->Bid, $company_id]);
        //dd('2');
        if($request->status == 0){
            DB::statement('exec delete_company @id = ?',[$company_id]);
        }
        return redirect()->route('employee.companies')->withSuccess('You have edit the Company successfuly');
    }

    /* public function deleteCompany($company_id)
    {
        //DB::delete('DELETE FROM Companies WHERE company_id=?', [$company_id]);
        DB::statement('exec delete_company @id = ?',[$company_id]);
        return redirect()->back()->withSuccess('You have Deleted the company successfuly');
    } */

    public function iots()
    {
        $iots = Iot::sortable()->paginate(10, ['*'], 'iots');
        return view('auth.employee.iot.panel', ['iots' => $iots]);
    }

    public function addIot()
    {
        return view('auth.employee.iot.add');
    }

    public function addIotSave(Request $request)
    {
        $this->validate($request, [
            'pname' => 'required|string|max:50',
            'hid' => 'required|integer|exists:Homes,home_id|min:1',
            'bid' => 'required|integer|exists:Buildings,building_id|min:1',
        ]);
        //dd('1');
        Iot::create([
            'pname' => $request->pname,
            'hid' => $request->hid,
            'bid' => $request->bid,
        ]);
        //dd('2');
        return redirect()->route('employee.iots')->withSuccess('You have added an IOT successfuly');
    }

    public function editIot($id)
    {
        $iot = DB::select('SELECT * FROM iots WHERE id=?', [$id]);
        return view('auth.employee.iot.edit', ['iot' => $iot]);
    }

    public function editIotSave(Request $request, $id)
    {
        //dd($request);
        $this->validate($request, [
            'pname' => 'required|string|max:50',
            'state' => 'required|integer|in:0,1',
            'hid' => 'required|integer|exists:Homes,home_id|min:1',
            'bid' => 'required|integer|exists:Buildings,building_id|min:1',
        ]);
        /* dd('1'); */
        DB::update('UPDATE iots SET pname=?, state=?, hid=?, bid=? WHERE id=? ', [$request->pname, $request->state, $request->hid, $request->bid, $id]);
        //dd('2');
        return redirect()->route('employee.iots')->withSuccess('You have edited the IOT successfuly');
    }

    public function deleteIot($id)
    {
        DB::delete('DELETE FROM iots WHERE id=?', [$id]);
        return redirect()->back()->withSuccess('You have Deleted the IOT successfuly');
    }

    public function forgetPasswords()
    {
        $fors = ForgotPassword::sortable('state')->paginate(10, ['*'], 'forgotpasswords');
        return view('auth.employee.forgotpassowrds', ['fors' => $fors]);
    }

    public function forgetPasswordsState($id)
    {
        DB::update('UPDATE forgotpasswords SET state = 1 WHERE id=?', [$id]);
        return redirect()->back()->withSuccess('You have Edited request successfuly');
    }

    public function complaints()
    {
        $coms = Compliment::sortable('state')->paginate(10, ['*'], 'complaints');
        return view('auth.employee.complaints', ['coms' => $coms]);
    }

    public function complaintsState($id)
    {
        DB::update('UPDATE compliments SET state = 1 WHERE id=?', [$id]);
        return redirect()->back()->withSuccess('You have Edited complaint successfuly');
    }

    public function appointments()
    {
        $apps = Appointment::sortable('state')->paginate(10, ['*'], 'appointments');
        return view('auth.employee.appointments', ['apps' => $apps]);
    }

    public function appointmentsState($id)
    {
        DB::update('UPDATE appointments SET state = 1 WHERE id=?', [$id]);
        return redirect()->back()->withSuccess('You have Edited appointment successfuly');
    }

    public function apiUsers(){
        $users = User::all();
        dd($users);
    }
}
