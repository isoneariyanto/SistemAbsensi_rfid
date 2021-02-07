<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\SchedulesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\CensorsController;

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

Route::get('/', function(){
	return redirect('dashboard');
})->name('home');

Route::group(['middleware' => 'isLoginAuth'], function(){
	// Authentication
	Route::get('/login', [AuthController::class, 'login'])->name('login');
	Route::post('/loginAction', [AuthController::class, 'loginAction'])->name('login.auth');
	Route::get('/logout', [AuthController::class, 'logout']);
});

Route::group(['middleware' => ['auth', 'loginAuth:Admin,SuperAdmin']], function(){
	// Route::get('/dashboard', [PagesController::class, 'index']);
	// staff routes
	Route::get('/employees', [EmployeesController::class, 'index'])->name('employee.index');
	// Route::put('/employees', [EmployeesController::class, 'search']);
	// Route::get('/employees/create', [EmployeesController::class, 'create']);
	Route::post('/employees', [EmployeesController::class, 'store']);
	Route::get('/employees/{employee}', [EmployeesController::class, 'show']);
	// Route::post('/employees/{employee}/edit', [EmployeesController::class, 'edit']);
	Route::post('/employees/edit', [EmployeesController::class, 'update']);
	// Route::delete('/employees/{employee}', [EmployeesController::class, 'destroy']);
	Route::post('/employees/delete', [EmployeesController::class, 'destroy'])->name('delete_employee');
	// Route::post('/employees/{employee}', [EmployeesController::class, 'decryptpassword']); //for decrypt password if pressed edit button and generate to method edit using redirect

	// patient route
	Route::get('/patients/create', [PatientsController::class, 'create']);
	Route::get('/patients/{patient}', [PatientsController::class, 'show']);
	Route::post('/patients', [PatientsController::class, 'store']);
	Route::delete('/patients/{patient}', [PatientsController::class, 'destroy']);
	Route::get('/patients/{patient}/edit', [PatientsController::class, 'edit']);
	Route::patch('/patients/{patient}', [PatientsController::class, 'update']);
});

Route::group(['middleware' => ['auth', 'loginAuth:Admin,User,SuperAdmin']], function(){
	// dashboard routes
	Route::get('/dashboard', [PagesController::class, 'index'])->name('dashboard');

	// schedule routes
	Route::get('/schedule', [SchedulesController::class, 'index']);

	// patient routes
	Route::get('/patients', [PatientsController::class, 'index']);
	// sensor routes
	Route::get('/heartbeatCensor', [CensorsController::class, 'heartbeat'])->name('heartbeat.index');
	// Route::post('/heartbeatCensor', [CensorsController::class, 'heartbeat']);
	Route::get('/temperatureCensor', [CensorsController::class, 'temperature']);

});
