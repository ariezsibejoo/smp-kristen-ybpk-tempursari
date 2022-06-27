@extends('dashboard/layouts/main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2 class="mb-3">{{ $galery->nama }}</h2>
            <a href="/dashboard/galeri" class="btn btn-success"><span data-feather="arrow-left"></span> Kembali</a>
            <a href="/dashboard/galeri/{{ $galery->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Ubah</a>
            <form action="/dashboard/galeri/{{ $galery->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')"><span data-feather="x-circle"></span>Hapus</button>
              </form>
              @if ($galery->image)
              <div style="max-height: 400px; overflow:hidden">
                  <img src="{{ asset('storage/'. $galery->image) }}" alt="galery" class="img-fluid mt-3">    
              </div>
              @else
              <img src="https://source.unsplash.com/1200x400?school,student" alt="galeri" class="img-fluid mt-3">
              @endif

            <article class="my-3 fs-5">
                {!! $galery->deskripsi !!}
            </article>
        </div>
    </div>
</div>
@endsection
