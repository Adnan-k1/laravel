{{-- resources/views/admin/student.blade.php --}}

{{-- Ganti 'admin.layouts.app' dengan path file layout admin Anda yang benar --}}
@extends('admin.component.layout') 

@section('title', $title)

@section('content') 
    
    {{-- Container untuk tampilan tabel --}}
    <div class="p-4 bg-white rounded-lg shadow dark:bg-gray-700">
        <h2 class="text-xl font-bold mb-4 dark:text-white">Data Student (Admin)</h2>
        
        

        {{-- TABEL DATA SISWA --}}
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">Absen</th>
                        <th scope="col" class="py-3 px-6">Nama Lengkap</th>
                        <th scope="col" class="py-3 px-6">Alamat</th>
                        <th scope="col" class="py-3 px-6">Kelas</th>
                        <th scope="col" class="py-3 px-6">Email</th>
                        <th scope="col" class="py-3 px-6">Tanggal Lahir</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-4 py-2 border border-gray-300">{{ $student->id }}</td>
                        <td class="px-4 py-2 border border-gray-300">{{ $student->name }}</td>
                        <td class="px-4 py-2 border border-gray-300">{{ $student->address }}</td>
                        <td class="px-4 py-2 border border-gray-300">
                            {{ $student->classroom->name ?? 'Tidak Ada Kelas' }}
                        </td>
                        <td class="px-4 py-2 border border-gray-300">{{ $student->email ?? '-' }}</td>
                        <td class="px-4 py-2 border border-gray-300">
                            {{ $student->birthday ? \Carbon\Carbon::parse($student->birth_date)->format('d M Y') : '-' }}
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- END OF TABEL --}}

    </div>
@endsection