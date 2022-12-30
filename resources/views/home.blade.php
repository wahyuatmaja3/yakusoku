@extends('layouts.main')

@section('container')

<div id="carouselExampleControls" class="carousel slide carousel-fade carousel-dark mb-5" data-bs-ride="carousel">
  <div class="carousel-inner" style="height: 32rem">
    <div class="carousel-item active">
      <img src="assets/img/raw/poster1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/raw/poster2.png" class="d-block w-100 " alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="container-fluid mt-5 px-5">
  <div class="row">
    <div class="col-3">
      @include('partials.filter')
    </div>
    
    <div class="col-lg-8 col-sm-5 w-75 ps-5">

      <form action="" method="get" class="d-flex"  style="position: sticky; top: 6rem; z-index: 99;">
        <select name="sort" id="sort" class="form-select me-3 w-25 ms-auto">
          <option value="" disabled selected>Sort</option>
          <option value="default">Default</option>
          <option value="nameAZ">Name A-Z</option>
          <option value="nameZA">Name Z-A</option>
          <option value="rating">Rating</option>
          <option value="newness">Newness</option>
          <option value="plowertohigh">Price: Low to High</option>
          <option value="phightolow">Price: High to low</option>
        </select>
        <input type="submit" value="Go" class="btn btn-primary">
      </form>

      <div class="container-fluid mt-5 d-flex justify-content-start flex-wrap">

        @foreach ($komiks as $komik)
            
          <div class="col mb-4">
            <div class="card p-0" style="width: 13rem">
              <a href="komik/{{ $komik->id }}" class="card-img-top d-flex justify-content-center pt-3">
                  <img src="assets/img/komik/{{ $komik->img }}" alt="" width="180">
              </a>
              <div class="card-body">
                  <p class="fw-bold fs-6 text-center">{{ $komik->judul }}</p>
                  <p class="fs-4 fst-italic text-center">Rp {{ $komik->harga }}</p>
                  <form action="/cart/tambah" method="post" class="mt-5">
                    @csrf
                    <input type="hidden" value="1" name="qty">
                    <input type="hidden" value="{{ $komik->id }}" name="id">
                    <button class="btn btn-dark w-100" style="font-size: 16px"></i>Add to bag</button>
                  </form>
              </div>
            </div>
          </div>

        @endforeach
        
      </div>
      
    </div>
  </div>
</div>  

{{-- <div class="container" style="height: 1000px"></div> --}}

<script src="assets/bootstrap/js/src/carousel.js"></script>
<script src="assets/bootstrap/js/src/dropdown.js"></script>
<script src="assets/bootstrap/dist/js/bootstrap.bundle.js"></script>

@endsection