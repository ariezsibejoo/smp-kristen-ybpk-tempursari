@extends('dashboard/layouts/main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2 class="mb-3">Data staff</h2>
            <a href="/dashboard/staff" class="btn btn-success"><span data-feather="arrow-left"></span> Kembali</a>
            <a href="/dashboard/staff/{{ $staff->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Ubah</a>
            {{-- hapus --}}
            <form action="/dashboard/staff/{{ $staff->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')"><span data-feather="x-circle"></span> Hapus</button>
                </form>
            <div class="row mt-3">
                <div class="col-lg-2">
                    <p>Nama</p>
                    <p>NIM</p>
                    <p>Tanggal lahir</p>
                    <p>Kelas</p>
                    <p>Foto</p>
                </div>
                <div class="col-lg-4">
                    <p>: {{ $staff->nama }}</p>
                    <p>: {{ $staff->nip }}</p>
                    <p>: {{ \Carbon\Carbon::parse($staff->tanggal_lahir)->isoFormat('D MMMM Y') }}</p>
                    <p>: {{ $staff->jabatan }}</p>
                    <img src="{{ asset('storage/'.$staff->image) }}" alt="{{ $staff->nama }}" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
