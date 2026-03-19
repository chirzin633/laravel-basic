<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title', 'Example App') </title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <x-navbar />

    <main class="w-full max-w-6xl mx-auto mt-6">
        @yield('konten')
    </main>

    @include('components.footer');
</body>

</html>