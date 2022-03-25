<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function (){
        Route::get('/employee', [App\Http\Controllers\Employee\EmployeeController::class,'index'])
            ->name('employee.list');
            Route::get('/employee/{id}', [App\Http\Controllers\Employee\EmployeeController::class,'show'])
            ->name('employee.show');
            Route::get('/create', [App\Http\Controllers\Employee\EmployeeController::class,'create'])
            ->name('employee.create');
            Route::post('/save', [App\Http\Controllers\Employee\EmployeeController::class,'save'])
            ->name('employee.save');
            Route::get('/edit/{id}', [App\Http\Controllers\Employee\EmployeeController::class,'edit'])
            ->name('employee.edit');
            Route::post('/update', [App\Http\Controllers\Employee\EmployeeController::class,'update'])
            ->name('employee.update');
});
