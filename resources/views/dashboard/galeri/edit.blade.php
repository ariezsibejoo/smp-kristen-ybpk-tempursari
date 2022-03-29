@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ubah data Galeri</h1>
  </div>
<div class="col-lg-8">
    {{-- method post otomatis mengarah ke method store di controller resource --}}
    <form method="POST" action="/dashboard/galeri/{{ $galery->id }}">
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

      <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        @error('deskripsi')
            <p class="text-danger">{{ $message }}</p>
        @enderror
            <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi', $galery->deskripsi) }}">
            <trix-editor input="deskripsi"></trix-editor>
        </div>
      
      <button type="submit" class="btn btn-primary">Tambah Foto</button>
    </form>
</div>


<script>
    // nonaktifkan fungsi upload trix
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })
</script>
@endsection