<?php

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


Route::get('/employees', [\App\Http\Controllers\EmployeeController::class, 'index']);
Route::post('/newemployee', [\App\Http\Controllers\EmployeeController::class, 'store']);
Route::patch('/updateemployee/{employee}', [\App\Http\Controllers\EmployeeController::class, 'update']);
