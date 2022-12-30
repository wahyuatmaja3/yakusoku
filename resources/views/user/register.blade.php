@extends('layouts.main')

@section('container')
    <div class="container-fluid d-flex justify-content-center flex-wrap py-5 mb-5">
        <div class="display-6 w-100 text-center mb-2">Register</div>
        <div class="col-5">

            <form action="/register" method="post">
                @csrf
                <div class="form-group mb-2">
                    <label for="username">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Enter username" name="username" value="{{ old('username') }}" autofocus>
                    @error('username')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>

                <div class="d-flex">

                    <div class="form-group mb-2 flex-fill me-2">
                        <label for="fname">Firstname</label>
                        <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="fname" placeholder="Enter firstname" value="{{ old('firstname') }}" name="firstname">
                        @error('firstname')                    
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group mb-2 flex-fill ms-2">
                        <label for="lname">Lastname</label>
                        <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lname" placeholder="Enter lastname" name="lastname" value="{{ old('lastname') }}">
                        @error('lastname')                    
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>

                </div>

                <div class="form-group mb-2">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter Email" name="email" value="{{ old('email') }}" autofocus>
                    @error('email')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="pass">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="pass" placeholder="Enter Password" name="password">
                    @error('password')                    
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="notelp">Nomor telepon</label>
                    <input type="number" class="form-control @error('nomor telepon') is-invalid @enderror" id="notelp" placeholder="Enter nomor telepon" value="{{ old('notelp') }}" name="notelp">
                    @error('nomor telepon')                    
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" cols="30" rows="4" class="form-control" value="{{ old('alamat') }}"></textarea>
                    @error('alamat')                    
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary w-100 mt-3">Register</button>
                <p class="w-100 text-center"><a href="/login">Already have an account</a></p>
            </form>
        </div>
    </div>
    @endsection