@extends('layouts.layoutCheckout')


@section('container')
<form class="needs-validation " method="post" action="{{ url("/checkout/tambah") }}">
    @csrf
    <div class="row mb-5">
        <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex p-0 pt-2" style="font-size: 15px">
                    <p class="text-secondary me-5">Contact</p>
                    <p>{{ Auth::user()->email }}</p>
                </li>
                <li class="list-group-item d-flex p-0 pt-2" style="font-size: 15px">
                    <p class="text-secondary me-5">Ship to</p>
                    <p>{{ session("checkout")["alamat"] . ", " . session("checkout")["kota"] . ", " . session("checkout")["provinsi"]}}</p>
                </li>
            </ul>
        </div>
    </div>

    <h5 class="mb-2">Shipping method</h5>
    <div class="row">
        <div class="card">
            <ul class="list-group list-group-flush">

                @foreach ($ekspedisis as $ekspd)
                
                <div class="form-check py-3 px-4">
                    <input class="form-check-input" type="radio" name="shipping" id="{{ $ekspd->nama }}" value="{{ $ekspd->id }}">
                    <label class="form-check-label d-flex justify-content-between" for="{{ $ekspd->nama }}">
                        <span class="">{{ $ekspd->nama }} {{ ($ekspd->estimasi != "")? "(".$ekspd->estimasi.")" : "" }}</span>
                        <span class="ms-auto">{{ "Rp. " . number_format($ekspd->harga, 0, ".", ".") }}</span>
                    </label>
                </div>

                @endforeach
            </ul>
        </div>
    </div>

    <div class="row d-flex mt-5">
        <button class="btn btn-dark btn-lg ms-auto" type="submit">Continue to Shipping</button>
    </div>
</form>    
@endsection