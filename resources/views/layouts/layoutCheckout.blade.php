<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ url("/assets/bootstrap/dist/css/bootstrap.css") }}>
    <link rel="stylesheet" href="/assets/bootstrap/dist/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>

    <script src="{{ url("assets/jquery.js") }}"></script>
    <title>{{ $page }} - Yakusoku</title>
</head>
<body>

    <div class="container-fluid">

        <div class="row">

            
            <div class="col-7 my-5 pe-5" style="padding-left: 100px">
                <div class="row  mb-4">

                    <a href="/" class="navbar-brand me-5" style="font-family: stranger things; font-size: 3rem">Yakusoku</a>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-white" style="font-size: 14px">
                            <li class="breadcrumb-item {{ Request::is('cart') ? 'active' : '' }}"><a href="{{ url("/cart") }}">Cart</a></li>
                            <li class="breadcrumb-item {{ Request::is('checkout/information') ? 'active' : '' }}"><a href="{{ url("/checkout/information") }}">Information</a></li>
                            <li class="breadcrumb-item {{ Request::is('checkout/shipping') ? 'active' : '' }}" aria-current="page"><a href="{{ url("checkout/shipping") }}">Shipping</a></li>
                            <li class="breadcrumb-item {{ Request::is('checkout/payment') ? 'active' : '' }}" aria-current="page"><a href="{{ url("checkout/payment") }}">Payment</a></li>
                        </ol>
                    </nav>
                </div>
                @yield('container')
            </div>
            
            @include('partials.summary')
            
        </div>
    </div>

        <script src="assets/bootstrap/dist/js/bootstrap.js"></script>
        
    <script src="assets/bootstrap/dist/js/bootstrap.bundle.js"></script>

</body>
</html>