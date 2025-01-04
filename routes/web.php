<?php

use App\Http\Controllers\AdvancedController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FormTypeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BasicFormController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin', [AdminController::class, 'index']);

//    )->name('admin.dashboard');
    // Other routes only accessible by admins
});
Auth::routes();

Route::middleware(['auth'])->group(function () {


    Route::get('/home', [HomeController::class, 'index'])->name('home');


/////////////////////////////////   department api  //////////////////////////////////////////

    Route::get('/departments', [DepartmentController::class, 'index']);
    Route::get('/departments/create', [DepartmentController::class, 'create']);
    Route::post('/departments', [DepartmentController::class, 'store']);
    Route::get('/departments/{id}', [DepartmentController::class, 'show']);
    Route::get('/departments/{id}/edit', [DepartmentController::class, 'edit']);
    Route::post('/departments/{id}', [DepartmentController::class, 'update']);
    Route::post('/departments/{id}/delete', [DepartmentController::class, 'destroy']);

/////////////////////////////////   user api  //////////////////////////////////////////

    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/create', [UserController::class, 'create']);
    Route::post('/user', [UserController::class, 'store']);
    Route::get('/user/{id}', [UserController::class, 'show']);
    Route::get('/user/{id}/edit', [UserController::class, 'edit']);
    Route::post('/user/{id}', [UserController::class, 'update']);
    Route::post('/user/{id}/delete', [UserController::class, 'destroy']);


/////////////////////////////////   role api  //////////////////////////////////////////

    Route::get('/role', [RoleController::class, 'index']);
    Route::get('/role/create', [RoleController::class, 'create']);
    Route::post('/role', [RoleController::class, 'store']);
    Route::get('/role/{id}', [RoleController::class, 'show']);
    Route::get('/role/{id}/edit', [RoleController::class, 'edit']);
    Route::post('/role/{id}', [RoleController::class, 'update']);
    Route::post('/role/{id}/delete', [RoleController::class, 'destroy']);

/////////////////////////////////   basic report api  //////////////////////////////////////////

    Route::get('/basic', [BasicFormController::class, 'index']);
    Route::get('/basic/create', [BasicFormController::class, 'create']);
    Route::post('/basic', [BasicFormController::class, 'store']);
    Route::get('/basic/{id}', [BasicFormController::class, 'show']);
    Route::get('/basic/{id}/edit', [BasicFormController::class, 'edit']);
    Route::post('/basic/{id}', [BasicFormController::class, 'update']);
    Route::post('/basic/{id}/delete', [BasicFormController::class, 'destroy']);


/////////////////////////////////   advanced report api  //////////////////////////////////////////

    Route::get('/advanced', [AdvancedController::class, 'index']);
    Route::get('/advanced/create', [AdvancedController::class, 'create']);
    Route::post('/advanced', [AdvancedController::class, 'store']);
    Route::get('/advanced/{id}', [AdvancedController::class, 'show']);
    Route::get('/advanced/{id}/edit', [AdvancedController::class, 'edit']);
    Route::post('/advanced/{id}', [AdvancedController::class, 'update']);
    Route::post('/advanced/{id}/delete', [AdvancedController::class, 'destroy']);


    /////////////////////////////////   advanced report api  //////////////////////////////////////////

    Route::get('/form-type', [FormTypeController::class, 'index']);
    Route::get('/form-type/create', [FormTypeController::class, 'create']);
    Route::post('/form-type', [FormTypeController::class, 'store']);
    Route::get('/form-type/{id}', [FormTypeController::class, 'show']);
    Route::get('/form-type/{id}/edit', [FormTypeController::class, 'edit']);
    Route::post('/form-type/{id}', [FormTypeController::class, 'update']);
    Route::post('/form-type/{id}/delete', [FormTypeController::class, 'destroy']);


});




