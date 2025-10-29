<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // Pastikan Anda mengimpor Model Student

class KontakController extends Controller
{
    public function index() 
    {
        // 1. Ambil semua data siswa dari database
        $studentsData = Student::all(); 

        // 2. Kirim data ke view. 
        // Nama key 'student' harus sesuai dengan nama variabel yang digunakan di blade (@foreach ($student...))
        return view('kontak', [
            'title' => 'Kontak',
            'student' => $studentsData // Mengirimkan data siswa dengan nama variabel 'student'
        ]);
    }
}