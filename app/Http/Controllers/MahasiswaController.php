<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['dataMahasiswa'] = mahasiswa::all();
		return view('mahasiswa.mahasiswa.index',$data);
        // return view('mahasiswa.layout.main');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data['nama_mahasiswa'] = $request->nama_mahasiswa;
        $data['nim'] = $request->nim;
        $data['email'] = $request->email;
        $data['jurusan'] = $request->jurusan;
        $data['alamat'] = $request->alamat;

        mahasiswa::create($data);
        return redirect()->route('mahasiswa.index')->with('success','Penambahan Data Berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['dataMahasiswa'] = User::findOrFail($id);
        return view('mahasiswa.mahasiswa.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
