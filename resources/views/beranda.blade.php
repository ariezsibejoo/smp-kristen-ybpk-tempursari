@extends('layouts.main')


@section('container')

<!-- Hero Start -->
<div class="hero" id="home">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6">
                <div class="hero-content">
                    <div class="hero-text">
                        <p>Selamat Datang di website</p>
                        <h1>SMP Kristen YBPK</h1>
                        <h2></h2>
                        <div class="typed-text">Sehati , Sepikir dan Sejiwa</div>
                    </div>
                    <div class="hero-btn">
                        <a class="btn" href="/sambutan">Sambutan Kepala Sekolah</a>
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

<!-- About Start -->
<div class="about wow fadeInUp" data-wow-delay="0.1s" id="about">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="img/imgs.jpeg" alt="Image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-header text-left">
                        <p>Profil Sekolah</p>
                        <h2>SMP Kristen YBPK Tempursari</h2>
                    </div>
                    <div class="about-text">
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                            Maxime perspiciatis ab odit maiores? Sint dolor aperiam voluptas quos, 
                            minus numquam laborum rerum id a doloremque suscipit quia excepturi vel eaque. 
                            Minus quod odio expedita ad dolor ab error quo voluptatibus.
                        </p>
                    </div>
                    <a class="btn" href="/profil">Selengkapnya..</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="service" id="service">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>Fasilitas</p>
            <h2>Fasilitas Yang Ada di Sekolah</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-laptop"></i>
                    </div>
                    <div class="service-text">
                        <h3>Lab. Komputer</h3>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phase nec preti mi. Curabi facilis ornare velit non
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-medkit"></i>
                    </div>
                    <div class="service-text">
                        <h3>Ruang UKS</h3>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phase nec preti mi. Curabi facilis ornare velit non
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-futbol"></i>
                    </div>
                    <div class="service-text">
                        <h3>Lap. Olahraga</h3>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phase nec preti mi. Curabi facilis ornare velit non
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="service-text">
                        <h3>Perpustakaan</h3>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phase nec preti mi. Curabi facilis ornare velit non
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Testimonial Start -->
<div class="testimonial wow fadeInUp" data-wow-delay="0.1s" id="review">
    <div class="container">
        <div class="testimonial-icon">
            <i class="fa fa-quote-left"></i>
        </div>
        <div class="owl-carousel testimonials-carousel">
            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="img/testimonial-1.jpg" alt="Image">
                </div>
                <div class="testimonial-text">
                    <p>
                        Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum. Lorem ipsum dolor sit amet consec adipis elit.
                    </p>
                    <h3>Nama Alumni</h3>
                    <h4>Profesi</h4>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="img/testimonial-2.jpg" alt="Image">
                </div>
                <div class="testimonial-text">
                    <p>
                        Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum. Lorem ipsum dolor sit amet consec adipis elit.
                    </p>
                    <h3>Nama Alumni</h3>
                    <h4>Profesi</h4>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="img/testimonial-3.jpg" alt="Image">
                </div>
                <div class="testimonial-text">
                    <p>
                        Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum. Lorem ipsum dolor sit amet consec adipis elit.
                    </p>
                    <h3>Nama Alumni</h3>
                    <h4>Profesi</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Portfolio Start -->


<div class="portfolio" id="portfolio">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>Galeri</p>
            <h2>Galeri Sekolah</h2>
        </div>

        {{-- cek ada postingan ga --}}
        @if ($galeri->count())

        <div class="row portfolio-container">
            @foreach ($galeri as $galeries)
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                <div class="portfolio-wrap">
                    @if ($galeries->image)    
                    <div class="portfolio-img">
                        <img src="{{ asset('storage/'. $galeries->image) }}" alt="Image">
                    </div>
                    @else
                    <div class="portfolio-img">
                        <img src="/img/img-std.jpeg" alt="Image">
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

        </div>
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 justify-content-center d-flex">
            <a class="btn" href="/galeri">Lihat galeri selengkapnya</a>
        </div>
        <div class="col-lg-4"></div>
        </div>
    </div>
</div>
@else
<p class="text-center fs-4">Galeri tidak ditemukan.</p>
@endif
<!-- Portfolio End -->


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
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 justify-content-center d-flex">
        <button class="btn" type="submit" id="sendMessageButton">Lihat Staff Lainnya</button>
        </div>
        <div class="col-lg-4"></div>
        </div>
        @else
                <p class="text-center fs-4">Guru dan Staff tidak ditemukan.</p>
        @endif
    </div>
</div>
<!-- Team End -->



<!-- Blog Start -->
<div class="blog" id="blog">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>Berita</p>
            <h2>Berita Terkini</h2>
        </div>
        <div class="row">
            @if ($posts->count())
                @foreach ($posts as $post)
    
                <div class="col-lg-6">
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.1s">
                        @if ($post->image)
                        <div class="blog-img">
                            <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}">
                        </div>
                        @else
                        <div class="blog-img">
                            <img src="/img/img-std.jpeg">
                        </div>
                        @endif
                        <div class="blog-text">
                            <h2>{{ $post->title }}</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-user"></i>{{ $post->author->name }}</p>
                                <p><i class="far fa-list-alt"></i>{{ $post->category->name }}</p>
                                <p><i class="far fa-calendar-alt"></i>{{ \Carbon\Carbon::parse($post->published_at)->isoFormat('D MMMM Y') }}</p>
                                {{-- <p><i class="far fa-calendar-alt"></i>{{ $post->published_at }}</p> --}}
                            </div>
                            <p>
                                {{ $post->excerpt }}
                            </p>
                            <a class="btn" href="/posts/{{ $post->slug }}">Baca Selengkapnya <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                @endforeach
        </div>
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 justify-content-center d-flex">
                <a href="/posts" class="btn" id="sendMessageButton">Lihat Berita Lainnya</a>
        {{-- <button class="btn" type="submit" id="sendMessageButton">Lihat Berita Lainnya</button> --}}
        </div>
        <div class="col-lg-4"></div>
        </div>
        @else
            <p class="text-center fs-4">Berita tidak ditemukan.</p>
        @endif
    </div>
</div>
<!-- Blog End -->


        <!-- Contact Start -->
        <div class="contact wow fadeInUp" data-wow-delay="0.1s" id="contact">
            <div class="container-fluid">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.133489340233!2d112.97494041433212!3d-8.289511485656691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6129563edea15%3A0x5d71f96519babd68!2sSMP%20K%20YBPK%20Tempursari!5e0!3m2!1sid!2sid!4v1643855539199!5m2!1sid!2sid" 
                            width="650" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="col-md-8">
                            <div class="contact-form">
                                <div id="success"></div>
                                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="control-group">
                                        <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                        <p class="help-block"></p>
                                    </div>
                                    <div>
                                        <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        {{-- footer --}}
        {{-- @yield('footer') --}}


<!-- Back to top button -->
{{-- <a href="#" class="btn back-to-top"><i class="fa fa-chevron-up"></i></a> --}}
        
        
<!-- Pre Loader -->
{{-- <div id="loader" class="show">
    <div class="loader"></div>
</div> --}}

@endsection