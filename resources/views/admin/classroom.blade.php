{{-- resources/views/admin/student.blade.php --}}

{{-- Ganti 'admin.layouts.app' dengan path file layout admin Anda yang benar --}}
@extends('admin.component.layout') 

@section('title', $title)

@section('content') 
    
    {{-- Container untuk tampilan tabel --}}
    <div class="p-4 bg-white rounded-lg shadow dark:bg-gray-700">
        <h2 class="text-xl font-bold mb-4 dark:text-white">Data Classroom (Admin)</h2>
        
        

        {{-- TABEL DATA SISWA --}}
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">ID</th>
                        <th scope="col" class="py-3 px-6">Kelas</th>
                        <th scope="col" class="py-3 px-6">Name</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                   @foreach ($classroom as $index => $user)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-4 py-2 border border-gray-300">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2 border border-gray-300">{{ $user['name'] }}</td>
                        <td class="px-4 py-2 border border-gray-300">
                                @foreach ($user->students as $student)
                                    <li>{{ $student->name }}</li><br>
                                @endforeach
                            </ul></td>
                       
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mb-4">
    <button data-modal-target="addStudentModal" data-modal-toggle="addStudentModal" 
        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
        + Tambah Data Siswa
    </button>
</div>

{{-- Modal Tambah Siswa --}}
<div id="addStudentModal" tabindex="-1" aria-hidden="true" 
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto h-modal md:h-full">
    <div class="relative w-full max-w-md h-full md:h-auto">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

            {{-- Header --}}
            <div class="flex items-center justify-between p-4 border-b dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Tambah Data Siswa
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 
                    rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" 
                    data-modal-hide="addStudentModal">
                    ✖
                </button>
            </div>

            {{-- Form --}}
            <form action="{{ route('admin.student.store') }}" method="POST" class="p-6">
                @csrf

                <div class="mb-3">
                    <label class="block mb-1 text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input type="text" name="name" required class="w-full border rounded px-3 py-2">
                </div>

                <div class="mb-3">
                    <label class="block mb-1 text-sm font-medium text-gray-700">Alamat</label>
                    <input type="text" name="address" required class="w-full border rounded px-3 py-2">
                </div>

                <div class="mb-3">
                    <label class="block mb-1 text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" class="w-full border rounded px-3 py-2">
                </div>

                <div class="mb-3">
                    <label class="block mb-1 text-sm font-medium text-gray-700">Tanggal Lahir</label>
                    <input type="date" name="birth_date" class="w-full border rounded px-3 py-2">
                </div>

                <div class="mb-3">
                    <label class="block mb-1 text-sm font-medium text-gray-700">Kelas</label>
                    <select name="classroom_id" class="w-full border rounded px-3 py-2">
                        <option value="" selected>Pilih Kelas</option>
                        @foreach ($classrooms as $class)
                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" 
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg">
                    Simpan
                </button>
            </form>

        </div>
    </div>
</div>

    </div>
@endsection