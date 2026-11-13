@extends('guru.index')
@section('content')
    <main class="main">
        <header class="page-header">
            <div>
                <h1>Update Guru</h1>
                <p class="subtitle">Perbarui informasi guru Anda.</p>
            </div>
        </header>

        <section class="card form-card">
            <form id="formUpdate" action="{{ route('guru.update', $guru->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama_guru">
                        Nama Guru <span class="required">*</span>
                    </label>
                    <input type="text" id="nama_guru" name="nama_guru" value="{{ $guru->nama_guru }}" required>
                </div>

                <div class="form-group">
                    <label for="gaji_guru">
                        Gaji Guru (Rp) <span class="required">*</span>
                    </label>
                    <input type="number" id="gaji_guru" name="gaji_guru" min="0" step="1"
                        value="{{ $guru->gaji_guru }}" required>
                </div>

                <div class="form-group">
                    <label for="mapel">
                        Mapel <span class="required">*</span>
                    </label>
                    <select id="mapel" name="mapel" required>
                        <option value="Matematika" {{ $guru->mapel == 'Matematika' ? 'selected' : '' }}>Matematika</option>
                        <option value="RPL" {{ $guru->mapel == 'RPL' ? 'selected' : '' }}>RPL</option>
                        <option value="IPAS" {{ $guru->mapel == 'IPAS' ? 'selected' : '' }}>IPAS</option>
                        <option value="Agama" {{ $guru->mapel == 'Agama' ? 'selected' : '' }}>Agama</option>
                    </select>
                </div>

                <div class="form-actions">
                    <a href="{{ route('guru.table') }}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">
                        Update Guru
                    </button>
                </div>
            </form>
        </section>
    </main>
@endsection
