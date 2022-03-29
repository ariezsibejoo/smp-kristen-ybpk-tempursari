@extends('layouts.main')

@section('container')

<h1>Profil</h1>

<div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400?school,student}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $posts[0]->title }}</h5>
      <p class="card-text">{!! $posts[0]->body !!}</p>
    </div>
  </div>


<table class="table table-striped table-hover">
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
  </table>
    
@endsection

