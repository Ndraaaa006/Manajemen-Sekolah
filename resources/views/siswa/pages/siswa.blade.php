@extends('siswa.index')

@section('content')
<main class="main">
            <header class="page-header">
                <div>
                    <h1>Siswa</h1>
                    <p class="subtitle">Kelola data Siswa.</p>
                </div>
                <a href="{{route('siswa.tambah')}}" class="btn btn-primary">
                    + Tambah Siswa
                </a>
            </header>

            <section class="card">
                <div class="toolbar">
                    <input type="search" id="searchSiswa" class="search" placeholder="Cari nama siswa...">
                </div>

                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Siswa</th>
                                <th>NIS</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="daftarSiswa">
                            @foreach($siswa as $index => $s)
                            <tr data-nama="{{ strtolower($s->nama_siswa) }}">
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $s->nama_siswa }}</td>
                                <td>{{ $s->nis }}</td>
                                <td>{{ $s->kelas }}</td>
                                <td>
                                    <a class="btn btn-secondary" href="{{ route('siswa.edit', $s->id) }}">Edit</a>
                                    <form action="{{ route('siswa.destroy', $s->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
@endsection