<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        return view('student', [
            'title' => 'Data Student (User)',
            'students' => $students
        ]);
    }

    public function adminIndex()
    {
        $students = Student::all();
        $classrooms = Classroom::all();

        return view('admin.student', [
            'title' => 'Data Students (Admin)',
            'students' => $students,
            'classrooms' => $classrooms
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'nullable|email',
            'birthday' => 'required|date',
            'classroom_id' => 'nullable|exists:classrooms,id',
        ]);

        Student::create([
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'birthday' => $request->birthday,
            'classroom_id' => $request->classroom_id,
        ]);

        return back()->with('success', 'Data siswa berhasil ditambahkan!');
    }

    public function create() {}
    public function show(string $id) {}
    public function edit(string $id) {}
    public function update(Request $request, string $id) {}
    public function destroy(string $id) {}
}
