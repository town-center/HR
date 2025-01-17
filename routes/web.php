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



Route::group(['middleware' => ['role:Admin']], function () {
    Route::get('/admin', [AdminController::class, 'index']);





    /////////////////////////////////   user api  //////////////////////////////////////////

    Route::get('/user/test', [UserController::class, 'test']);


    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/create', [UserController::class, 'create']);
    Route::post('/user', [UserController::class, 'store']);
    Route::get('/user/{id}', [UserController::class, 'show']);
    Route::get('/user/{id}/edit', [UserController::class, 'edit']);
    Route::post('/user/{id}', [UserController::class, 'update']);
    Route::post('/user/{id}/delete', [UserController::class, 'destroy']);


});
Auth::routes();

Route::middleware(['auth'])->group(function () {


    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/', function () {
        return view('home');
    });

/////////////////////////////////   department api  //////////////////////////////////////////


    Route::get('/department/test', [DepartmentController::class, 'test']);

    Route::get('/department', [DepartmentController::class, 'index']);
    Route::get('/department/create', [DepartmentController::class, 'create']);
    Route::post('/department', [DepartmentController::class, 'store']);
    Route::get('/department/{id}', [DepartmentController::class, 'show']);
    Route::get('/department/{id}/edit', [DepartmentController::class, 'edit']);
    Route::post('/department/{id}', [DepartmentController::class, 'update']);
    Route::post('/department/{id}/delete', [DepartmentController::class, 'destroy']);





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




