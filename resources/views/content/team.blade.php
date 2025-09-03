@extends('layouts.dashboard')

@section('title', 'Manajemen Tim')

@section('content')
<!-- Page Header -->
<div class="welcome-section fade-in">
    <h1 class="welcome-title">Manajemen Tim</h1>
    <p class="welcome-subtitle">Kelola struktur tim dan informasi anggota.</p>
</div>

<!-- Search Bar -->
<div class="search-box" style="position: relative; margin-bottom: 1.5rem; max-width: 300px;">
    <input type="text" placeholder="Cari anggota..." class="search-input" id="searchMember" style="padding: 0.5rem 0.75rem 0.5rem 2.5rem; border: 1px solid var(--border-color); border-radius: 0.5rem; width: 100%; background: var(--bg-secondary); color: var(--text-primary);">
    <svg class="search-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="position: absolute; left: 0.75rem; top: 50%; transform: translateY(-50%); color: var(--text-secondary); width: 1rem; height: 1rem;">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
    </svg>
</div>

<!-- Teams List -->
<div class="team-list fade-in">
    <!-- Tim Marketing -->
    <div class="card team-card" style="margin-bottom: 1.5rem;">
        <div class="team-header" style="display: flex; justify-content: space-between; align-items: center; cursor: pointer;" onclick="toggleTeam('marketing')">
            <h3 style="font-size: 1.125rem; font-weight: 600; color: var(--text-primary);">Tim Marketing</h3>
            <span id="icon-marketing" style="transition: transform 0.3s;">▼</span>
        </div>
        <div id="marketing" class="team-body" style="margin-top: 1rem;">
            <div class="members-list" style="display: flex; flex-direction: column; gap: 1rem;">
                <div class="member-item" style="display: flex; align-items: center; gap: 1rem; padding: 1rem; border-radius: 0.5rem; border: 1px solid var(--border-color); background: var(--bg-secondary);">
                    <div style="width: 2.5rem; height: 2.5rem; background: #4556ca; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600;">AS</div>
                    <div style="flex: 1;">
                        <div style="font-weight: 600; color: var(--text-primary);">Ade Surya</div>
                        <div style="font-size: 0.875rem; color: var(--text-secondary);">Koordinator</div>
                    </div>
                    <div style="display: flex; gap: 0.5rem;">
                        <button class="task-complete-btn"><i class="fas fa-pen"></i></button>
                        <button class="task-complete-btn"><i class="fas fa-trash"></i></button>
                    </div>
                </div>
                <div class="member-item" style="display: flex; align-items: center; gap: 1rem; padding: 1rem; border-radius: 0.5rem; border: 1px solid var(--border-color); background: var(--bg-secondary);">
                    <div style="width: 2.5rem; height: 2.5rem; background: #a5b4fc; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #4556ca; font-weight: 600;">DI</div>
                    <div style="flex: 1;">
                        <div style="font-weight: 600; color: var(--text-primary);">Dina Indriani</div>
                        <div style="font-size: 0.875rem; color: var(--text-secondary);">Desainer Grafis</div>
                    </div>
                    <div style="display: flex; gap: 0.5rem;">
                        <button class="task-complete-btn"><i class="fas fa-pen"></i></button>
                        <button class="task-complete-btn"><i class="fas fa-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tim IT -->
    <div class="card team-card" style="margin-bottom: 1.5rem;">
        <div class="team-header" style="display: flex; justify-content: space-between; align-items: center; cursor: pointer;" onclick="toggleTeam('it')">
            <h3 style="font-size: 1.125rem; font-weight: 600; color: var(--text-primary);">Tim IT</h3>
            <span id="icon-it" style="transition: transform 0.3s;">▼</span>
        </div>
        <div id="it" class="team-body" style="margin-top: 1rem;">
            <div class="members-list" style="display: flex; flex-direction: column; gap: 1rem;">
                <div class="member-item" style="display: flex; align-items: center; gap: 1rem; padding: 1rem; border-radius: 0.5rem; border: 1px solid var(--border-color); background: var(--bg-secondary);">
                    <div style="width: 2.5rem; height: 2.5rem; background: #4556ca; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600;">BR</div>
                    <div style="flex: 1;">
                        <div style="font-weight: 600; color: var(--text-primary);">Budi Raharjo</div>
                        <div style="font-size: 0.875rem; color: var(--text-secondary);">Backend Developer</div>
                    </div>
                    <div style="display: flex; gap: 0.5rem;">
                        <button class="task-complete-btn"><i class="fas fa-pen"></i></button>
                        <button class="task-complete-btn"><i class="fas fa-trash"></i></button>
                    </div>
                </div>
                <div class="member-item" style="display: flex; align-items: center; gap: 1rem; padding: 1rem; border-radius: 0.5rem; border: 1px solid var(--border-color); background: var(--bg-secondary);">
                    <div style="width: 2.5rem; height: 2.5rem; background: #f59e0b; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600;">TS</div>
                    <div style="flex: 1;">
                        <div style="font-weight: 600; color: var(--text-primary);">Tia Sutisna</div>
                        <div style="font-size: 0.875rem; color: var(--text-secondary);">Frontend Developer</div>
                    </div>
                    <div style="display: flex; gap: 0.5rem;">
                        <button class="task-complete-btn"><i class="fas fa-pen"></i></button>
                        <button class="task-complete-btn"><i class="fas fa-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tim Keuangan -->
    <div class="card team-card" style="margin-bottom: 1.5rem;">
        <div class="team-header" style="display: flex; justify-content: space-between; align-items: center; cursor: pointer;" onclick="toggleTeam('finance')">
            <h3 style="font-size: 1.125rem; font-weight: 600; color: var(--text-primary);">Tim Keuangan</h3>
            <span id="icon-finance" style="transition: transform 0.3s;">▼</span>
        </div>
        <div id="finance" class="team-body" style="margin-top: 1rem;">
            <div class="members-list" style="display: flex; flex-direction: column; gap: 1rem;">
                <div class="member-item" style="display: flex; align-items: center; gap: 1rem; padding: 1rem; border-radius: 0.5rem; border: 1px solid var(--border-color); background: var(--bg-secondary);">
                    <div style="width: 2.5rem; height: 2.5rem; background: #ef4444; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600;">RN</div>
                    <div style="flex: 1;">
                        <div style="font-weight: 600; color: var(--text-primary);">Rina Novita</div>
                        <div style="font-size: 0.875rem; color: var(--text-secondary);">Accountant</div>
                    </div>
                    <div style="display: flex; gap: 0.5rem;">
                        <button class="task-complete-btn"><i class="fas fa-pen"></i></button>
                        <button class="task-complete-btn"><i class="fas fa-trash"></i></button>
                    </div>
                </div>
            </div>
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

    // Pencarian anggota di semua tim
    document.getElementById('searchMember').addEventListener('input', function(e) {
        const term = e.target.value.toLowerCase();
        document.querySelectorAll('.member-item').forEach(item => {
            const text = item.textContent.toLowerCase();
            item.style.display = text.includes(term) ? 'flex' : 'none';
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