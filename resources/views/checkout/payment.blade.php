@extends('layouts.layoutCheckout')
@section('container')
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
                <li class="list-group-item d-flex p-0 pt-2" style="font-size: 15px">
                    <p class="text-secondary me-5 ">Method</p>
                    <span class="d-flex justify-content-between w-100">
                        <p>{{ $shipping->nama }}</p>
                        <p>Rp {{ number_format($shipping->harga, 0, ".", ".") }}</p>
                    </span>
                </li>
            </ul>
        </div>
    </div>

    <h5 class="mb-2">Payment method</h5>

    <div class="row">
        <div class="card" style="">
            <div class="card-header mb-4">
              Credit card
            </div>
            <form action="{{ url("checkout/tambah") }}" method="post">
                @csrf
                <div class="mb-2">
                    <label for="cardnum">Card Number</label>
                    <input type="text" class="form-control" name="cardnum" id="cardnum" placeholder="Card number" required>
                    <div class="invalid-feedback">
                      Please enter your Card Number.
                    </div>
                </div>
                <div class="mb-2">
                    <label for="expdate">Expiration date</label>
                    <input type="text" class="form-control" name="expdate" id="expdate" placeholder="Expiration date (MM/YY)" required>
                    <div class="invalid-feedback">
                      Please enter your Card Expiration date.
                    </div>
                </div>
                <div class="row d-flex mt-5">
                    <button class="btn btn-warning btn-lg ms-auto" type="submit">Pay now</button>
                </div>
            </form>
          </div>
    </div>
@endsection