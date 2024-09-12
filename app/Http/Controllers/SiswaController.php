<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
   
    public function index()
    {
        $data = Siswa::all();
        return view('tampil', compact('data'));
    }

    public function create()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
        ]);
        // dd($data);
        Siswa::create($data);
        return redirect('siswa');
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
        //
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