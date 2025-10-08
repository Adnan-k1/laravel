<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="p-6 overflow-x-auto">
        <table class="min-w-full border border-gray-300 rounded-lg shadow-lg bg-white">
            <thead class="bg-gray-200 text-gray-800">
                <tr>
                    <th class="px-4 py-3 border border-gray-300 text-left">Absen</th>
                    <th class="px-4 py-3 border border-gray-300 text-left">Nama Lengkap</th>
                    <th class="px-4 py-3 border border-gray-300 text-left">Alamat</th>
                    <th class="px-4 py-3 border border-gray-300 text-left">Kelas</th>
                    <th class="px-4 py-3 border border-gray-300 text-left">Email</th>
                    <th class="px-4 py-3 border border-gray-300 text-left">Tanggal Lahir</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @forelse ($students as $student)
                    <tr class="odd:bg-gray-50 even:bg-gray-100 hover:bg-blue-100 transition">
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
                @empty
                    <tr>
                        <td colspan="7" class="px-4 py-3 text-center text-gray-500">Belum ada data mahasiswa</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layout>
