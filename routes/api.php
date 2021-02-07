<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AndroidController;
use App\Http\Controllers\API\ArduinoController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//request from arduino rpms
Route::get('/censors/upload', [ArduinoController::class, 'upload']); 

// ----------------------- android request routes -----------------------------

//request from android and show data censor
Route::get('/android/datacensor', [AndroidController::class, 'AndroidCensorShow']); 
//request from android and show data censor
Route::get('/android/dataPatient', [AndroidController::class, 'AndroidPatientShow']);
Route::post('/android/authLogin', [AndroidController::class, 'AndroidLoginAuth']);
// Route::get('/android/show', [AndroidController::class, 'showtoken']);
Route::post('/android/changeEmail', [AndroidController::class, 'AndroidChangeEmail']);
Route::get('/android/logout', [AndroidController::class, 'logout']);
