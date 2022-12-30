@extends('layouts.main')

@section('container')
    <div class="container-fluid">
        <div class="row justify-content-center my-5" style="padding: 0 140px">
            <div class="col pe-5">
                <img src="../assets/img/komik/{{ $komik->img }}" alt="" class="w-100">
                <div class="mt-5">
                    <div style="font-size: 16px" mb-5>
                        <strong class="text-secondary">Author :</strong>
                        {{ $komik->author }}
                    </div style="font-size: 16px" mb-5>
                    <div style="font-size: 16px" mb-5>
                        <strong class="text-secondary">Language :</strong>
                        English
                    </div style="font-size: 16px" mb-5>
                    <div style="font-size: 16px" mb-5>
                        <strong class="text-secondary">ISBN :</strong>
                        {{ $komik->isbn }}
                    </div style="font-size: 16px" mb-5>
                </div>
            </div>
            <div class="col-7 ps-4">
                <p class=".text-secondary m-0">Genre</p>
                <p class="display-6 m-0 fw-bold">{{ $komik->judul }}</p>
                <a href="" class=" fs-4 text-decoration-none text-secondary ">{{ $komik->author }}</a>
                <p class="h3 fw-bold mt-4 mb-5">Rp {{ $komik->harga }}</p>
                <p class="fw-bold fs-5">Sinopsis</p>
                <p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet quibusdam asperiores doloremque impedit eligendi itaque dolorem fugit ex cumque vitae quisquam, officia nam, repudiandae quia delectus sed placeat accusamus recusandae? Impedit perferendis nam modi debitis autem eum tempora incidunt doloribus esse.</p>
                
                <strong class="">Stok: {{ $komik->stok }}</strong>
                    <form action="/cart/tambah" method="post" class="mt-5">
                        @csrf
                        <div class="mb-3">
                            <label for="qty" class="form-label">Jumlah</label>
                            <input type="number" name="qty" class="form-control" id="qty" value="1" style="width: 5rem" min="1" max="{{ $komik->stok }}">
                        </div>
                        <input type="hidden" value="{{ $komik->id }}" name="id">
                        <button type="submit" class="btn btn-dark fs-5"><i class="bi bi-bag-plus-fill"></i>Add to bag</button>
                    </form>
{{-- 
                    <a href="{{ url("cart/tambah/{$komik->id}") }}" type="submit" class="btn btn-dark fs-5 w-50 mt-5">
                        <i class="bi bi-bag-plus-fill"></i>
                        Add to Bag
                    </a> --}}
            </div>
        </div>
    </div>

@endsection