<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style-profile.css') }}">
</head>
<body>
    @include('layouts.partials.navbar')

    <main>
        @yield('content')
    </main>

    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>    
</body>
</html>