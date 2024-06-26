@extends('layout/aplikasi')

@section('konten')
<form method="POST" action="/siswa" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="nomor_induk" class="form-label">Nomor Induk Mahasiswa</label>
        <input type="text" class="form-control" name="nomor_induk" id="nomor_induk" value="{{Session::get('nomor_induk')}}">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" value="{{Session::get('nama')}}">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" id="alamat">{{Session::get('alama')}}</textarea>
    </div>
    <div class="mb-3">
        <label for="foto" class="form-label">foto</label>
        <input type="file" class="form-control" name="foto" id="foto">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>
@endsection