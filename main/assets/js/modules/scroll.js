export function inicializarSmoothScroll() {
    const links = document.querySelectorAll('a[href^="#"]');

    if (links.length === 0) {
        console.warn('⚠️ Nenhum link de âncora encontrado');
        return;
    }

    links.forEach(link => {
        link.addEventListener('click', (e) => {
            const href = link.getAttribute('href');
            
            // Ignora href="#"
            if (href === '#') return;

            e.preventDefault();
            
            const elemento = document.querySelector(href);
            
            if (elemento) {
                elemento.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });

                // Atualiza URL sem recarregar
                if (history.pushState) {
                    history.pushState(null, '', href);
                }
            }
        });
    });

    console.log('✅ Smooth scroll inicializado para', links.length, 'links');
}