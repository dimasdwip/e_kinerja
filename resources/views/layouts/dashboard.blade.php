<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>@yield('title', 'Dashboard')</title>

        <!-- Bootstrap (opsional) -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->

        <!-- Font Awesome untuk ikon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

        @stack('styles')
    </head>
    <body>

        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="logo">
                <i class="fas fa-cubes"></i>
                <span>AdminPanel</span>
            </div>
            <ul class="menu">
                @if(auth()->user()->role === 'superadmin')
                    <li><a href=""><i class="fas fa-tachometer-alt"></i> <span>Dashboard super</span></a></li>
                    <li><a href=""><i class="fas fa-users"></i> <span>Manajemen Pengguna super</span></a></li>
                    <li><a href=""><i class="fas fa-file-alt"></i> <span>Lihat Log Sistem</span></a></li>
                    <li><a href=""><i class="fas fa-cog"></i> <span>Pengaturan Global</span></a></li>

                @elseif(auth()->user()->role === 'admin')
                    <li><a href=""><i class="fas fa-tachometer-alt"></i> <span>Dashboard Admin</span></a></li>
                    <li><a href=""><i class="fas fa-box"></i> <span>Produk</span></a></li>
                    <li><a href=""><i class="fas fa-shopping-cart"></i> <span>Pesanan</span></a></li>
                    <li><a href=""><i class="fas fa-chart-line"></i> <span>Laporan</span></a></li>

                @elseif(auth()->user()->role === 'user')
                    <li><a href=""><i class="fas fa-tachometer-alt"></i> <span>Dashboard User</span></a></li>
                    <li><a href=""><i class="fas fa-user"></i> <span>Profil Saya</span></a></li>
                    <li><a href=""><i class="fas fa-tasks"></i> <span>Tugas Saya</span></a></li>
                    <li><a href=""><i class="fas fa-envelope"></i> <span>Pesan</span></a></li>

                @endif
            </ul>
        </aside>

        <!-- Navbar -->
        <nav class="navbar" id="navbar">
            <!-- Kiri: Tombol + Judul -->
            <div class="navbar-left">
                <button class="toggle-btn" id="toggleSidebar">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="navbar-title"><h1>E-KINERJA</h1></div>
            </div>

            <!-- Kanan: Notifikasi & Profil -->
            <div class="right-section">
                <!-- Notifikasi -->
                <div class="dropdown" id="notifDropdown">
                    <div class="icon">
                        <i class="fas fa-bell"></i>
                        <span class="badge">3</span>
                    </div>
                    <div class="dropdown-content">
                        <header>Notifikasi</header>
                        <a href="#"><i class="fas fa-user-plus" style="color: #3498db;"></i> Pengguna baru terdaftar</a>
                        <a href="#"><i class="fas fa-shopping-cart" style="color: #2ecc71;"></i> Pesanan baru masuk</a>
                        <a href="#"><i class="fas fa-exclamation-triangle" style="color: #f39c12;"></i> Server hampir penuh</a>
                        <a href="#"><i class="fas fa-comment-dots" style="color: #9b59b6;"></i> Komentar baru</a>
                        <a href="#"><i class="fas fa-times-circle" style="color: #e74c3c;"></i> Pembayaran gagal</a>
                        <footer><a href="#">Tandai semua sudah dibaca</a></footer>
                    </div>
                </div>

                <!-- Profil -->
                <div class="dropdown" id="profileDropdown">
                    <div class="icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="dropdown-content">
                        <a href="{{ route('profile') }}"><i class="fas fa-user-circle"></i> Profil Saya</a>
                        <a href="#"><i class="fas fa-cog"></i> Pengaturan</a>
                        <a href="#"><i class="fas fa-envelope"></i> Pesan</a>
                        <a href="#"><i class="fas fa-question-circle"></i> Bantuan</a>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i> Keluar
                        </a>

                        <!-- Form logout disembunyikan -->
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="main-content" id="mainContent">
            @yield('content')
        </main>

        <!-- Custom JS -->
        <script src="{{ asset('js/dashboard.js') }}"></script>

        @stack('scripts')
    </body>
</html>