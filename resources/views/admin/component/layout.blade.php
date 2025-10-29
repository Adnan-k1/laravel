<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard App')</title>

    {{-- Masukkan Tailwind/Flowbite CSS di sini --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 dark:bg-gray-900">

    {{-- 1. Sidebar Component --}}
    @include('admin.component.sidebar')

    <div class="p-4 sm:ml-64"> {{-- sm:ml-64 adalah padding untuk mengimbangi lebar sidebar --}}

        {{-- 2. Navbar Component --}}
        @include('admin.component.navbar')

        <main class="pt-20"> {{-- pt-20 untuk menghindari tertutup oleh Navbar --}}
            {{-- 3. Konten Utama Halaman (Dinamis) --}}
            @yield('content')
        </main>

    </div>

    {{-- Masukkan Flowbite JS di sini (jika tidak menggunakan @vite) --}}
    {{-- <script src="https://unpkg.com/flowbite@2.2.1/dist/flowbite.min.js"></script> --}}
</body>
</html>