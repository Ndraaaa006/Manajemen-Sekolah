<aside class="sidebar">
            <div class="brand">SekolahKu</div>
            <a href="#" class="nav-link">Beranda</a>
            {{-- <a href="{{ route('#') }}" class="nav-link">Pengumuman</a> --}}
            {{-- <a href="{{ route('#') }}" class="nav-link">Jadwal Pelajaran</a> --}}
            <a href="{{ route('siswa.table') }}" class="nav-link active">Data Siswa</a>

            <li class="sidebar-logout" style="margin-top: 50px;">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-logout" style="background: none; border: none; color: inherit; cursor: pointer; padding: 0;">Logout</button>
                </form>
            </li>
        </aside>
