@extends('layouts.main')

@section('container')
{{-- <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a> --}}

<h1 class="text-center mb-3">{{ $title }}</h1>
<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/posts">
      @if (request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}"> 
      @endif
      @if (request('author'))
        <input type="hidden" name="author" value="{{ request('author') }}"> 
      @endif
      <div class="input-group">
        {{-- value kalau ada req disi kalau ga ada kosong --}}
        <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
        <button class="btn btn-primary" type="submit" >Search</button>
      </div>
    </form>
  </div>
</div>
    <div class="mb-3">
      @foreach ($categories as $category)
      <a href="/posts?category={{ $category->slug }}" class="btn btn-dark text-white">{{ $category->name }}</a>
      @endforeach
    </div>
    
    {{-- cek ada postingan apa ga, kalau ga ada tampil apa--}}
    @if ($posts->count())
        
    <div class="card mb-3">
       {{-- cek ada gambar upload atau tidak --}}
       @if ($posts[0]->image)
       <div style="max-height: 400px; overflow:hidden">
           <img src="{{ asset('storage/'. $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">    
       </div>
       @else
          <img src="https://source.unsplash.com/1200x400?school,student" class="card-img-top" alt="{{ $posts[0]->category->name }}">
       @endif

      {{-- tutor wpu --}}
        {{-- <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="..."> --}}
        
        <div class="card-body text-center">
          <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark"> {{ $posts[0]->title }}</a></h3>
          <p>
            <small class="text-muted">  
            By <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none"> {{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans()}}
            </small>
        </p>
          <p class="card-text">{{ $posts[0]->excerpt }}</p>
          <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
        </div>
      </div>

    

    <div class="container">
      <div class="row">
        @foreach ($posts->skip(1) as $post)
            
        <div class="col-md-4">
          <div class="card">
            <div class="position-absolute px-3 py-2 " style="background-color: rgba(0,0,0,0.8)"><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none"> {{ $post->category->name }}</a></div>
             {{-- cek ada gambar upload atau tidak --}}
             @if ($post->image)
                 <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">    
             @else
                <img src="https://source.unsplash.com/500x300?school,student" class="card-img-top" alt="{{ $post->category->name }}">
             @endif
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <p>
                <small class="text-muted">  
                By <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans()}}
                </small>
            </p>
              <p class="card-text">{{ $post->excerpt }}</p>
              <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    @else
    <p class="text-center fs-4">Berita tidak ditemukan.</p>
    @endif
    <div class="d-flex justify-content-center mt-3">
      {{ $posts->links() }}
    </div>



    {{-- @foreach ($posts->skip(1) as $post)
    <article class="mb-5 border-bottom">
        <h2>
           <a href="/posts/{{ $post->slug }}" class="text-decoration-none"> {{ $post->title }} </a>
        </h2>
        <p>By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }}</a></p>

        <p>{{ $post->excerpt }}</p>

        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more</a>
    </article>
    @endforeach --}}



    
@endsection