{{-- resources/views/admin/student.blade.php --}}

{{-- Ganti 'admin.layouts.app' dengan path file layout admin Anda yang benar --}}
@extends('admin.component.layout') 

@section('title', $title)

@section('content') 
    
    {{-- Container untuk tampilan tabel --}}
    <div class="p-4 bg-white rounded-lg shadow dark:bg-gray-700">
        <h2 class="text-xl font-bold mb-4 dark:text-white">Data mata pelajaran (Admin)</h2>
        
        

        {{-- TABEL DATA SISWA --}}
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">ID</th>
                        <th scope="col" class="py-3 px-6">mata pelajaran</th>
                        <th scope="col" class="py-3 px-6">teacher</th>

                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subject as $index => $item)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-4 py-2 border border-gray-300">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2 border border-gray-300">{{ $item->name }}</td>
                        <td class="px-4 py-2 border border-gray-300"> {{ $item->teacher->name ?? '-' }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- END OF TABEL --}}

    </div>
@endsection