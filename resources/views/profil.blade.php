<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <body class="bg-gray-900 text-white">
        <div class="flex items-center justify-center min-h-screen px-4">
            <div class="bg-gray-800 rounded-2xl shadow-lg p-8 max-w-md w-full">
                <h1 class="text-3xl font-bold text-center mb-6 text-white">
                    Profil Diri
                </h1>

                <div class="space-y-4 text-center">
                    <p class="text-lg">
                        <span class="font-semibold text-gray-300">Nama:</span>
                        <span class="text-white">{{ $nama }}</span>
                    </p>
                    <p class="text-lg">
                        <span class="font-semibold text-gray-300">Kelas:</span>
                        <span class="text-white">{{ $kelas }}</span>
                    </p>
                    <p class="text-lg">
                        <span class="font-semibold text-gray-300">Sekolah:</span>
                        <span class="text-white">{{ $sekolah }}</span>
                    </p>
                </div>
            </div>
        </div>
    </body>
</x-layout>
