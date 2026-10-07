<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="Sheby Hospital - Excellence in Healthcare">

    <title>Sheby Hospital</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>

<body class="bg-white text-slate-800 antialiased">

    <x-header />

    <main>
        @yield('content')
    </main>

    <x-footer />

</body>
</html>