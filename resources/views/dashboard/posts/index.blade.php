@extends('dashboard/layouts/main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kelola Berita</h1>
  </div>

  @if (session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
  @endif

  <div class="table-responsive col-lg-8">
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Tambah Postingan baru</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Judul</th>
          <th scope="col">Kategori</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($posts as $post)    
          <tr>
            <td>{{ $posts->perPage()*($posts->CurrentPage()-1)+$loop->index+1 }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category->name }}</td>
            <td>
                <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"> <span data-feather="eye"></span></a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"> <span data-feather="edit"></span></a>
                {{-- delete --}}
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
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
    {{ $posts->links() }}
  </div>
@endsection