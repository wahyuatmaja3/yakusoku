<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Styles --}}
    <link rel="stylesheet" href={{ url("/assets/bootstrap/dist/css/bootstrap.css") }}>
    <link rel="stylesheet" href="/assets/bootstrap/dist/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="{{ url("assets/jquery.js") }}"></script>

    <style>
        body {
            
        }
    </style>

    <title>Yakusoku</title>
</head>
<body>

    @include('partials.navbar')

    @yield('container')
    
    <script src="assets/bootstrap/dist/js/bootstrap.js"></script>
        
    <script src="assets/bootstrap/dist/js/bootstrap.bundle.js"></script>

</body>
</html>