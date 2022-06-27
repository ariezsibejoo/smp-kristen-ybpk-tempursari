@extends('layouts.main')

@section('container')
      <main>
      
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              @if ($galeri[0]->image)
              <div style="max-height: 600px; overflow:hidden">
                  <img src="{{ asset('storage/'. $galeri[0]->image) }}" alt="galery" class="img-fluid mt-3">    
              </div>
              @else
              <img src="https://source.unsplash.com/1200x400?school,student" alt="..."  >
              @endif
              {{-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> --}}
      
              <div class="container">
                <div class="carousel-caption text-start">
                  <h1>{{ $galeri[0]->nama }}</h1>
                  <p>{!! $galeri[0]->deskripsi !!}</p>
                  <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              @if ($galeri[1]->image)
              <div style="max-height: 600px; overflow:hidden">
                  <img src="{{ asset('storage/'. $galeri[1]->image) }}" alt="galery" class="img-fluid mt-3">    
              </div>
              @else
              <img src="https://source.unsplash.com/1200x400?school,student" alt="..."  >
              @endif
                {{-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> --}}
        
                <div class="container">
                  <div class="carousel-caption text-start">
                    <h1>{{ $galeri[1]->nama }}</h1>
                    <p>{!! $galeri[1]->deskripsi !!}</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                  </div>
                </div>
            </div>

            <div class="carousel-item">
              @if ($galeri[2]->image)
              <div style="max-height: 600px; overflow:hidden">
                  <img src="{{ asset('storage/'. $galeri[2]->image) }}" alt="galery" class="img-fluid mt-3">    
              </div>
              @else
              <img src="https://source.unsplash.com/1200x400?school,student" alt="..."  >
              @endif
                {{-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> --}}
        
                <div class="container">
                  <div class="carousel-caption text-start">
                    <h1>{{ $galeri[2]->nama }}</h1>
                    <p>{!! $galeri[2]->deskripsi !!}</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                  </div>
                </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

      </main>

@endsection