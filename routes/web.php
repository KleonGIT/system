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

    Route::get('/customers', [CustomerController::class, 'index']);
    Route::post('/customer/registration', [CustomerController::class, 'store'])->name('customer.save');
});
