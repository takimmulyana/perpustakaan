@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row  my-4">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left" class="align-text-bottom"></span> Kembali</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit" class="align-text-bottom"></span> Ubah</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Yakin ceritanya mau dihapus?')"><span data-feather="x-circle" class="align-text-bottom"></span> Hapus</button>
              </form>
              @if($post->image)
              <div style="max-height: 400px; overflow:hidden;">
              <img src="{{ asset('storage/' . $post->image) }}" alt="..." class="img-fluid mt-3">
            </div>
              @endif
              
            <article class="my-4">
              <p>Jumlah Buku : {{ $post->jumlah }}</p>
              <p>Tempat Buku : {{  $post->tempat  }}</p>
              <p>Penulis Buku : {{ $post->penulis }}</p>
              <p>Tahun Terbit : {{ $post->tahun_terbit }}</p>
            {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
@endsection