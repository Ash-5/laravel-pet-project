<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MeetingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api/v1'], function (){

    Route::get('meeting/listAllMeeting', [MeetingController::class, 'index'] );
    Route::post('meeting/createMeeting', [MeetingController::class, 'create'] );
//    Route::get('meeting/updateMeeting', [MeetingController::class, 'create'] );
//    Route::get('meeting/createMeeting', [MeetingController::class, 'create'] );


    Route::post('user', [AuthController::class, 'store']);
    Route::post('user/signin', [AuthController::class, 'sigin']);
});
