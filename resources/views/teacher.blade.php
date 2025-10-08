<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="p-6 overflow-x-auto">
        <table class="min-w-full border border-gray-300 rounded-lg shadow-lg bg-white">
            <thead class="bg-gray-200 text-gray-800">
                <tr>
                    <th class="px-4 py-3 border border-gray-300 text-left">id</th>
                    <th class="px-4 py-3 border border-gray-300 text-left">Nama Lengkap</th>
                    <th class="px-4 py-3 border border-gray-300 text-left">mata pelajaran</th>
                    <th class="px-4 py-3 border border-gray-300 text-left">phone</th>
                    <th class="px-4 py-3 border border-gray-300 text-left">Email</th>
                    <th class="px-4 py-3 border border-gray-300 text-left">alamat</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @forelse ($teachers as $teacher)
                    <tr class="odd:bg-gray-50 even:bg-gray-100 hover:bg-blue-100 transition">
                        <td class="px-4 py-2 border border-gray-300">{{ $teacher->id }}</td>
                        <td class="px-4 py-2 border border-gray-300">{{ $teacher->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                            {{ $teacher->subject->name ?? '-' }}
                        </td>
                        <td class="px-4 py-2 border border-gray-300">{{ $teacher->phone ?? '-' }}</td>
                        <td class="px-4 py-2 border border-gray-300">{{ $teacher->email ?? '-' }}</td>
                        <td class="px-4 py-2 border border-gray-300">{{ $teacher->address ?? '-' }}</td>
                       
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
