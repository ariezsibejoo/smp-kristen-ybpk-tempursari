@extends('layouts.main')

@section('container')
    
<!-- Hero Start -->
<div class="profil" id="profil">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6">
                <div class="hero-content">
                    <div class="hero-text">
                        <p>Data Siswa</p>
                        <h1>SMP Kristen YBPK Tempursari</h1>
                        <h2></h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 d-none d-md-block">
                <div class="hero-image">
                    <img src="img/siswasmp.png" alt="Hero Image">
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- Hero End -->


<div class="container">

    <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
        <p>SMPK YBPK Tempursari</p>
        <h2>Data Siswa</h2>
    </div>
    
    {{-- <div class="blog-item wow fadeInUp" data-wow-delay="0.1s"> --}}
<div class="table-responsive col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
    <table class="table table-striped table-sm table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">NISN</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Kelas</th>
          {{-- <th scope="col">Tanggal lahir</th> --}}
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
            {{-- <td>{{ \Carbon\Carbon::parse($siswa->tanggal_lahir)->isoFormat('D MMMM Y') }}</td> --}}
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>


  <div class="d-flex mt-3">
    {{ $siswas->links() }}
  </div>
</div>

  @endsection