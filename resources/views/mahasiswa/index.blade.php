@extends('layouts.index')

@section('content')
</br>
<blockquote class="blockquote">
          <h4>Laravel Create, Read, Update, dan Delete.</h4>
        </blockquote>
        <figcaption class="blockquote-footer">
          Oleh <cite title="Source Title">R.Gading Utama A.P (20051214050)</cite>
        </figcaption>
<a href="{{ url('mahasiswa/create') }}" type="button" class="btn btn-primary">Tambah Data</a>
</br>
</br>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Alamat</th>
      <th scope="col">Kota</th>
      <th scope="col">Email</th>
      <th scope="col">Foto</th>
      <th colspan="2">Aksi</th>
    </tr>
    @foreach ($datas as $key=>$value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->nim }}</td>
            <td>{{ $value->jenis_kelamin }}</td>
            <td>{{ $value->alamat }}</td>
            <td>{{ $value->kota }}</td>
            <td>{{ $value->email }}</td>
            <td> Tidak ada foto.</td>
            <td><a class="btn btn-success" href="{{ url('mahasiswa/'.$value->id.'/edit') }}">Ubah</a></td>
            <td>
              <form action="{{ url('mahasiswa/'.$value->id) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus data ini?')">Hapus</button></td>
            </form>
            </td>
        </tr>
    @endforeach
  </thead>
</table>
@endsection