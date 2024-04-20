<?php

use App\Http\Controllers\AdmitCardController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\LeatestJobController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\SarkariJobsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/**
 * | User Register & Login API-ID :- 01
 */
Route::controller(UserController::class)->group(function () {
    Route::post('login', 'loginAuth');                      // 0101
    Route::post('logout', 'logout')->middleware('auth:sanctum');   //0102
});


/**
 * | SarkariJobsController API-ID :- 02
 */
Route::controller(SarkariJobsController::class)->group(function () {
    Route::get('get-notification-types', 'getNotificationType');    //0201
    Route::get('get-states', 'getStates');                          // 0202
});


/**
 * | LeatestJobController API-ID :- 03
 */
Route::controller(LeatestJobController::class)->group(function () {
    Route::post('create-leatest-job', 'createLeatestJob');           // 0301
    Route::get('get-leatest-jobs', 'getLeatestJobs');               // 0302
    Route::get('get-leatest-job/{id}', 'getLeatestJobById');        // 0303
    Route::post('create-leatest-job-update-content', 'createLeatestJobAndUpdateContent') ; // 0304
    Route::post('update-leatest-job/{id}', 'updateLeatestJob') ; // 0305
});


/**
 * | AdmitCardController API-ID :- 04
 */
Route::controller(AdmitCardController::class)->group(function () {
    Route::post('create-admit-card', 'createAdmitCard');           // 0401
    Route::get('get-admit-cards', 'getAdmitCards');                 // 0402
    Route::get('get-admit-card/{id}', 'getAdmitCardById');          // 0403
    Route::post('create-admit-cardd-update-content', 'createAdmitCardAndUpdateContent') ; // 0404
    Route::post('update-admit-card/{id}', 'updateAdmitCard') ; // 0405
});


/**
 * | ResultController API-ID :- 05
 */
Route::controller(ResultController::class)->group(function () {
    Route::post('create-result', 'createResult');           // 0401
    Route::get('get-results', 'getResults');                        // 0502
    Route::get('get-result/{id}', 'getResultById');                 // 0503
    Route::post('create-result-update-content', 'createResultAndUpdateContent') ; // 0504
    Route::post('update-result/{id}', 'updateResult') ; // 0505
});
