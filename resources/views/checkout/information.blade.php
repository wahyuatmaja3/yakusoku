@extends('layouts.layoutCheckout')

@section('container')

<form class="needs-validation" action="{{ url("/checkout/tambah") }}" method="post">
    @csrf
    <h5 class="mb-2">Contact information</h5>
    
    <div class="mb-4">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com" value="{{ Auth::user()->email }}" disabled>
      <div class="invalid-feedback">
        Please enter a valid email address for shipping updates.
      </div>
    </div>

    <h5 class="mb-2">Shipping information</h5>
      
      <div class="row">
        <div class="col-md-6 mb-2">
          <label for="firstName">First name</label>
          <input type="text" class="form-control" name="fname" id="firstName" placeholder="" value="" required>
          <div class="invalid-feedback">
            Valid first name is required.
          </div>
        </div>
        <div class="col-md-6 mb-2">
          <label for="lastName">Last name</label>
          <input type="text" class="form-control" name="lname" id="lastName" placeholder="" value="" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
      </div>

      <div class="mb-2">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required>
        <div class="invalid-feedback">
          Please enter your shipping alamat.
        </div>
      </div>

      <div class="mb-2">
        <label for="kota">Kota</label>
        <input type="text" class="form-control" name="kota" id="kota" placeholder="Kota">
      </div>

      <div class="row">
        <div class="col mb-2">
          <label for="state">Provinsi</label>
          <select class="custom-select d-block w-100" name="provinsi" id="state" required>
            <option value="">Choose...</option>
            <option>Aceh</option>
            <option>Sumatera utara</option>
            <option>Sumatera barat</option>
            <option>Riau</option>
            <option>Jambi</option>
            <option>Sumatera selatan</option>
            <option>Bengkulu</option>
            <option>Lampung</option>
            <option>Kepulauan Riau</option>
            <option>DKI Jakarta</option>
            <option>Jawa barat</option>
            <option>Jawa tengah</option>
            <option>Di Yogyakarta</option>
            <option>Jawa timur</option>
            <option>Banten</option>
            <option>Bali</option>
            <option>Nusa tenggara barat</option>
            <option>Nusa tenggara timur</option>
            <option>Kalimantan barat</option>
            <option>Kalimantan tengah</option>
            <option>Kalimantan timur</option>
            <option>Kalimantan selatan</option>
            <option>Kalimantan utara</option>
            <option>Sulawesi utara</option>
            <option>Sulawesi tengah</option>
            <option>Sulawesi selatan</option>
            <option>Sulawesi tenggara</option>
            <option>Gorontalo</option>
            <option>Sulawesi barat</option>
            <option>Maluku</option>
            <option>Maluku utara</option>
            <option>Papua barat</option>
            <option>Papua</option>
          </select>
          <div class="invalid-feedback">
            Please provide a valid state.
          </div>
        </div>
        <div class="col-4 mb-2">
          <label for="zip">Zip</label>
          <input type="text" class="form-control" name="zip" id="zip" placeholder="" required>
          <div class="invalid-feedback">
            Zip code required.
          </div>
        </div>
      </div>
      <hr class="mb-4">
      <div class="row d-flex">
        <button class="btn btn-dark btn-lg ms-auto" type="submit">Continue to Shipping</button>
      </div>
      
</form>
@endsection