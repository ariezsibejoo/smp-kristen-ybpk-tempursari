@extends('layouts.main')

@section('container')

<h1>Post Category </h1>
@foreach ($categories as $category)
<a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
@endforeach

@endsection