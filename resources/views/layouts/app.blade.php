<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title', 'Example App') </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    @if (session('success'))
    <div id="flash" class="p-4 bg-green-50 text-green-500 text-center font-bold">
        <p>
            {{ session('success') }}
        </p>
    </div>
    @endif
    <x-navbar />

    <main class="w-full max-w-6xl mx-auto mt-6">
        @yield('konten')
    </main>

    @include('components.footer')
</body>

</html>