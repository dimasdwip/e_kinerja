@extends('layouts.dashboard')

@section('title', 'Daftar Laporan')

@section('content')
<!-- Page Header -->
<div class="welcome-section fade-in">
    <h1 class="welcome-title">Daftar Laporan</h1>
    <p class="welcome-subtitle">Kelola dan pantau laporan dari semua tim.</p>
</div>

<!-- Action & Search Bar -->
<div class="action-bar" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem; flex-wrap: wrap; gap: 1rem;">
    <div class="search-box" style="position: relative;">
        <input type="text" placeholder="Cari laporan..." class="search-input" id="searchInput" style="padding: 0.5rem 0.75rem 0.5rem 2.5rem; border: 1px solid var(--border-color); border-radius: 0.5rem; width: 300px; background: var(--bg-secondary); color: var(--text-primary);">
        <svg class="search-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="position: absolute; left: 0.75rem; top: 50%; transform: translateY(-50%); color: var(--text-secondary); width: 1rem; height: 1rem;">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
    </div>

    <!-- Tombol Tambah Laporan (Sudah Diperbaiki) -->
    <button class="btn add-report-btn">
        <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width: 1rem; height: 1rem;">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
        Tambah Laporan
    </button>
</div>

<!-- Reports Grouped by Team -->
<div class="team-reports fade-in">
    <!-- Tim Marketing -->
    <div class="card team-card" style="margin-bottom: 1.5rem;">
        <div class="team-header" style="display: flex; justify-content: space-between; align-items: center; cursor: pointer;" onclick="toggleTeam('marketing')">
            <h3 style="font-size: 1.125rem; font-weight: 600; color: var(--text-primary);">Tim Marketing</h3>
            <span id="icon-marketing" style="transition: transform 0.3s;">▼</span>
        </div>
        <div id="marketing" class="team-body" style="margin-top: 1rem; display: block;">
            <table style="width: 100%; border-collapse: collapse; font-size: 0.875rem;">
                <thead>
                    <tr style="background: var(--hover-color);">
                        <th style="padding: 1rem; text-align: left; color: var(--text-secondary); font-weight: 600;">Judul</th>
                        <th style="padding: 1rem; text-align: left; color: var(--text-secondary); font-weight: 600;">Tanggal</th>
                        <th style="padding: 1rem; text-align: left; color: var(--text-secondary); font-weight: 600;">Status</th>
                        <th style="padding: 1rem; text-align: right; color: var(--text-secondary); font-weight: 600;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid var(--border-color);">
                        <td style="padding: 1rem;">
                            <strong style="color: var(--text-primary);">Kampanye Q4 2023</strong>
                        </td>
                        <td style="padding: 1rem; color: var(--text-primary);">15 Okt 2023</td>
                        <td style="padding: 1rem;">
                            <span style="padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem; font-weight: 500; background: #dcfce7; color: #16a34a;">Selesai</span>
                        </td>
                        <td style="padding: 1rem; text-align: right;">
                            <a href="#" style="color: var(--accent-color); margin-left: 1rem; text-decoration: none;">Lihat</a>
                            <a href="#" style="color: #3b82f6; margin-left: 1rem; text-decoration: none;">Edit</a>
                            <a href="#" style="color: #ef4444; margin-left: 1rem; text-decoration: none;">Hapus</a>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--border-color);">
                        <td style="padding: 1rem;">
                            <strong style="color: var(--text-primary);">Analisis Media Sosial</strong>
                        </td>
                        <td style="padding: 1rem; color: var(--text-primary);">10 Okt 2023</td>
                        <td style="padding: 1rem;">
                            <span style="padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem; font-weight: 500; background: #fef3c7; color: #d97706;">Proses</span>
                        </td>
                        <td style="padding: 1rem; text-align: right;">
                            <a href="#" style="color: var(--accent-color); margin-left: 1rem; text-decoration: none;">Lihat</a>
                            <a href="#" style="color: #3b82f6; margin-left: 1rem; text-decoration: none;">Edit</a>
                            <a href="#" style="color: #ef4444; margin-left: 1rem; text-decoration: none;">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Tim IT -->
    <div class="card team-card" style="margin-bottom: 1.5rem;">
        <div class="team-header" style="display: flex; justify-content: space-between; align-items: center; cursor: pointer;" onclick="toggleTeam('it')">
            <h3 style="font-size: 1.125rem; font-weight: 600; color: var(--text-primary);">Tim IT</h3>
            <span id="icon-it" style="transition: transform 0.3s;">▼</span>
        </div>
        <div id="it" class="team-body" style="margin-top: 1rem; display: block;">
            <table style="width: 100%; border-collapse: collapse; font-size: 0.875rem;">
                <thead>
                    <tr style="background: var(--hover-color);">
                        <th style="padding: 1rem; text-align: left; color: var(--text-secondary); font-weight: 600;">Judul</th>
                        <th style="padding: 1rem; text-align: left; color: var(--text-secondary); font-weight: 600;">Tanggal</th>
                        <th style="padding: 1rem; text-align: left; color: var(--text-secondary); font-weight: 600;">Status</th>
                        <th style="padding: 1rem; text-align: right; color: var(--text-secondary); font-weight: 600;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid var(--border-color);">
                        <td style="padding: 1rem;">
                            <strong style="color: var(--text-primary);">Pembaruan Keamanan Sistem</strong>
                        </td>
                        <td style="padding: 1rem; color: var(--text-primary);">14 Okt 2023</td>
                        <td style="padding: 1rem;">
                            <span style="padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem; font-weight: 500; background: #dcfce7; color: #16a34a;">Selesai</span>
                        </td>
                        <td style="padding: 1rem; text-align: right;">
                            <a href="#" style="color: var(--accent-color); margin-left: 1rem; text-decoration: none;">Lihat</a>
                            <a href="#" style="color: #3b82f6; margin-left: 1rem; text-decoration: none;">Edit</a>
                            <a href="#" style="color: #ef4444; margin-left: 1rem; text-decoration: none;">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Tim Keuangan -->
    <div class="card team-card" style="margin-bottom: 1.5rem;">
        <div class="team-header" style="display: flex; justify-content: space-between; align-items: center; cursor: pointer;" onclick="toggleTeam('finance')">
            <h3 style="font-size: 1.125rem; font-weight: 600; color: var(--text-primary);">Tim Keuangan</h3>
            <span id="icon-finance" style="transition: transform 0.3s;">▼</span>
        </div>
        <div id="finance" class="team-body" style="margin-top: 1rem; display: block;">
            <table style="width: 100%; border-collapse: collapse; font-size: 0.875rem;">
                <thead>
                    <tr style="background: var(--hover-color);">
                        <th style="padding: 1rem; text-align: left; color: var(--text-secondary); font-weight: 600;">Judul</th>
                        <th style="padding: 1rem; text-align: left; color: var(--text-secondary); font-weight: 600;">Tanggal</th>
                        <th style="padding: 1rem; text-align: left; color: var(--text-secondary); font-weight: 600;">Status</th>
                        <th style="padding: 1rem; text-align: right; color: var(--text-secondary); font-weight: 600;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid var(--border-color);">
                        <td style="padding: 1rem;">
                            <strong style="color: var(--text-primary);">Laporan Keuangan September</strong>
                        </td>
                        <td style="padding: 1rem; color: var(--text-primary);">10 Okt 2023</td>
                        <td style="padding: 1rem;">
                            <span style="padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem; font-weight: 500; background: #fee2e2; color: #dc2626;">Pending</span>
                        </td>
                        <td style="padding: 1rem; text-align: right;">
                            <a href="#" style="color: var(--accent-color); margin-left: 1rem; text-decoration: none;">Lihat</a>
                            <a href="#" style="color: #3b82f6; margin-left: 1rem; text-decoration: none;">Edit</a>
                            <a href="#" style="color: #ef4444; margin-left: 1rem; text-decoration: none;">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Toggle collapse/expand per tim
    function toggleTeam(teamId) {
        const body = document.getElementById(teamId);
        const icon = document.getElementById(`icon-${teamId}`);
        if (body.style.display === 'none') {
            body.style.display = 'block';
            icon.textContent = '▼';
        } else {
            body.style.display = 'none';
            icon.textContent = '▶';
        }
    }

    // Pencarian global di semua tim
    document.getElementById('searchInput').addEventListener('input', function(e) {
        const term = e.target.value.toLowerCase();
        document.querySelectorAll('.team-body tbody tr').forEach(tr => {
            const text = tr.textContent.toLowerCase();
            tr.style.display = text.includes(term) ? '' : 'none';
        });
    });

    // Animasi fade-in
    document.querySelectorAll('.fade-in').forEach((el, index) => {
        setTimeout(() => {
            el.style.transition = 'all 0.5s ease';
            el.style.opacity = 1;
            el.style.transform = 'translateY(0)';
        }, index * 100);
    });
</script>
@endpush