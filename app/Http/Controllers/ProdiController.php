<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $fakultas = Prodi::all();// select * from fakultas
        // fakultas folder index dalemmnya
        return view ('prodi.index') 
        ->with('prodi', $fakultas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fakultas = Fakultas::all();
        return view ('prodi.create')->with('fakultas', $fakultas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'nama' => "required|unique:prodis",
            'singkatan' => "required|max:2",
            'fakultas_id' => "required"

        ]);
        // simpan ke tabel fakultas
        Prodi::create($val);

        // redirect ke halaman list fakultas
        return redirect()->route('prodi.index')->with('Success',$val['nama'].' berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodi $prodi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        //
    }
}
