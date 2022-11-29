<?php

use App\Http\Controllers\AreaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PpeController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\WorkerController;
use App\Models\ppe;
use App\Models\Supervisor;

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
// company route
Route::get('/company/list',[CompanyController::class,'index'])->name('company');
Route::post('/company/save',[CompanyController::class,'save'])->name('company.save');
Route::get('/company/list/edit/{id}',[CompanyController::class,'edit'])->name('company.edit');
Route::post('/company/list/save/{id}',[CompanyController::class,'update'])->name('company.update');
Route::get('/company/delete/{id}',[CompanyController::class,'destroy'])->name('company.delete');

// store route
Route::get('/store/index',[StoreController::class,'index'])->name('store');
Route::post('/store/save',[StoreController::class,'save'])->name('store.save');
Route::get('/store/edit/{id}',[StoreController::class,'edit'])->name('store.edit');
Route::post('/store/save/{id}',[StoreController::class,'store'])->name('store.udpate');
Route::get('/store/destroy/{id}',[StoreController::class,'destroy'])->name('store.delete');

// ppe route
Route::get('/ppe/index',[PpeController::class,'index']);
Route::post('/ppe/save',[PpeController::class,'create']);
Route::get('/ppe/edit/{id}',[PpeController::class,'edit']);
Route::post('/ppe/update/{id}',[PpeController::class,'update']);

// area route
Route::get('/area/index',[AreaController::class,'index']);
Route::post('/area/save',[AreaController::class,'create']);
Route::get('/area/edit/{id}',[AreaController::class,'edit']);
Route::post('/area/update/{id}',[AreaController::class,'update']);
Route::get('/area/delete/{id}',[AreaController::class,'destroy']);

// worker route
Route::get('/worker/index',[WorkerController::class,'index']);
Route::post('/worker/save',[WorkerController::class,'create']);
Route::get('/worker/edit/{id}',[WorkerController::class,'edit']);
Route::post('/worker/update/{id}',[WorkerController::class,'update']);
Route::get('/worker/delete/{id}',[WorkerController::class,'destroy']);

// supervisor route
Route::get('/supervisor/index',[SupervisorController::class,'index']);
Route::post('/supervisor/create',[SupervisorController::class,'create']);
Route::get('/supervisor/edit/{id}',[SupervisorController::class,'edit']);
Route::post('/supervisor/update/{id}',[SupervisorController::class,'update']);
Route::get('/supervisor/delete/{id}',[SupervisorController::class,'destroy']);