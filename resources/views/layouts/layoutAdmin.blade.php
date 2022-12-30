<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Styles --}}
    <link rel="stylesheet" href={{ url("/assets/bootstrap/dist/css/bootstrap.css") }}>
    <link rel="stylesheet" href="/assets/bootstrap/dist/css/style.css">
    {{-- <link rel="stylesheet" href="/assets/bootstrap/dist/css/admin.css"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="assets/jquery.js"></script>
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />

    <style>
        body {
            
        }
    </style>

    <title>Yakusoku - [Admin]</title>
</head>
<body>

    @include('partials.adminHeader')

    <div class="container-fluid">
        
        <div class="row">
          @include('partials.adminSidebar')
    
          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            @yield('container')
          </main>
        </div>
      </div>
    
    <script src="assets/bootstrap/dist/js/bootstrap.js"></script>
    
    <script src="assets/bootstrap/dist/js/bootstrap.bundle.js"></script>

</body>
</html>