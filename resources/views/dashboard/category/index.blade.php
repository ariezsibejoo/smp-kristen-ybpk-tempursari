@extends('dashboard/layouts/main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kelola Kategori</h1>
  </div>

  @if (session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
  @endif

  <div class="table-responsive col-lg-10">
    <a href="/dashboard/category/create" class="btn btn-primary mb-3">Tambah Kategori baru</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Kategori</th>
          <th scope="col">Slug</th>
          {{-- <th scope="col">Foto</th> --}}
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>

        {{-- UNTUK LOOP NO TABEL MENGGUNAKAN PAGINATE --}}
          @foreach ($categories as $category)    
          <tr>
            <td>{{ $categories->perPage()*($categories->CurrentPage()-1)+$loop->index+1 }}</td>
            {{-- {{$players ->perPage()*($players->currentPage()-1)+$count}} --}}
            <td>{{ $category->name }}</td>
            <td>{!! $category->slug !!}</td>
            <td>
                <a href="/dashboard/category/{{ $category->slug }}" class="badge bg-info"> <span data-feather="eye"></span></a>
                <a href="/dashboard/category/{{ $category->slug }}/edit" class="badge bg-warning"> <span data-feather="edit"></span></a>
                {{-- delete --}}
                <form action="/dashboard/category/{{ $category->slug }}" method="post" class="d-inline">
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
    {{ $categories->links() }}
  </div>
@endsection
