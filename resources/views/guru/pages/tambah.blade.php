@extends('guru.index')
@section('content')
        <main class="main">
            <header class="page-header">
                <div>
                    <h1>Tambah Guru</h1>
                    <p class="subtitle">Masukkan informasi Guru baru.</p>
                </div>
            </header>

            <section class="card form-card">
                <form id="formTambah" method="POST" action="{{ route('guru.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="nama_guru">
                            Nama Guru <span class="required">*</span>
                        </label>
                        <input type="text" id="nama_guru" name="nama_guru" placeholder="Contoh: Sulaiman" required>
                    </div>

                    <div class="form-group">
                        <label for="gaji_guru">
                            Gaji Guru (Rp) <span class="required">*</span>
                        </label>
                        <input type="number" id="gaji_guru" name="gaji_guru" placeholder="Contoh: 1500000" min="1000"
                            step="1" required>
                    </div>

                    <div class="form-group">
                        <label for="mapel_guru">
                            Mapel <span class="required">*</span>
                        </label>
                        
                        <select id="mapel_guru" name="mapel" required>
                            <option value="Matematika">Matematika</option>
                            <option value="RPL">RPL</option>
                            <option value="IPAS">IPAS</option>
                            <option value="Agama">Agama</option>
                        </select>
                    </div>

                    <div class="form-actions">
                        <a href="{{ route('guru.table') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">
                            Simpan
                        </button>
                    </div>
                </form>
            </section>
        </main>
@endsection
