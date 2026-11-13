@extends('siswa.index')
@section('content')
    <main class="main">
        <header class="page-header">
            <div>
                <h1>Update Siswa</h1>
                <p class="subtitle">Perbarui informasi siswa Anda.</p>
            </div>
        </header>

        <section class="card form-card">
            <form id="formUpdate" action="{{ route('siswa.update', $siswa->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama_siswa">
                        Nama Siswa <span class="required">*</span>
                    </label>
                    <input type="text" id="nama_siswa" name="nama_siswa" value="{{ $siswa->nama_siswa }}" required>
                </div>

                <div class="form-group">
                    <label for="nis">
                        NIS <span class="required">*</span>
                    </label>
                    <input type="number" id="nis" name="nis" min="0" step="1"
                        value="{{ $siswa->nis }}" required>
                </div>

                <div class="form-group">
                    <label for="kelas">
                        Kelas <span class="required">*</span>
                    </label>
                    <select id="kelas" name="kelas" required>
                        <option value="X RPL" {{ $siswa->kelas == 'X RPL' ? 'selected' : '' }}>X RPL</option>
                        <option value="XI RPL" {{ $siswa->kelas == 'XI RPL' ? 'selected' : '' }}>XI RPL</option>
                        <option value="XII RPL" {{ $siswa->kelas == 'XII RPL' ? 'selected' : '' }}>XII RPL</option>
                    </select>
                </div>

                <div class="form-actions">
                    <a href="{{ route('siswa.table') }}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">
                        Update Siswa
                    </button>
                </div>
            </form>
        </section>
    </main>
@endsection