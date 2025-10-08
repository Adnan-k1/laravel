<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\ClassroomController;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/home',[HomeController::class, 'index']);
Route::get('/profil',[ProfilController::class, 'index']);
Route::get('/kontak',[KontakController::class, 'index']);

Route::resource('/student', StudentController::class);
Route::resource('/guardian', GuardianController::class);
Route::resource('/classroom', ClassroomController::class);
