<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\Auth\Citizen\CitizenLoginController;
use App\Http\Controllers\Auth\Citizen\CitizenController;
use App\Http\Controllers\PaymentController;

use App\Http\Controllers\Auth\Employee\EmployeeLoginController;
use App\Http\Controllers\Auth\Employee\EmployeeController;

use App\Http\Controllers\Auth\Admin\AdminLoginController;
use App\Http\Controllers\Auth\Admin\AdminController;

//-----------------------------------------------------------------------------------//
//---------------------------------------Home----------------------------------------//
//-----------------------------------------------------------------------------------//

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contactUs', [HomeController::class, 'contactUs'])->name('contactUs');
Route::get('/forgotPassword', [HomeController::class, 'forgotPassword'])->name('forgotPassword');
Route::post('/forgotPassword', [HomeController::class, 'forgotPasswordSave'])->name('forgotPassword.save');
Route::get('/eGovernment', [HomeController::class, 'eGovernment'])->name('eGovernment');

//-----------------------------------------------------------------------------------//
//--------------------------------------Citizen--------------------------------------//
//-----------------------------------------------------------------------------------//

Route::get('/citizen/login', [CitizenLoginController::class, 'index'])->name('citizen.login');
Route::post('/citizen/login', [CitizenLoginController::class, 'login'])->name('citizen.login.save');
Route::get('/citizen/signOut', [CitizenController::class, 'signOut'])->name('citizen.signOut');

Route::get('/citizen', [CitizenController::class, 'index'])->name('citizen');
Route::post('/citizen/care', [CitizenController::class, 'careshow'])->name('citizen.care.show');

Route::get('/citizen/dashboard', [CitizenController::class, 'dashboard'])->name('citizen.dashboard');
Route::get('/citizen/changePassword', [CitizenController::class, 'showChangePassword'])->name('citizen.changePassword');
Route::post('/citizen/changePassword', [CitizenController::class, 'changePassword'])->name('citizen.changePassword.save');
Route::get('/citizen/changePhoto', [CitizenController::class, 'showChangePhoto'])->name('citizen.changePhoto');
Route::post('/citizen/changePhoto', [CitizenController::class, 'changePhoto'])->name('citizen.changePhoto.save');
Route::post('/citizen/dashboard', [CitizenController::class, 'citizenRequest'])->name('citizen.request');

Route::get('/citizen/apartment', [CitizenController::class, 'apartment'])->name('citizen.apartment');
/* Route::get('/citizen/apartment/payment', [CitizenController::class, 'payment'])->name('citizen.apartment.payment');*/
/* Route::get('/citizen/apartment/payment', [PaymentController::class, 'index']); */
Route::post('/citizen/apartment/charge', [PaymentController::class, 'charge']);
Route::get('/citizen/apartment/success', [PaymentController::class, 'success']);
Route::get('/citizen/apartment/error', [PaymentController::class, 'error']);

Route::get('/citizen/bank', [CitizenController::class, 'bank'])->name('citizen.bank');
Route::post('/citizen/bank', [CitizenController::class, 'bank'])->name('citizen.bank.trans');

Route::get('/citizen/job', [CitizenController::class, 'job'])->name('citizen.job');
Route::post('/citizen/job', [CitizenController::class, 'job'])->name('citizen.job.search');

Route::get('/citizen/car', [CitizenController::class, 'car'])->name('citizen.car');
Route::post('/citizen', [CitizenController::class, 'sos'])->name('citizen.sos');

//---------------------------------E-government-----------------------------------//

Route::post('/citizen/certficateOfBirth', [CitizenController::class, 'certficateOfBirth'])->name('citizen.certficateOfBirth');
Route::get('/citizen/idCard', [CitizenController::class, 'idCard'])->name('citizen.idCard');
Route::get('/citizen/drivingLicense', [CitizenController::class, 'drivingLicense'])->name('citizen.drivingLicense');
Route::get('/citizen/appointmentReservation', [CitizenController::class, 'appointmentReservation'])->name('citizen.appointmentReservation');
Route::post('/citizen/appointmentReservation', [CitizenController::class, 'appointmentReservationSave'])->name('citizen.appointmentReservation.save');
Route::get('/citizen/compliment', [CitizenController::class, 'compliment'])->name('citizen.compliment');
Route::post('/citizen/compliment', [CitizenController::class, 'complimentSave'])->name('citizen.compliment.save');
Route::post('/citizen/contract', [CitizenController::class, 'showContract'])->name('citizen.showContract');
Route::get('/citizen/contract', [CitizenController::class, 'showContract'])->name('citizen.showContract');

