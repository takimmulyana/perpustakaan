@extends('layouts.main')
@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>


    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Cari</button>
                  </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-md-3 mb-3">
                <div class="card" style="max-width: 300px">
                    <div class="position-absolute bg-dark px-3 py-2 " style="background-color: rgba(0,0,0,0.7)"><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="..." class="img-fluid" style="height: 250px">
                @endif
                    <div class="card-body font-bold">
                      <h3 class="card-title text-center"><a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h3>
                      <h5 class="card-jumlah">Jumlah Buku : {{ $post->jumlah }}</h5>
                      <h5 class="card-tempat">Tempat Buku : {{ $post->tempat }}</h5>
                      <h5 class="card-penulis">Penulis Buku : {{ $post->penulis }}</h5>
                      <h5 class="card-penulis">Tahun Terbit : {{ $post->tahun_terbit }}</h5>
                      <a href="/posts/{{ $post->slug }}"  class="text-decoration-none btn btn-primary">Selengkapnya</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
        <p class="text-center fs-4">Buku tidak ada.</p>
    @endif
    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>
@endsection