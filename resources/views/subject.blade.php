<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="p-6 overflow-x-auto">
        <table class="min-w-full border border-gray-300 rounded-lg shadow-lg bg-white">
            <thead class="bg-gray-200 text-gray-800">
                <tr>
                    <th class="px-4 py-3 border border-gray-300 text-left">ID</th>
                    <th class="px-4 py-3 border border-gray-300 text-left">Mata Pelajaran</th>
                    <th class="px-4 py-3 border border-gray-300 text-left">Guru Pengampu</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($subject as $index => $item)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $item->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                            {{ $item->teacher ? $item->teacher->name : '-' }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>