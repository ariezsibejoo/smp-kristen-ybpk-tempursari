@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Buat Pengguna baru</h1>
  </div>
<div class="col-lg-4">
    {{-- method post otomatis mengarah ke method store di controller resource --}}
    <form method="POST" action="/dashboard/user" class="mb-5">
        @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus required value="{{ old('name') }}">
        @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required value="{{ old('username') }}">
        @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email') }}">
        @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
        @enderror
      </div>
      
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required value="{{ old('password') }}">
        @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
        @enderror
      </div>

      <label for="is_admin" class="form-label">Pengguna / Administrator</label>
      <select class="form-select" name="is_admin">
        <option value="0">Pengguna</option>
        <option value="1">Administrator</option>
      </select>

      <button type="submit" class="btn btn-primary mt-3 mb-5">Tambah Pengguna</button>
    </form>
</div>

@endsection