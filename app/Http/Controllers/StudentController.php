<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    // Metode index() untuk rute publik/user: /student
    public function index()
    {
        $students = Student::all();

        // Mengarah ke resources/views/student.blade.php
        return view('student', [
            'title' => 'Data Student (User)',
            'students' => $students
        ]);
    }

    // Metode adminIndex() untuk rute admin: /admin/student
    public function adminIndex()
    {
        $students = Student::all();

        // Mengarah ke resources/views/admin/student.blade.php
        return view('admin.student', [ 
            'title' => 'Data Students (Admin)',
            'students' => $students
        ]);
    }
    
    // ... Metode create(), store(), show(), edit(), update(), destroy() ...
    // Dibiarkan kosong/sesuai kebutuhan Anda saat ini
    public function create() {}
    public function store(Request $request) {}
    public function show(string $id) {}
    public function edit(string $id) {}
    public function update(Request $request, string $id) {}
    public function destroy(string $id) {}
}