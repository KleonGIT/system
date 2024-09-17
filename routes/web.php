<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Models\CustomerModel;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/customers', [CustomerController::class, 'index'])->name('pages.customers.index');
    Route::post('/customer/registration', [CustomerController::class, 'store'])->name('customer.save');
    Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::post('/customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
    Route::delete('/customer/delete/{id}', [CustomerController::class, 'destroy'])->name('customer.delete');
});
