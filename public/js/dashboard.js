document.addEventListener('DOMContentLoaded', function () {
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggleSidebar');
    const mainContent = document.getElementById('mainContent');
    const navbar = document.getElementById('navbar');
    const notifDropdown = document.getElementById('notifDropdown');
    const profileDropdown = document.getElementById('profileDropdown');

    // Toggle sidebar
    toggleBtn.addEventListener('click', () => {
        sidebar.classList.toggle('collapsed');
        mainContent.classList.toggle('collapsed');
        navbar.classList.toggle('collapsed');

        const icon = toggleBtn.querySelector('i');
        if (sidebar.classList.contains('collapsed')) {
            icon.classList.replace('fa-bars', 'fa-arrow-right');
        } else {
            icon.classList.replace('fa-arrow-right', 'fa-bars');
        }
    });

    // Dropdown Notifikasi
    document.querySelector('#notifDropdown .icon').addEventListener('click', (e) => {
        e.stopPropagation();
        notifDropdown.classList.toggle('active');
        profileDropdown.classList.remove('active');
    });

    // Dropdown Profil
    document.querySelector('#profileDropdown .icon').addEventListener('click', (e) => {
        e.stopPropagation();
        profileDropdown.classList.toggle('active');
        notifDropdown.classList.remove('active');
    });

    // Tutup dropdown saat klik di luar
    document.addEventListener('click', () => {
        notifDropdown.classList.remove('active');
        profileDropdown.classList.remove('active');
    });

    // Cegah penutupan dropdown saat klik di dalam
    [notifDropdown, profileDropdown].forEach(dropdown => {
        dropdown.addEventListener('click', e => e.stopPropagation());
    });
});