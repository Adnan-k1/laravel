<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="flex">
        @include('admin.component.sidebar')
        <div class="flex-1">
            <div class="p-6">
                <h1 class="text-2xl font-bold">Welcome to Laravel!</h1>
                <p class="mt-4">This is your application dashboard.</p>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>