//-----------------------------------------------------------------------------------//
//-------------------------------------Empolyee--------------------------------------//
//-----------------------------------------------------------------------------------//

Route::get('/employee', [EmployeeController::class, 'index'])->name('employee');
Route::get('/employee/login', [EmployeeLoginController::class, 'index'])->name('employee.login');
Route::post('/employee/login', [EmployeeLoginController::class, 'login'])->name('employee.login.save');
Route::get('/employee/signOut', [EmployeeController::class, 'signOut'])->name('employee.signOut');
Route::get('/employee/profile', [EmployeeController::class, 'dashboard'])->name('employee.profile');
Route::get('/employee/changePassword', [EmployeeController::class, 'showChangePassword'])->name('employee.changePassword');
Route::post('/employee/changePassword', [EmployeeController::class, 'changePassword'])->name('employee.changePassword.save');

Route::get('/employee/policeRequests', [EmployeeController::class, 'sosRequests'])->name('employee.sos');
Route::post('/employee/policeRequest/{id}', [EmployeeController::class, 'soschecked'])->name('employee.sos.checked');

Route::get('/employee/citizensRequests', [EmployeeController::class, 'citizenRequests'])->name('employee.citizenRequests');
Route::get('/employee/citizenRequest/{req_id}', [EmployeeController::class, 'citizenRequestsDone'])->name('employee.citizenRequests.done');

Route::get('/employee/editCitizens', [EmployeeController::class, 'editCitizens'])->name('employee.editCitizens');
Route::get('/employee/addCitizen', [EmployeeController::class, 'addCitizen'])->name('employee.addCitizen');
Route::post('/employee/addCitizen', [EmployeeController::class, 'addCitizenSave'])->name('employee.addCitizen.save');
Route::get('/employee/deleteCitizen/{id}', [EmployeeController::class, 'deleteCitizen'])->name('employee.deleteCitizen');
Route::get('/employee/editCitizen/{id}', [EmployeeController::class, 'editCitizen'])->name('employee.editCitizen');
Route::post('/employee/editCitizen/{id}', [EmployeeController::class, 'editCitizenSave'])->name('employee.editCitizen.save');

Route::get('/employee/citizenCare', [EmployeeController::class, 'citizenCare'])->name('employee.citizenCare');
Route::get('/employee/addCitizenCare', [EmployeeController::class, 'addCitizenCare'])->name('employee.addCitizenCare');
Route::post('/employee/addCitizenCare', [EmployeeController::class, 'addCitizenCareSave'])->name('employee.addCitizenCare.save');
Route::get('/employee/deleteCitizenCare/{id}/{cid}', [EmployeeController::class, 'deleteCitizenCare'])->name('employee.deleteCitizenCare');
Route::get('/employee/editCitizenCare/{id}/{cid}', [EmployeeController::class, 'editCitizenCare'])->name('employee.editCitizenCare');
Route::post('/employee/editCitizenCare/{id}/{cid}', [EmployeeController::class, 'editCitizenCareSave'])->name('employee.editCitizenCare.save');

Route::get('/employee/bankPanel', [EmployeeController::class, 'bankPanel'])->name('employee.bankPanel');
Route::get('/employee/addBankAccount', [EmployeeController::class, 'addBank'])->name('employee.addBankAccount');
Route::post('/employee/addBankAccount', [EmployeeController::class, 'addBankSave'])->name('employee.addBankAccount.save');
Route::get('/employee/editBankAccount/{bank_no}', [EmployeeController::class, 'editBank'])->name('employee.editBankAccount');
Route::post('/employee/editBankAccount/{bank_no}', [EmployeeController::class, 'editBankSave'])->name('employee.editBankAccount.save');
Route::get('/employee/deleteBankAccount/{bank_no}', [EmployeeController::class, 'deleteBank'])->name('employee.deleteBankAccount');

