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
            Route::get('/customershow', [App\Http\Controllers\Customer\CustomerController::class,'show'])
            ->name('customer.show');
            Route::get('/customercreate', [App\Http\Controllers\Customer\CustomerController::class,'create'])
            ->name('customer.create');
            Route::get('/customeredit', [App\Http\Controllers\Customer\CustomerController::class,'edit'])
            ->name('customer.edit');
            //Invoice
            Route::get('/Invoice', [App\Http\Controllers\Invoice\InvoiceController::class,'index'])
            ->name('invoice.list');
            Route::get('/invoiceshow', [App\Http\Controllers\Invoice\InvoiceController::class,'show'])
            ->name('invoice.show');
            Route::get('/invoicecreate', [App\Http\Controllers\Invoice\InvoiceController::class,'create'])
            ->name('invoice.create');
            Route::get('/invoiceedit', [App\Http\Controllers\Invoice\InvoiceController::class,'edit'])
            ->name('invoice.edit');

});

