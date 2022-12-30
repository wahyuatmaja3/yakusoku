@extends('layouts.main')

@section('container')
    <div class="container-fluid d-flex justify-content-center flex-wrap py-5 mb-5">
        <div class="display-6 w-100 text-center mb-2">Login</div>
        
        <div class="col-5">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <form action="/login" method="post">
                @csrf
                <div class="form-group mb-2">
                    <label for="username">Username</label>
                    <input type="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Enter username" name="username" value="{{ old('username') }}" autofocus>
                    @error('username')
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

                <button type="submit" class="btn btn-primary w-100 mt-3">Login</button>
                <p class="w-100 text-center"><a href="/register" class="">Or create an Account</a></p>
            </form>
        </div>
    </div>
    @endsection