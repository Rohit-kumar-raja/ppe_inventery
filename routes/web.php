<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
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

Route::get('/company/list',[CompanyController::class,'index']);
Route::post('/company/save',[CompanyController::class,'save']);
Route::get('/company/list/edit/{id}',[CompanyController::class,'edit']);
Route::post('/company/list/save/{id}',[CompanyController::class,'update']);
Route::get('/comapny/delete/{id}',[CompanyController::class,'destroy']);
