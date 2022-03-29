@extends('dashboard/layouts/main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kelola Admin</h1>
  </div>

  @if (session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
  @endif

  <div class="table-responsive col-lg-12">
    <a href="/dashboard/user/create" class="btn btn-primary mb-3">Tambah Admin baru</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Username</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($users as $user)    
          <tr>
            <td>{{ $users->perPage()*($users->CurrentPage()-1)+$loop->index+1 }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            {{-- Str::limit(strip_tags($request->body), 100, '...'); --}}
            <td>{{ Str::limit(strip_tags($user->password), 15, '...') }}</td>
            <td>
                <a href="/dashboard/user/{{ $user->username }}" class="badge bg-info"> <span data-feather="eye"></span></a>
                <a href="/dashboard/user/{{ $user->username }}/edit" class="badge bg-warning"> <span data-feather="edit"></span></a>
                {{-- delete --}}
                <form action="/dashboard/user/{{ $user->username }}" method="post" class="d-inline">
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
    {{ $users->links() }}
  </div>
@endsection