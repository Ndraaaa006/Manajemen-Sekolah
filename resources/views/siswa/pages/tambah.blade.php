@extends('siswa.index')
@section('content')
        <main class="main">
            <header class="page-header">
                <div>
                    <h1>Tambah Siswa</h1>
                    <p class="subtitle">Masukkan informasi Siswa baru.</p>
                </div>
            </header>

            <section class="card form-card">
                <form id="formTambah" method="POST" action="{{ route('siswa.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="nama_siswa">
                            Nama Siswa <span class="required">*</span>
                        </label>
                        <input type="text" id="nama_siswa" name="nama_siswa" placeholder="Contoh: Budi" required>
                    </div>

                    <div class="form-group">
                        <label for="nis">
                            NIS <span class="required">*</span>
                        </label>
                        <input type="number" id="nis" name="nis" placeholder="Contoh: 12345" min="1"
                            step="1" required>
                    </div>

                    <div class="form-group">
                        <label for="kelas">
                            Kelas <span class="required">*</span>
                        </label>
                        <select id="kelas" name="kelas" required>
                            <option value="X RPL">X RPL</option>
                            <option value="XI RPL">XI RPL</option>
                            <option value="XII RPL">XII RPL</option>
                        </select>
                    </div>

                    <div class="form-actions">
                        <a href="{{ route('siswa.table') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">
                            Simpan
                        </button>
                    </div>
                </form>
            </section>
        </main>
@endsection