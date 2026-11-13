<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataPelajaran;

class GuruController extends Controller
{
    public function index()
    {
        $guru = MataPelajaran::latest()->get();
        return view('guru.pages.guru', compact('guru'));
    }

    public function create()
    {
        return view('guru.pages.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_guru' => 'required|string|max:100',
            'gaji_guru' => 'required|integer',
            'mapel' => 'required'
        ]);

        MataPelajaran::create([
            'nama_guru' => $request->nama_guru,
            'gaji_guru' => $request->gaji_guru,
            'mapel' => $request->mapel
        ]);

        return redirect()->route('guru.table')->with('success', 'Data guru berhasil ditambahkan');
    }

    public function edit($id)
    {
        $guru = MataPelajaran::find($id);
        return view('guru.pages.update', compact('guru'));
    }

    public function update(Request $request, MataPelajaran $guru)
    {
        $request->validate([
            'nama_guru' => 'required|string|max:100',
            'gaji_guru' => 'required|integer',
            'mapel' => 'required'
        ]);

        $guru->update([
            'nama_guru' => $request->nama_guru,
            'gaji_guru' => $request->gaji_guru,
            'mapel' => $request->mapel
        ]);

        return redirect()->route('guru.table')->with('success', 'Data guru berhasil diperbarui');
    }

    public function destroy(MataPelajaran $guru)
    {
        $guru->delete();
        return redirect()->route('guru.table')->with('success', 'Data guru berhasil dihapus');
    }
}
