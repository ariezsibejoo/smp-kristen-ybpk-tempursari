@extends('layouts.main')

@section('container')

<!-- Hero Start -->
<div class="profil" id="profil">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6">
                <div class="hero-content">
                    <div class="hero-text">
                        <p>Data Guru dan Staff</p>
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

  <!-- Team Start -->
<div class="team" id="team">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>Staff Sekolah</p>
            <h2>Staff dan Guru</h2>
        </div>
        <div class="row">
            @if ($staff->count())
            @foreach ($staff as $staf)    
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                <div class="team-item">
                    @if ($staf->image)
                    <div class="team-img">
                        <img src="{{ asset('storage/'. $staf->image) }}" alt="Image">
                    </div>
                    @else
                    <div class="team-img">
                        <img src="img/icon.png" alt="Image">
                    </div>
                    @endif
                    <div class="team-text">
                        <h2>{{ $staf->nama }}</h2>
                        <p>NIP : {{ $staf->nip }}</p>
                        <h4>{{ $staf->jabatan }}</h4>
                        <div class="team-social">
                            <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
        {{-- <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 justify-content-center d-flex">
        <button class="btn" type="submit" id="sendMessageButton">Lihat Staff Lainnya</button>
        </div>
        <div class="col-lg-4"></div>
        </div> --}}
        @else
                <p class="text-center fs-4">Guru dan Staff tidak ditemukan.</p>
        @endif
    </div>
</div>
<!-- Team End -->

  @endsection