Route::get('/employee/addBankTransaction', [EmployeeController::class, 'addTrans'])->name('employee.addBankTrans');
Route::post('/employee/addBankTransaction', [EmployeeController::class, 'addTransSave'])->name('employee.addBankTransaction.save');
Route::get('/employee/editBankTransaction/{trans_id}', [EmployeeController::class, 'edittrans'])->name('employee.editBankTransaction');
Route::post('/employee/editBankTransaction/{trans_id}', [EmployeeController::class, 'editTransSave'])->name('employee.editBankTransaction.save');
Route::get('/employee/deleteBankTransaction/{trans_id}', [EmployeeController::class, 'deleteTrans'])->name('employee.deleteBankTransaction');

Route::get('/employee/roads/', [EmployeeController::class, 'roads'])->name('employee.roads');
Route::get('/employee/addRoad/', [EmployeeController::class, 'addRoad'])->name('employee.addRoad');
Route::post('/employee/addRoad', [EmployeeController::class, 'addRoadSave'])->name('employee.addRoad.save');
Route::get('/employee/editRoad/{road_id}', [EmployeeController::class, 'editRoad'])->name('employee.editRoad');
Route::post('/employee/editRoad/{road_id}', [EmployeeController::class, 'editRoadSave'])->name('employee.editRoad.save');
Route::get('/employee/deleteRoad/{road_id}', [EmployeeController::class, 'deleteRoad'])->name('employee.deleteRoad');

Route::get('/employee/addStartRoad', [EmployeeController::class, 'addStartRoad'])->name('employee.addStartRoad');
Route::post('/employee/addStartRoad', [EmployeeController::class, 'addStartRoadSave'])->name('employee.addStartRoad.save');
Route::get('/employee/editStartRoad/{rid}/{srid}', [EmployeeController::class, 'editStartRoad'])->name('employee.editStartRoad');
Route::post('/employee/editStartRoad/{rid}/{srid}', [EmployeeController::class, 'editStartRoadSave'])->name('employee.editStartRoad.save');
Route::get('/employee/deleteStartRoad/{rid}/{srid}', [EmployeeController::class, 'deleteStartRoad'])->name('employee.deleteStartRoad');

Route::get('/employee/addEndRoad', [EmployeeController::class, 'addEndRoad'])->name('employee.addEndRoad');
Route::post('/employee/addEndRoad', [EmployeeController::class, 'addEndRoadSave'])->name('employee.addEndRoad.save');
Route::get('/employee/editEndRoad/{rid}/{erid}', [EmployeeController::class, 'editEndRoad'])->name('employee.editEndRoad');
Route::post('/employee/editEndRoad/{rid}/{erid}', [EmployeeController::class, 'editEndRoadSave'])->name('employee.editEndRoad.save');
Route::get('/employee/deleteEndRoad/{rid}/{erid}', [EmployeeController::class, 'deleteEndRoad'])->name('employee.deleteEndRoad');

Route::get('/employee/lands/', [EmployeeController::class, 'lands'])->name('employee.lands');
Route::get('/employee/addLand/', [EmployeeController::class, 'addLand'])->name('employee.addLand');
Route::post('/employee/addLand', [EmployeeController::class, 'addLandSave'])->name('employee.addLand.save');
Route::get('/employee/editLand/{land_id}', [EmployeeController::class, 'editLand'])->name('employee.editLand');
Route::post('/employee/editLand/{land_id}', [EmployeeController::class, 'editLandSave'])->name('employee.editLand.save');
Route::get('/employee/deleteLand/{land_id}', [EmployeeController::class, 'deleteLand'])->name('employee.deleteLand');

Route::get('/employee/buildings/', [EmployeeController::class, 'buildings'])->name('employee.buildings');
Route::get('/employee/addBuilding/', [EmployeeController::class, 'addBuilding'])->name('employee.addBuilding');
Route::post('/employee/addBuilding/', [EmployeeController::class, 'addBuildingSave'])->name('employee.addBuilding.save');
Route::get('/employee/editBuilding/{building_id}', [EmployeeController::class, 'editBuilding'])->name('employee.editBuilding');
Route::post('/employee/editBuilding/{building_id}', [EmployeeController::class, 'editBuildingSave'])->name('employee.editBuilding.save');
Route::get('/employee/deleteBuilding/{building_id}', [EmployeeController::class, 'deleteBuilding'])->name('employee.deleteBuilding');

