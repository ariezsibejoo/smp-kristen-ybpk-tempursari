@extends('dashboard/layouts/main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kelola Staff</h1>
  </div>

  @if (session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
  @endif

  <div class="table-responsive col-lg-10">
    <a href="/dashboard/staff/create" class="btn btn-primary mb-3">Tambah Staff baru</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">NIP</th>
          <th scope="col">Tanggal lahir</th>
          <th scope="col">Jabatan</th>
          {{-- <th scope="col">Foto</th> --}}
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>

        {{-- UNTUK LOOP NO TABEL MENGGUNAKAN PAGINATE --}}
          @foreach ($staff as $staf)    
          <tr>
            <td>{{ $staff->perPage()*($staff->CurrentPage()-1)+$loop->index+1 }}</td>
            {{-- {{$players ->perPage()*($players->currentPage()-1)+$count}} --}}
            <td>{{ $staf->nama }}</td>
            <td>{{ $staf->nip }}</td>
            <td>{{ \Carbon\Carbon::parse($staf->tanggal_lahir)->format('d-F-Y') }}</td>
            <td>{{ $staf->jabatan  }}</td>
            <td>
                <a href="/dashboard/staff/{{ $staf->id }}" class="badge bg-info"> <span data-feather="eye"></span></a>
                <a href="/dashboard/staff/{{ $staf->id }}/edit" class="badge bg-warning"> <span data-feather="edit"></span></a>
                {{-- delete --}}
                <form action="/dashboard/staff/{{ $staf->id }}" method="post" class="d-inline">
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
    {{ $staff->links() }}
  </div>
@endsection
