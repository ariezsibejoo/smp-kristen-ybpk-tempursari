@extends('layouts.main')

@section('container')

<!-- Hero Start -->
<div class="profil" id="profil">
  <div class="container-fluid">
      <div class="row align-items-center">
          <div class="col-sm-12 col-md-6">
              <div class="hero-content">
                  <div class="hero-text">
                      <p>Profil</p>
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

<!-- Profil Start -->
<section class="isiprofil" id="prof">
  <div class="container">
      <div class="profil-content">
        {{-- <div class="blog-item wow fadeInUp" data-wow-delay="0.1s"> --}}
          <div class="section-header text-center wow fadeInUp" data-wow-delay="0.1s">
              <p>Sejarah</p>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <div class="sejarah-content text-center wow fadeInUp" data-wow-delay="0.1s"">
                      <p>Sekolah Menengah Pertama Kristen YBPK Tempursari didirikan pada tanggal 1 Agustus 1958 oleh GKJW Tempursari. 
                          Waktu itu SMPK YBPK Tempursari adalah satu-satunya lembaga pendidikan SMP yang ada di tempursari yang mampu 
                          memberikan kontribusi terhadap kualitas sumber daya manusia (SDM) masyarakat Tempursari, bahkan di luar 
                          Tempursari sebab waktu itu banyak siswa yang berasal dari Kabupaten Malang dan sekitarnya.</p>
                      <p>Dalam perkembangannya sejak berdiri 1 Agustus 1958, YBPK Cabang Tempursari adalah sebagai berikut:</p>
                      <p> 1.	Unit SMP berdiri mulai 1 Agustus 1958 sampai sekarang <br>
                          2.	Unti TK berdiri 1 Januari 1967 sampai sekarang <br>
                          3.	Unit SD berdiri 1 Januari 1972 sampai sekarang <br>
                          4.	Unit SMA berdiri mulai tahun 1985 sampai sekarang <br>
                          </p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Profil End -->

<!-- Visi start -->
<div class="visimisi">
  <div class="container">
      <div class="visi-content">
          <div class="section-header text-center wow fadeInUp" data-wow-delay="0.1s"">
              <p id="visi">Visi</p>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <div class="isivisi-content text-center wow fadeInUp" data-wow-delay="0.1s"">
                      <p>Terciptanya kwalitas sumber daya manusia yang beriman, berilmu,   terampil dan berpacu dalam prestasi.</p>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
<!-- Visi End -->

<!-- Misi start -->
<div class="misivisi" id="misivisi">
  <div class="container">
      <div class="misi-content">
          <div class="section-header text-center wow fadeInUp" data-wow-delay="0.1s"">
              <p>Misi</p>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <div class="isimisi-content text-center wow fadeInUp" data-wow-delay="0.1s"">
                      <p>1. Mewujudkan pendidikan yang menghasilkan lulusan cerdas,  terampil,beriman.<br>
                          2. Mewujudkan perangkat kurikulum yang lengkap dan berwawasan kedepan.<br>
                          3. Mewujudkan penilaian yang otentik.<br>
                          4. Mewujudkan penyelenggaraan pemberlajaran aktif, kreatif, dan menyenangkan.<br>
                          5. Mewujudkan kurikulum SMP yang relevan dengan kebutuhan yaitu kebutuhan peserta didik, keluarga dan masyarakat.<br> 
                          </p>
              </div>
          </div>
      </div>
  </div>
</div>
</div>


{{-- SEMUA STAFF GURU --}}

{{-- <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">NIP</th>
        <th scope="col">Tanggal lahir</th>
        <th scope="col">Jabatan</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($staff as $staf)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $staf->nama }}</td>
            <td>{{ $staf->nip }}</td>
            <td>{{ \Carbon\Carbon::parse($staf->tanggal_lahir)->format('j F Y') }}</td>
            <td>{{ $staf->jabatan }}</td>
        </tr>
        @endforeach
    </tbody>
  </table> --}}
    
@endsection

