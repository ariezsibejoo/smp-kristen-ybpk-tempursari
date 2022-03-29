@extends('dashboard/layouts/main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kelola Galeri</h1>
  </div>

  @if (session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
  @endif

  <div class="table-responsive col-lg-10">
    <a href="/dashboard/galeri/create" class="btn btn-primary mb-3">Tambah Foto baru</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Deskripsi</th>
          {{-- <th scope="col">Foto</th> --}}
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($galeries as $galery)    
        <tr>
            {{-- UNTUK LOOP NO TABEL MENGGUNAKAN PAGINATE --}}
            <td>{{ $galeries->perPage()*($galeries->CurrentPage()-1)+$loop->index+1 }}</td>
            {{-- {{$players ->perPage()*($players->currentPage()-1)+$count}} --}}
            <td>{{ $galery->nama }}</td>
            {{-- memberi limit kata yang ditampilkan --}}
            <td>{!! Str::words($galery->deskripsi, 4, '...') !!}</td>
            <td>
                <a href="/dashboard/galeri/{{ $galery->id }}" class="badge bg-info"> <span data-feather="eye"></span></a>
                <a href="/dashboard/galeri/{{ $galery->id }}/edit" class="badge bg-warning"> <span data-feather="edit"></span></a>
                {{-- delete --}}
                <form action="/dashboard/galeri/{{ $galery->id }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin?')"><span data-feather="x-circle"></span></button>
                </form>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>


  <div class="d-flex mt-3">
    {{ $galeries->links() }}
  </div>
@endsection
