// ==== 1. LOGIKA: THEME TOGGLE ====
function setupThemeToggle() {
    const themeToggleButtons = document.querySelectorAll('#theme-toggle, #theme-toggle-mobile');
    const moonIcons = document.querySelectorAll('#theme-toggle-moon, #theme-toggle-moon-mobile');
    const sunIcons = document.querySelectorAll('#theme-toggle-sun, #theme-toggle-sun-mobile');

    if (themeToggleButtons.length === 0) {
        return; // Tombol tidak ditemukan, keluar dari fungsi
    }

    function updateIcons(isDarkMode) {
        moonIcons.forEach(icon => icon.classList.toggle('hidden', isDarkMode));
        sunIcons.forEach(icon => icon.classList.toggle('hidden', !isDarkMode));
    }

    // Perbarui ikon saat halaman dimuat berdasarkan tema saat ini
    updateIcons(document.documentElement.classList.contains('dark'));

    // Tambahkan event listener untuk setiap tombol toggle
    themeToggleButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const isDark = document.documentElement.classList.toggle('dark');
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
            updateIcons(isDark);
        });
    });
}

// ==== 2. LOGIKA: MOBILE MENU TOGGLE ====
function setupMobileMenuToggle() {
    const mobileMenuButton = document.getElementById('mobile-menu-button'); // ID baru
    const mobileMenu = document.getElementById('mobile-menu');

    if (!mobileMenuButton || !mobileMenu) {
        return; // Tombol atau menu tidak ditemukan, keluar
    }

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden'); // Toggle class hidden
    });
}

// ==== 3. LOGIKA: SMOOTH SCROLL & CLOSE MOBILE MENU ====
function setupSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
            
            // Tutup menu mobile jika terbuka setelah mengklik link
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
            }
        });
    });
}

// ==== 4. LOGIKA: ANIMASI PROGRESS BAR (Intersection Observer) ====
function setupSkillAnimation() {
    const skillItems = document.querySelectorAll('.skill-item');
    
    if (skillItems.length === 0) return;

    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.3 
    };

    const observerCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const bar = entry.target.querySelector('.skill-bar-fill');
                const level = bar.getAttribute('data-level');
                
                setTimeout(() => {
                    bar.style.width = level;
                }, 100); 

                observer.unobserve(entry.target); 
            }
        });
    };

    const skillObserver = new IntersectionObserver(observerCallback, observerOptions);
    skillItems.forEach(item => skillObserver.observe(item));
}

// ==== 5. LOGIKA UTAMA: DOMContentLoaded ====
document.addEventListener('DOMContentLoaded', () => {
    
    // Inisialisasi Animate On Scroll (AOS)
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        mirror: false
    });

    // Panggil semua fungsi setup
    setupThemeToggle();
    setupMobileMenuToggle(); // <-- Pastikan ini dipanggil
    setupSmoothScroll();
    setupSkillAnimation(); 
});