<aside class="sidebar">
            <div class="brand">Sekolahku.</div>
            <a href="#" class="nav-link">Beranda</a>
            <a href="index.html" class="nav-link active">Guru</a>
            <li class="sidebar-logout" style="margin-top: 50px;">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-logout" style="background: none; border: none; color: inherit; cursor: pointer; padding: 0;">Logout</button>
                </form>
            </li>
        </aside>
