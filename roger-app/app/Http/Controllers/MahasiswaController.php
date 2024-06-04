<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();// select * from fakultas
        // fakultas folder index dalemmnya
        return view ('mahasiswa.index')
        ->with('mahasiswa', $mahasiswa);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi= Prodi::all();
        return view ('mahasiswa.create')->with('prodi', $prodi);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;

        // return $request;
        $val = $request->validate([
            'nama' => "required",
            'npm' => "required|max:10",
            'tempat_lahir' => "required",
            'tanggal_lahir' => "required",
            'alamat'=>"required",
            'prodi_id' => "required",
            'url_foto'=> "required"
        ]);

        // simpan ke tabel fakultas
        Mahasiswa::create($val);

        // redirect ke halaman list fakultas
        return redirect()->route('mahasiswa.index')->with('Success',$val['nama'].'berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
