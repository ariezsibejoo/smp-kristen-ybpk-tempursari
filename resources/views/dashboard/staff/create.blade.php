@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Staff baru</h1>
  </div>
<div class="col-lg-4">
    {{-- method post otomatis mengarah ke method store di controller resource --}}
    <form method="POST" action="/dashboard/staff" enctype="multipart/form-data">
        @csrf
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" autofocus required value="{{ old('nama') }}">
        @error('nama')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="nip" class="form-label">NIP</label>
        <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" value="{{ old('nip') }}">
        @error('nip')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="tanggal_lahir" class="form-label">Tanggal lahir</label>
        <input type="date" class="form-control @error('tanggal_lahir') is_invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>
        @error('tanggal_lahir')    
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      
      <div class="mb-3">
        <label for="jabatan" class="form-label">Jabatan</label>
        <select class="form-select" name="jabatan">
            <option value="Guru" {{old('jabatan') == 'Guru' ? "selected" : ""}}>Guru</option>
            <option value="Kepala Sekolah" {{old('jabatan') == 'Kepala Sekolah' ? "selected" : ""}}>Kepala Sekolah</option>
            <option value="Staff" {{old('jabatan') == 'Staff' ? "selected" : ""}}>Staff</option>
          </select>      
        </div>

        {{-- upload file --}}
        <div class="mb-3">
          <label for="image" class="form-label">Foto</label>
          <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
          @error('image')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>

      <button type="submit" class="btn btn-primary">Tambah Staff</button>
    </form>
</div>

@endsection