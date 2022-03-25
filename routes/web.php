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
            //Customer
            Route::get('/Customer', [App\Http\Controllers\Customer\CustomerController::class,'index'])
            ->name('customer.list');
            Route::get('/customer-show/{id}', [App\Http\Controllers\Customer\CustomerController::class,'show'])
            ->name('customer.show');
            Route::get('/cust-create', [App\Http\Controllers\Customer\CustomerController::class,'create'])
            ->name('customer.create');
            Route::get('/customer-edit/{id}', [App\Http\Controllers\Customer\CustomerController::class,'edit'])
            ->name('customer.edit');
            Route::post('/customer-save', [App\Http\Controllers\Customer\CustomerController::class,'save']);
            Route::post('/customer-update', [App\Http\Controllers\Customer\CustomerController::class,'update'])
            ->name('customer.update');
            //Invoice
            Route::get('/Invoice', [App\Http\Controllers\Invoice\InvoiceController::class,'index'])
            ->name('invoice.list');
            Route::post('/invoicesave', [App\Http\Controllers\Invoice\InvoiceController::class,'save'])
            ->name('invoice.save');
            Route::get('/invoice/{id}', [App\Http\Controllers\Invoice\InvoiceController::class,'show'])
            ->name('invoice.show');
            Route::get('/invoice-create', [App\Http\Controllers\Invoice\InvoiceController::class,'create'])
            ->name('invoice.create');
            Route::get('/invoice-edit/{id}', [App\Http\Controllers\Invoice\InvoiceController::class,'edit'])
            ->name('invoice.edit');
            Route::post('/invoice-update', [App\Http\Controllers\Invoice\InvoiceController::class,'update'])
            ->name('invoice.update');

});

