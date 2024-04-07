<?php

use App\Http\Controllers\Auth\UserController;
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
 * | User Register & Login
 */
Route::controller(UserController::class)->group(function () {
    Route::post('login', 'loginAuth');    
    Route::post('logout', 'logout')->middleware('auth:sanctum');
});

Route::controller(SarkariJobsController::class)->group(function(){
    Route::get('get-notification-types', 'getNotificationType');
    Route::get('get-leatest-jobs', 'getLeatestJobs');
});
