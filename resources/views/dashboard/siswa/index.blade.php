@extends('dashboard/layouts/main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kelola Siswa</h1>
  </div>
  
  {{-- AJAX --}}
  {{-- <div class="col-lg-3 mb-3">
    <input type="text" class="form-control" id="search" name="search" placeholder="Search...">
  </div> --}}
  
  @if (session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
  @endif


  <div class="table-responsive col-lg-10">
    <a href="/dashboard/siswa/create" class="btn btn-primary mb-3">Tambah Siswa baru</a>
    <table class="table table-striped table-sm table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">NIS</th>
          <th scope="col">L/P</th>
          <th scope="col">Kelas</th>
          <th scope="col">Tanggal lahir</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($siswas as $siswa)    
          <tr>
            <td>{{ $siswas->perPage()*($siswas->CurrentPage()-1)+$loop->index+1 }}</td>
            <td>{{ $siswa->nama }}</td>
            <td>{{ $siswa->nis }}</td>
            <td>{{ $siswa->jenkel }}</td>
            <td>{{ $siswa->kelas }}</td>
            <td>{{ \Carbon\Carbon::parse($siswa->tanggal_lahir)->format('d-F-Y') }}</td>
            <td>
                <a href="/dashboard/siswa/{{ $siswa->nis }}" class="badge bg-info"> <span data-feather="eye"></span></a>
                <a href="/dashboard/siswa/{{ $siswa->nis }}/edit" class="badge bg-warning"> <span data-feather="edit"></span></a>
                {{-- delete --}}
                <form action="/dashboard/siswa/{{ $siswa->nis }}" method="post" class="d-inline">
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
    {{ $siswas->links() }}
  </div>



{{-- AJAX --}}

{{-- <script type="text/javascript">
  $('#search').on('keyup',function(){
  $value=$(this).val();
  $.ajax({
  type : 'get',
  url : '{{URL::to('search')}}',
  data:{'search':$value},
  success:function(data){
  $('tbody').html(data);
  }
  });
  })
  </script>
  <script type="text/javascript">
  $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
  </script> --}}


@endsection
