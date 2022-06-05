<?php

use App\Http\Controllers\Auth\Api\JobController;
use App\Http\Controllers\Auth\Api\LoginController;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */


//------------------------------Public-----------------------------//
Route::get('/test',[JobController::class, 'test'])->name('testAPI');
Route::get('/jobs',[JobController::class, 'getAllJobs'])->name('allJobs');
Route::get('/jobs/search/id={id}',[JobController::class, 'getById'])->name('getById');
Route::get('/jobs/search/type={type}',[JobController::class, 'getByType'])->name('getByType');
Route::post('/register', [LoginController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);


//------------------------------Protected-----------------------------//
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/jobs/add',[JobController::class, 'addJob'])->name('addJob');
    Route::put('/jobs/update/id={id}',[JobController::class, 'updateJob'])->name('updateJob');
    Route::delete('/jobs/delete/id={id}',[JobController::class, 'deleteJob'])->name('deleteJob');
    Route::post('/logout', [LoginController::class, 'logout']);
});
