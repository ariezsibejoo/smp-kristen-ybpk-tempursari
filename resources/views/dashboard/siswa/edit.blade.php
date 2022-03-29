@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ubah data Siswa</h1>
  </div>
<div class="col-lg-4">
    {{-- method post otomatis mengarah ke method store di controller resource --}}
    <form method="POST" action="/dashboard/siswa/{{ $siswa->nis }}">
        @method('put')
        @csrf
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" autofocus required value="{{ old('nama', $siswa->nama) }}">

        @error('nama')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="nis" class="form-label">NIS</label>
        <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" name="nis" required value="{{ old('nis', $siswa->nis) }}">
        @error('nis')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      @if(old('geckoHatchling')) checked @endif

      <label for="jenkel" class="d-block mb-2">Jenis Kelamin</label>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jenkel" id="jenkel1" value="Laki-laki" @if(old('jenkel', $siswa->jenkel)) checked @endif>
        <label class="form-check-label" for="jenkel1">Laki-laki</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jenkel" id="jenkel2" value="Perempuan" @if(old('jenkel', $siswa->jenkel)) checked @endif>
        <label class="form-check-label" for="jenkel2">Perempuan</label>
      </div>

      <div class="mb-3">
        <label for="tanggal_lahir" class="form-label">Tanggal lahir</label>
        <input type="date" class="form-control @error('tanggal_lahir') @enderror" id="tanggal_lahir" name="tanggal_lahir" required value="{{ old('tanggal_lahir', $siswa->tanggal_lahir) }}" required>
        @error('date')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
        @enderror
      </div>
      
      <div class="mb-3">
        <label for="kelas" class="form-label">Kelas</label>
        <select class="form-select" name="kelas">
            <option value="7" {{old('kelas', $siswa->kelas) == '7' ? "selected" : ""}}>7</option>
            <option value="8" {{old('kelas', $siswa->kelas) == '8' ? "selected" : ""}}>8</option>
            <option value="9" {{old('kelas', $siswa->kelas) == '9' ? "selected" : ""}}>9</option>
          </select>      
        </div>

      <button type="submit" class="btn btn-primary">Tambah Siswa</button>
    </form>
</div>

@endsection