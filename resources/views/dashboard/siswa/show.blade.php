@extends('dashboard/layouts/main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2 class="mb-3">Data siswa</h2>
            <a href="/dashboard/siswa" class="btn btn-success"><span data-feather="arrow-left"></span> Kembali</a>
            <a href="/dashboard/siswa/{{ $siswa->nis }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Ubah</a>
            {{-- delete --}}
            <form action="/dashboard/siswa/{{ $siswa->nis }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')"><span data-feather="x-circle"></span>Hapus</button>
              </form>            
              <div class="row mt-3">
                <div class="col-lg-2">
                    <p>Nama</p>
                    <p>NIM</p>
                    <p>Kelas</p>
                    <p>Tanggal lahir</p>
                </div>
                <div class="col">
                    <p>: {{ $siswa->nama }}</p>
                    <p>: {{ $siswa->nis }}</p>
                    <p>: {{ $siswa->kelas }}</p>
                    <p>: {{ $siswa->tanggal_lahir }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
