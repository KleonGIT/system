<?php

use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\DepartmentController;
use App\Models\StudentModel;

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

    // Semester
    Route::get('/semesters', [SemesterController::class, 'index'])->name('pages.semesters.index');

    // Department
    Route::get('/departments', [DepartmentController::class, 'index'])->name('pages.departments.index');

    // Faculty
    Route::get('/faculty', action: [FacultyController::class, 'index'])->name('pages.faculty.index');

    // Subject
    Route::get('/subjects', action: [SubjectController::class, 'index'])->name('pages.subjects.index');
});
