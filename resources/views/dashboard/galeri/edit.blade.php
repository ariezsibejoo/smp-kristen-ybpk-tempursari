@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ubah data Galeri</h1>
  </div>
<div class="col-lg-8">
    {{-- method post otomatis mengarah ke method store di controller resource --}}
    <form method="POST" action="/dashboard/galeri/{{ $galery->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" autofocus required value="{{ old('nama', $galery->nama) }}">
        @error('nama')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
        @enderror
      </div>

      {{-- upload file --}}
      <div class="mb-3">
        <label for="image" class="form-label">Foto</label>
        @if ($galery->image)
        <img src="{{ asset('storage/' . $galery->image) }}" class="img-fluid mb-3 col-sm-5 d-block" id="uploadPreview">
            @else
            <img class="img-fluid mb-3 col-sm-5" id="uploadPreview">
        @endif
        {{-- PREVIEW IMAGE --}}
          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage();">
        {{-- <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"> --}}
        {{-- ENDPREVIEW --}}
        @error('image')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
      @enderror
      </div>

      <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        @error('deskripsi')
            <p class="text-danger">{{ $message }}</p>
        @enderror
            <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi', $galery->deskripsi) }}">
            <trix-editor input="deskripsi"></trix-editor>
        </div>
      
      <button type="submit" class="btn btn-primary">Ubah Data Galeri</button>
    </form>
</div>


<script>
    // nonaktifkan fungsi upload trix
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

    // PREVIEW IMAGE
  function previewImage(){
    document.getElementById("uploadPreview").style.display= 'block';

    var oFReader = new FileReader();
      oFReader.readAsDataURL(document.getElementById("image").files[0]);
      oFReader.onload = function (oFREvent)
      {
        document.getElementById("uploadPreview").src = oFREvent.target.result;

      };
    };
</script>
@endsection
