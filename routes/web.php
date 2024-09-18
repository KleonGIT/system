<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\SutdentModel;

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

    // Student
    Route::get('/students', [StudentController::class, 'index'])->name('pages.students.index');
    Route::post('/student/registration', [StudentController::class, 'store'])->name('student.save');
    Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
    Route::post('/student/update/{id}', [StudentController::class, 'update'])->name('student.update');
    Route::delete('/student/delete/{id}', [StudentController::class, 'destroy'])->name('student.delete');
});
