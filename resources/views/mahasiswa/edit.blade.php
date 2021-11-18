@extends('layouts.index')

@section('content')
</br>
<form method="POST" action="{{ url('mahasiswa/' .$model->id) }}">
  @csrf
  <input type="hidden" name="_method" value="PATCH">
  <div class="mb-3">
    <label for="id" class="form-label">ID</label>
    <input type="text" class="form-control" id="id" name="id" value="{{ $model->id }}"></div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" value="{{ $model->nama }}">
  </div>
  <div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input type="text" class="form-control" id="nim" name="nim" value="{{ $model->nim }}">
  </div>
  <div class="mb-3">
    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
    <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{ $model->jenis_kelamin }}">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $model->alamat }}">
  </div>
  <div class="mb-3">
    <label for="kota" class="form-label">Kota</label>
    <input type="text" class="form-control" id="kota" name="kota" value="{{ $model->kota }}">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email" value="{{ $model->email }}">
  </div>
  <div class="mb-3">
  <label for="formFile" class="form-label">Foto</label>
  <input class="form-control" type="file" id="formFile" name="foto" value="{{ $model->foto }}">
</div>
  <button type="submit" class="btn btn-primary">Ubah</button>
  <a href="{{ url('mahasiswa') }}" type="button" class="btn btn-danger">Batal</a>
  
</form>
@endsection