Route::get('/employee/addHome/', [EmployeeController::class, 'addHome'])->name('employee.addHome');
Route::post('/employee/addHome/', [EmployeeController::class, 'addHomeSave'])->name('employee.addHome.save');
Route::get('/employee/editHome/{home_id}', [EmployeeController::class, 'editHome'])->name('employee.editHome');
Route::post('/employee/editHome/{home_id}', [EmployeeController::class, 'editHomeSave'])->name('employee.editHome.save');
Route::get('/employee/deleteHome/{home_id}', [EmployeeController::class, 'deleteHome'])->name('employee.deleteHome');

Route::get('/employee/Water', [EmployeeController::class, 'water'])->name('employee.water');
Route::get('/employee/WaterAdd', [EmployeeController::class, 'addWater'])->name('employee.waterAdd');
Route::post('/employee/WaterAdd', [EmployeeController::class, 'addWaterSave'])->name('employee.waterAdd.save');
Route::get('/employee/WaterEdit/{reader_id}', [EmployeeController::class, 'editWater'])->name('employee.editWater');
Route::post('/employee/WaterEdit/{reader_id}', [EmployeeController::class, 'editWaterSave'])->name('employee.editWater.save');
Route::get('/employee/WaterDelete/{reader_id}', [EmployeeController::class, 'deleteWater'])->name('employee.deleteWater');

Route::get('/employee/Gas', [EmployeeController::class, 'gas'])->name('employee.gas');
Route::get('/employee/GasAdd', [EmployeeController::class, 'addGas'])->name('employee.gasAdd');
Route::post('/employee/GasAdd', [EmployeeController::class, 'addGasSave'])->name('employee.gasAdd.save');
Route::get('/employee/GasEdit/{reader_id}', [EmployeeController::class, 'editGas'])->name('employee.editGas');
Route::post('/employee/GasEdit/{reader_id}', [EmployeeController::class, 'editGasSave'])->name('employee.editGas.save');
Route::get('/employee/GasDelete/{reader_id}', [EmployeeController::class, 'deleteGas'])->name('employee.deleteGas');

Route::get('/employee/Electricity', [EmployeeController::class, 'electricity'])->name('employee.electricity');
Route::get('/employee/ElectricityAdd', [EmployeeController::class, 'addElectricity'])->name('employee.electricityAdd');
Route::post('/employee/ElectricityAdd', [EmployeeController::class, 'addElectricitySave'])->name('employee.electricityAdd.save');
Route::get('/employee/ElectricityEdit/{reader_id}', [EmployeeController::class, 'editElectricity'])->name('employee.editeditElectricity');
Route::post('/employee/ElectricityEdit/{reader_id}', [EmployeeController::class, 'editElectricitySave'])->name('employee.editeditElectricity.save');
Route::get('/employee/ElectricityDelete/{reader_id}', [EmployeeController::class, 'deleteElectricity'])->name('employee.deleteElectricity');

Route::get('/employee/jobs', [EmployeeController::class, 'jobs'])->name('employee.jobs');
Route::get('/employee/addjob', [EmployeeController::class, 'addJob'])->name('employee.addJob');
Route::post('/employee/addjob', [EmployeeController::class, 'addJobSave'])->name('employee.addJob.save');
Route::get('/employee/editJob/{jid}', [EmployeeController::class, 'editJob'])->name('employee.editJob');
Route::post('/employee/editJob/{jid}', [EmployeeController::class, 'editJobSave'])->name('employee.editJob.save');
Route::get('/employee/deleteJob/{jid}', [EmployeeController::class, 'deletejob'])->name('employee.deletejob');

Route::get('/employee/addajob', [EmployeeController::class, 'addAJob'])->name('employee.addAJob');
Route::post('/employee/addajob', [EmployeeController::class, 'addAJobSave'])->name('employee.addAJob.save');
Route::get('/employee/editaJob/{id}', [EmployeeController::class, 'editAJob'])->name('employee.editAJob');
Route::post('/employee/editaJob/{id}', [EmployeeController::class, 'editAJobSave'])->name('employee.editAJob.save');
Route::get('/employee/deleteaJob/{id}', [EmployeeController::class, 'deleteajob'])->name('employee.deleteAJob');

