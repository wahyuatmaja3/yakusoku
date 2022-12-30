@extends('layouts.main')

@section('container')
<div class="container-fluid px-5">
    <div class="row">

        <div class="col-12 py-5">

            <table class="table table-bordered border-dark align-middle table-responsive text-center ">
                @if (empty($cart) || count($cart) == 0) 
        
                    <p class="fs-5 w-100 text-center">Cart kosong, <a href="/">Kembali ke Home</a></p>
                
                @else
                <thead class="table-dark ">
                    <tr>
                        <th></th>
                        <th>#</th>
                        <th>Product</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th class="px-5">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $counter = 0;
                        $total = 0;
                    @endphp
                    @foreach ($cart as $ct => $val)
                    @php
                        $subtotal = $val["harga"] * $val["qty"];
                        $total += $subtotal;
                    @endphp
                    <tr>
                        <td>
                            <a href="/cart/hapus/{{ $ct }}"><i class="bi bi-x-square" style="font-size: 1.2rem; color: red"></i></a>
                        </td>
                        <td>
                            {{ ++$counter }}
                        </td>
                        <td class="text-start">
                            <a href="/komik/{{$ct}}">
                                <img src="{{ "assets/img/komik/" . $val["img"] }}" alt="" width="60px" class="me-4">
                                <strong class="fs-6 text-dark text-decoration-none">
                                    {{ $val["judul"] }}
                                </strong>
                            </a>
                        </td>
                        <td>
                            Rp. {{ $val['harga'] }}
                        </td>
                        <td>
                            {{ $val["qty"] }}
                        </td>
                        <td>
                            Rp. {{ $subtotal }}
                        </td>
                        
                    </tr>
                    @endforeach
                    
                    <tr>
                        <td colspan="5" class="text-center w-100 fw-bold">Total</td>
                        <td class="fw-bold" >Rp. {{ $total }}</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ url('/checkout/information') }}" class="btn btn-primary ms-auto">Checkout</a>
            @endif
        </div>

    </div>

</div>
@endsection