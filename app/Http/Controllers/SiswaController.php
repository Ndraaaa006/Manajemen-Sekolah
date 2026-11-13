<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::latest()->get();
        return view('siswa.pages.siswa', compact('siswa'));
    }

    public function create()
    {
        return view('siswa.pages.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_siswa' => 'required|string|max:100',
            'nis' => 'required|integer',
            'kelas' => 'required'
        ]);

        Siswa::create([
            'nama_siswa' => $request->nama_siswa,
            'nis' => $request->nis,
            'kelas' => $request->kelas
        ]);

        return redirect()->route('siswa.table')->with('success', 'Data siswa berhasil ditambahkan');
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa.pages.update', compact('siswa'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama_siswa' => 'required|string|max:100',
            'nis' => 'required|integer',
            'kelas' => 'required'
        ]);

        $siswa->update([
            'nama_siswa' => $request->nama_siswa,
            'nis' => $request->nis,
            'kelas' => $request->kelas
        ]);

        return redirect()->route('siswa.table')->with('success', 'Data siswa berhasil diperbarui');
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswa.table')->with('success', 'Data siswa berhasil dihapus');
    }
}
