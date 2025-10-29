<?php

use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', function () {
    return view('welcome');
});

// Admin dashboard route
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

// Additional routes for admin components can be added here
Route::get('/admin/students', function () {
    // Logic for students
});

Route::get('/admin/classroom', function () {
    // Logic for classroom
});

Route::get('/admin/guardians', function () {
    // Logic for guardians
});

Route::get('/admin/teachers', function () {
    // Logic for teachers
});

Route::get('/admin/subjects', function () {
    // Logic for subjects
});