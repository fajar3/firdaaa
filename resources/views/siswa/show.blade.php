@extends('layout/aplikasi')

@section('konten')
<div>
    <a href='/siswa' class="btn btn-seconday">Kembali</a>
    <h1> {{ $data->nama }} </h1>
    <p>
        <b>Nomor Induk Mahasiswa</b> {{ $data->nomor_induk}}
    </p>
    <p>
        <b>Alamat</b> {{ $data->alamat}}
    </p>
</div>
@endsection