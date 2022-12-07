<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminRoleController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PpeController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\WorkerController;
use App\Models\Designation;
use App\Models\ppe;
use App\Models\Supervisor;
use PHPUnit\TextUI\XmlConfiguration\Group;

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
// 


require __DIR__ . '/auth.php';
Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // company route
    Route::get('/company/list', [CompanyController::class, 'index'])->name('company');
    Route::post('/company/save', [CompanyController::class, 'save'])->name('company.save');
    Route::get('/company/list/edit/{id}', [CompanyController::class, 'edit'])->name('company.edit');
    Route::post('/company/list/save/{id}', [CompanyController::class, 'update'])->name('company.update');
    Route::get('/company/delete/{id}', [CompanyController::class, 'destroy'])->name('company.destroy');

    // store route
    Route::get('/store/index', [StoreController::class, 'index'])->name('store');
    Route::post('/store/save', [StoreController::class, 'save'])->name('store.save');
    Route::get('/store/edit/{id}', [StoreController::class, 'edit'])->name('store.edit');
    Route::post('/store/save/{id}', [StoreController::class, 'update'])->name('store.udpate');
    Route::get('/store/destroy/{id}', [StoreController::class, 'destroy'])->name('store.destroy');

    // ppe route
    Route::get('/ppe/index', [PpeController::class, 'index'])->name('ppe');
    Route::post('/ppe/save', [PpeController::class, 'create'])->name('ppe.save');
    Route::get('/ppe/edit/{id}', [PpeController::class, 'edit'])->name('ppe.edit');
    Route::post('/ppe/update/{id}', [PpeController::class, 'update'])->name('ppe.update');
    Route::get('/ppe/destroy/{id}', [PpeController::class, 'destroy'])->name('ppe.destroy');

    // area route
    Route::get('/area/index', [AreaController::class, 'index'])->name('area');
    Route::post('/area/save', [AreaController::class, 'create'])->name('area.save');
    Route::get('/area/edit/{id}', [AreaController::class, 'edit'])->name('area.edit');
    Route::post('/area/update/{id}', [AreaController::class, 'update'])->name('area.update');
    Route::get('/area/delete/{id}', [AreaController::class, 'destroy'])->name('area.destroy');

    // worker route
    // Route::get('/worker/index', [WorkerController::class, 'index'])->name('worker');
    // Route::post('/worker/save', [WorkerController::class, 'create'])->name('worker.save');
    // Route::get('/worker/edit/{id}', [WorkerController::class, 'edit'])->name('worker.edit');
    // Route::post('/worker/update/{id}', [WorkerController::class, 'update'])->name('worker.update');
    // Route::get('/worker/delete/{id}', [WorkerController::class, 'destroy'])->name('worker.destroy');

    // supervisor route
    // Route::get('/supervisor/index', [SupervisorController::class, 'index'])->name('supervisor');
    // Route::post('/supervisor/create', [SupervisorController::class, 'save'])->name('supervisor.save');
    // Route::get('/supervisor/edit/{id}', [SupervisorController::class, 'edit'])->name('supervisor.edit');
    // Route::post('/supervisor/update/{id}', [SupervisorController::class, 'update'])->name('supervisor.update');
    // Route::get('/supervisor/delete/{id}', [SupervisorController::class, 'destroy'])->name('supervisor.destroy');

    // category route
    Route::get('/category/index', [CategoryController::class, 'index'])->name('category');
    Route::post('/category/create', [CategoryController::class, 'create'])->name('category.save');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    // feedback route
    Route::get('/feedback/index', [FeedbackController::class, 'index'])->name('feedback');
    Route::post('/feedback/save', [FeedbackController::class, 'save'])->name('feedback.save');
    Route::get('/feedback/destroy/{id}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');

    // designation
    Route::get('/designation/index', [DesignationController::class, 'index'])->name('designation');
    Route::post('/designation/save', [DesignationController::class, 'store'])->name('designation.save');
    Route::get('/designation/edit/{id}', [DesignationController::class, 'edit'])->name('designation.edit');
    Route::post('/designation/update/{id}', [DesignationController::class, 'update'])->name('designation.update');
    Route::get('/designation/delete/{id}', [DesignationController::class, 'destroy'])->name('designation.destroy');

    // employee
<<<<<<< HEAD
    Route::get('/employee/index',[EmployeeController::class,'index']);
    Route::get('/employee/add',[EmployeeController::class,'create']);
    Route::post('/employee/store',[EmployeeController::class,'store']);
    Route::get('/employee/edit/{id}',[EmployeeController::class,'edit']);
    Route::post('/employee/update/{id}',[EmployeeController::class,'update']);
    Route::get('/employee/delete/{id}',[EmployeeController::class,'destroy']);
=======
    Route::get('/employee/index/{designation_id}', [EmployeeController::class, 'index'])->name('employee');
    Route::get('/employee/add/{designation_id}', [EmployeeController::class, 'create'])->name('employee.save');
    Route::post('/employee/store', [EmployeeController::class, 'store'])->name('company.store');
    Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route::post('/employee/update/{id}', [EmployeeController::class, 'update'])->name('employee.update');
>>>>>>> 1930c2bf03f4874fa9459255f179e10ad4373c49


    // admin route
    Route::get('/admin/list', [AdminController::class, 'index'])->name('admin');
    Route::post('/admin/save', [AdminController::class, 'store'])->name('admin.save');
    Route::get('/admin/list/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::post('/admin/list/save/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::get('/admin/delete/{id}', [AdminController::class, 'destroy'])->name('admin.delete');
    Route::get('/admin/status/{id}', [AdminController::class, 'status'])->name('admin.status');


    // Route::get('/admin/role/list', [AdminRoleController::class, 'index'])->name('admin.role');
    // Route::post('/admin/role/save', [AdminRoleController::class, 'save'])->name('admin.role.save');
    // Route::get('/admin/role/list/edit/{id}', [AdminRoleController::class, 'edit'])->name('admin.role.edit');
    // Route::post('/admin/role/list/save/{id}', [AdminRoleController::class, 'update'])->name('admin.role.update');
    // Route::get('/admin/role/delete/{id}', [AdminRoleController::class, 'destroy'])->name('admin.role.delete');
});
