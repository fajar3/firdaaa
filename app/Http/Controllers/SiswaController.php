<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class SiswaController extends Controller
{
    public function index()
    {
        $data = siswa::orderBy('nomor_induk', 'asc')->paginate(5);
        return view('siswa/index')->with('data', $data);
    }

    public function create()
    {
        return view('siswa/create');
    }

    public function store(Request $request)
    {
        Session::flash('nomor_induk', $request->nomor_induk);
        Session::flash('nama', $request->nama);
        Session::flash('alamat', $request->alamat);

        $request->validate([
            'nomor_induk' => 'required|numeric|digits_between:1,20', // Sesuaikan digits_between dengan panjang maksimum nomor_induk
            'nama' => 'required',
            'alamat' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png,gif'
        ], [
            'nomor_induk.required' => 'nomor induk wajib di isi',
            'nomor_induk.numeric' => 'nomor induk wajib di isi angka',
            'nama.required' => 'nama wajib di isi',
            'alamat.required' => 'alamat wajid di isi',
            'foto.required' => 'silahkan masukkan foto',
            'foto.mimes' => 'foto hanya boleh di isi dengan format jpg,jpeg,png,gif'
        ]);

        $foto_file = $request->file('foto');
        $foto_ektensi = $foto_file->extension();
        $foto_nama = date('ymdhis') . "." . $foto_ektensi;
        $foto_file->move(public_path('foto'), $foto_nama);

        $data = [
            'nomor_induk' => $request->input('nomor_induk'),
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'foto' => $foto_nama
        ];

        siswa::create($data);
        return redirect('siswa')->with('success', 'berhasil memasukkan data');
    }

    public function show(string $id)
    {
        $data = siswa::where('nomor_induk', $id)->first();
        return view('siswa/show')->with('data', $data);
    }

    public function edit(string $id)
    {
        $data = siswa::where('nomor_induk', $id)->first();
        return view('siswa/edit')->with('data', $data);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required'
        ], [
            'nama.required' => 'nama wajib di isi',
            'alamat.required' => 'alamat wajid di isi'
        ]);

        $data = [
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat')
        ];

        if ($request->hasFile('foto')) {
            $request->validate([
                'foto' => 'required|mimes:jpg,jpeg,png,gif'
            ], [
                'foto.mimes' => 'foto hanya boleh di isi dengan format jpg,jpeg,png,gif'
            ]);

            $foto_file = $request->file('foto');
            $foto_ektensi = $foto_file->extension();
            $foto_nama = date('ymdhis') . "." . $foto_ektensi;
            $foto_file->move(public_path('foto'), $foto_nama);

            $data_foto = siswa::where('nomor_induk', $id)->first();
            File::delete(public_path('foto'). '/' . $data_foto->foto);

            $data['foto'] = $foto_nama;
        }

        siswa::where('nomor_induk', $id)->update($data);
        return redirect('/siswa')->with('success', 'berhasil melakukan update data');
    }

    public function destroy(string $id)
    {
        $data = siswa::where('nomor_induk', $id)->first();
        File::delete(public_path('foto'). '/' . $data->foto);

        siswa::where('nomor_induk', $id)->delete();
        return redirect('/siswa')->with('success', 'berhasil hapus data');
    }
}
