@extends('layouts.main')

@section('container')
<!-- Hero Start -->
<div class="gale" id="gale">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6">
                <div class="hero-content">
                    <div class="hero-text">
                        <p>Galeri</p>
                        <h1>Galeri Foto dan Video</h1>
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


<!-- Portfolio Start -->
<div class="portfolio" id="portfolio">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>Galeri</p>
            <h2>Galeri Sekolah</h2>
        </div>
        
        <div class="row portfolio-container">
            @if ($galeri->count())    
            @foreach ($galeri as $galeries)    
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                <div class="portfolio-wrap">
                    @if ($galeries->image)    
                    <div class="portfolio-img">
                        <img src="{{ asset('storage/'. $galeries->image) }}" alt="Image">
                    </div>
                    @else
                    <div class="portfolio-img">
                        <img src="/img/img-std.jpeg" alt="..."  >
                        </div> 
                    @endif
                    <div class="portfolio-text">
                        <h3>{{ $galeries->nama }}</h3>
                        @if ($galeries->image)
                        <a class="btn" href="{{ asset('storage/'. $galeries->image) }}" data-lightbox="portfolio">+</a>
                        @else
                        <a class="btn" href="/img/img-std.jpeg" data-lightbox="portfolio">+</a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <p class="text-center fs-4">Galeri tidak ditemukan.</p>
            @endif

        </div>
    </div>
</div>
<!-- Portfolio End -->

@endsection