Route::get('/employee/cars', [EmployeeController::class, 'cars'])->name('employee.cars');
Route::get('/employee/addCar', [EmployeeController::class, 'addCar'])->name('employee.addCar');
Route::post('/employee/addCar', [EmployeeController::class, 'addCarSave'])->name('employee.addCar.save');
Route::get('/employee/editCar/{car_id}', [EmployeeController::class, 'editCar'])->name('employee.editCar');
Route::post('/employee/editCar/{car_id}', [EmployeeController::class, 'editCarSave'])->name('employee.editCar.save');
Route::get('/employee/deleteaCar/{car_id}', [EmployeeController::class, 'deleteCar'])->name('employee.deleteCar');

Route::get('/employee/companies', [EmployeeController::class, 'companies'])->name('employee.companies');
Route::get('/employee/addCompany', [EmployeeController::class, 'addCompany'])->name('employee.addCompany');
Route::post('/employee/addCompany', [EmployeeController::class, 'addCompanySave'])->name('employee.addCompany.save');
Route::get('/employee/editCompany/{company_id}', [EmployeeController::class, 'editCompany'])->name('employee.editCompany');
Route::put('/employee/editCompany/{company_id}', [EmployeeController::class, 'editCompanySave'])->name('employee.editCompany.save');
Route::get('/employee/deleteCompany/{company_id}', [EmployeeController::class, 'deleteCompany'])->name('employee.deleteCompany');

Route::get('/employee/iots', [EmployeeController::class, 'iots'])->name('employee.iots');
Route::get('/employee/addIot', [EmployeeController::class, 'addIot'])->name('employee.addIot');
Route::post('/employee/addIot', [EmployeeController::class, 'addIotSave'])->name('employee.addIot.save');
Route::get('/employee/editIot/{id}', [EmployeeController::class, 'editIot'])->name('employee.editIot');
Route::put('/employee/editIotSave/{id}', [EmployeeController::class, 'editIotSave'])->name('employee.editIot.save');
Route::get('/employee/deleteIot/{id}', [EmployeeController::class, 'deleteIot'])->name('employee.deleteIot');

Route::get('/employee/forgetPasswords', [EmployeeController::class, 'forgetPasswords'])->name('employee.forgetPasswords');
//Route::get('/employee/forgetPasswords/{id}',[EmployeeController::class,'forgetPasswordsState'])->name('employee.forgetPasswordsState');
Route::post('/employee/forgetPasswords/{id}', [EmployeeController::class, 'forgetPasswordsState'])->name('employee.forgetPasswordsState');

Route::get('/employee/complaints', [EmployeeController::class, 'complaints'])->name('employee.complaints');
Route::post('/employee/complaints/{id}', [EmployeeController::class, 'complaintsState'])->name('employee.complaintsState');

Route::get('/employee/appointments', [EmployeeController::class, 'appointments'])->name('employee.appointments');
Route::post('/employee/appointments/{id}', [EmployeeController::class, 'appointmentsState'])->name('employee.appointmentsState');

Route::get('/employee/apiUsers', [EmployeeController::class, 'apiUsers'])->name('employee.apiUsers');

//-----------------------------------------------------------------------------------//
//-------------------------------------Admin-----------------------------------------//
//-----------------------------------------------------------------------------------//

Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login.save');
Route::get('/admin/signOut', [AdminController::class, 'signOut'])->name('admin.signOut');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/profile', [AdminController::class, 'dashboard'])->name('admin.profile');

Route::get('/admin/changePassword', [AdminController::class, 'showChangePassword'])->name('admin.changePassword');
Route::post('/admin/changePassword', [AdminController::class, 'changePassword'])->name('admin.changePassword.save');


Route::get('/admin/Statistics', [AdminController::class, 'statistics'])->name('admin.statistics');

Route::get('/admin/employees', [AdminController::class, 'employees'])->name('admin.employees');
Route::get('/admin/employees/add', [AdminController::class, 'addEmployee'])->name('admin.addEmployee');
Route::post('/admin/employees/add', [AdminController::class, 'addEmployeeSave'])->name('admin.addEmployee.save');
Route::get('/admin/employees/edit/{id}', [AdminController::class, 'editEmployee'])->name('admin.editEmployee');
Route::put('/admin/employees/edit/{id}', [AdminController::class, 'editEmployeeSave'])->name('admin.editEmployee.save');
Route::get('/admin/employees/delete/{id}', [AdminController::class, 'deleteEmployee'])->name('admin.deleteEmployee');
