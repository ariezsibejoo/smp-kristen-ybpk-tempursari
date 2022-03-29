@extends('dashboard/layouts/main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <a href="/dashboard/user" class="btn btn-success"><span data-feather="arrow-left"></span> Kembali</a>
            <a href="/dashboard/user/{{ $user->username }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Ubah</a>
            <form action="/dashboard/user/{{ $user->username }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')"><span data-feather="x-circle"></span>Hapus</button>
              </form>

            <div class="row mt-3">
                <div class="col-lg-2">
                    <p>Nama</p>
                    <p>Username</p>
                    <p>Email</p>
                    <p>Password</p>
                </div>
                <div class="col">
                    <p>: {{ $user->name }}</p>
                    <p>: {{ $user->username }}</p>
                    <p>: {{ $user->email }}</p>
                    <p>: {{ $user->password }}</p>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
