<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;


// --- RUTE USER/PUBLIK ---
Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/home',[HomeController::class, 'index'])->name('home');
Route::get('/profil',[ProfilController::class, 'index'])->name('profil');
Route::get('/kontak',[KontakController::class, 'index'])->name('kontak');

// Menggunakan Route::resource untuk CRUD User/Publik (index akan memanggil StudentController@index)
Route::resource('student', StudentController::class);
Route::resource('guardian', GuardianController::class);
Route::resource('classroom', ClassroomController::class);
Route::resource('teacher', TeacherController::class);
Route::resource('subject', SubjectController::class);


// --- RUTE ADMIN GROUP ---
Route::prefix('admin')->name('admin.')->group(function () {
    
    // Dashboard (URL: /admin/dashboard, Name: admin.dashboard)
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('student', [StudentController::class, 'adminIndex'])->name('student');
    
    
    Route::get('classroom', [ClassroomController::class, 'adminIndex'])->name('classroom');
    Route::get('guardian', [GuardianController::class, 'adminIndex'])->name('guardian');
    Route::get('teacher', [TeacherController::class, 'adminIndex'])->name('teacher');
    Route::get('subject', [SubjectController::class, 'adminIndex'])->name('subject');
});