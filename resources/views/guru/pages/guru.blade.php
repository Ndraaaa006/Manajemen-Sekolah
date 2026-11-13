@extends('guru.index')

@section('content')
<main class="main">
            <header class="page-header">
                <div>
                    <h1>Guru</h1>
                    <p class="subtitle">Kelola data Guru.</p>
                </div>
                <a href="{{route('guru.tambah')}}" class="btn btn-primary">
                    + Tambah Guru
                </a>
            </header>

            <section class="card">
                <div class="toolbar">
                    <input type="search" id="searchProduk" class="search" placeholder="Cari nama guru...">
                </div>

                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Guru</th>
                                <th>Gaji Guru</th>
                                <th>Mapel</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="daftarProduk">
                            @foreach($guru as $index => $g)
                            <tr data-nama="{{ strtolower($g->nama_guru) }}">
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $g->nama_guru }}</td>
                                <td>Rp {{ number_format($g->gaji_guru, 0, ',', '.') }}</td>
                                <td>{{ $g->mapel }}</td>
                                <td>
                                    <a class="btn btn-secondary" href="{{ route('guru.edit', $g->id) }}">Edit</a>
                                    <form action="{{ route('guru.destroy', $g->id) }}" method="POST" style="display:inline;">
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
