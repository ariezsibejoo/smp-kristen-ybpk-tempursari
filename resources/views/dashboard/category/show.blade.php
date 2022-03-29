@extends('dashboard/layouts/main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2 class="mb-3">Data Kategori</h2>
            <a href="/dashboard/siswa" class="btn btn-success"><span data-feather="arrow-left"></span> Kembali</a>
            <a href="/dashboard/category/{{ $category->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Ubah</a>
                {{-- delete --}}
            <form action="/dashboard/category/{{ $category->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')"><span data-feather="x-circle"></span>Hapus</button>
                </form>

            <div class="row mt-3">
                <div class="col-lg-2">
                    <h6>Kategori</h6>
                    <h6>Slug</h6>
                </div>
                <div class="col">
                    <h6>: {{ $category->name }}</h6>
                    <h6>: {{ $category->slug }}</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
