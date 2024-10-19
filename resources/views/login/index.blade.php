@extends('layouts.mainn')
@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">

      @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <div class="row justify-content-center">
          <img src="img/logo.jpeg" alt="logo" style="width: 200px" >
        </div>
        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-bold text-center">SMK Pustek Serpong</h1>
            <h3 class="h3 mb-3 fw-bold text-center">Halaman Login</h3>
            <form action="/login" method="post">
              @csrf
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3 mb-5">Belum punya akun?<a href="/register"> Daftar disini</a></small>
          </main>
    </div>
</div>
@endsection