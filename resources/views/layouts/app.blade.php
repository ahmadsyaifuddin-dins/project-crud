<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel App') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans antialiased">
    <nav class="bg-white shadow-md p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-xl font-bold text-blue-600">MyApp</a>
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="text-red-500 hover:underline">Logout</button>
                </form>
            @endauth
        </div>
    </nav>

    <main class="container mx-auto mt345rty-6">
        @yield('content')
    </main>
</body>
</html>
