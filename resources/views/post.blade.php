
@extends('layouts.main')
@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-10">
            <h2 class="mb-3 fw-bold">{{ $post->title }}</h2>

            <p class="fs-5 fw-bold">kategori : <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-dark fw-bold">{{ $post->category->name }}</a></p>

            @if($post->image)
              <div style="width: 300px; overflow:hidden;">
              <img src="{{ asset('storage/' . $post->image) }}" alt="..." class="img-fluid mt-3">
            </div>
              @endif
            
        <article class="my-3 fs-5">
              <p>Jumlah Buku : {{  $post->jumlah  }}</p>
              <p>Tempat Buku : {{  $post->tempat  }}</p>
              <p>Penulis Buku : {{ $post->penulis }}</p>
              <p>Tahun Terbit : {{ $post->tahun_terbit }}</p>
            {!! $post->body !!}
        </article>    

    <a href="/posts" class="d-block mt-3 text-decoration-none">Kembali</a>
        </div>
    </div>
</div>
    
    
@endsection
