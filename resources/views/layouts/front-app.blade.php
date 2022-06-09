<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FiberTemplate</title>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/fiber-style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/footer-style.css') }}">
</head>
<body>
    @include('layouts.partials.navbar')

    <main class="">
        @yield('content')
    </main>

    @include('layouts.partials.footer')

    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>