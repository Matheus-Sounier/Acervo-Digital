export function inicializarMenuMobile() {
    const btnHamburger = document.querySelector('.btn-hamburger');
    const menuMobile = document.querySelector('.menu-mobile');

    if (!btnHamburger || !menuMobile) return;

    function abrirMenu() {
        menuMobile.classList.add('is-open');
        btnHamburger.classList.add('is-active');
        btnHamburger.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden';
    }

    function fecharMenu() {
        menuMobile.classList.remove('is-open');
        btnHamburger.classList.remove('is-active');
        btnHamburger.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
    }

    function toggleMenu() {
        if (menuMobile.classList.contains('is-open')) {
            fecharMenu();
        } else {
            abrirMenu();
        }
    }

    // Click no botão hamburger
    btnHamburger.addEventListener('click', toggleMenu);

    // Click nos links do menu mobile para fechar
    document.querySelectorAll('.mobile-link').forEach(link => {
        link.addEventListener('click', fecharMenu);
    });

    // Click fora do menu para fechar
    document.addEventListener('click', (e) => {
        if (!menuMobile.contains(e.target) && !btnHamburger.contains(e.target)) {
            if (menuMobile.classList.contains('is-open')) {
                fecharMenu();
            }
        }
    });

    // ESC para fechar
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && menuMobile.classList.contains('is-open')) {
            fecharMenu();
        }
    });

    console.log('✅ Menu Mobile inicializado');
}
