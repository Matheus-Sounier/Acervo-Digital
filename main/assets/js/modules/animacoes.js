export function inicializarAnimacoes() {
    // Observa tanto os cards de cole\u00e7\u00f5es quanto as se\u00e7\u00f5es marcadas com data-section
    const elementos = document.querySelectorAll('.card-colecao, .secao[data-section]');

    if (elementos.length === 0) {
        console.warn('\u26a0\ufe0f Nenhum elemento encontrado para animar');
        return;
    }

    // Configura\u00e7\u00e3o do observer
    const observerConfig = {
        threshold: 0.12,
        rootMargin: '0px 0px -10% 0px'
    };

    // Callback quando elemento entra na viewport
    const onIntersect = (entries, observer) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                // Pequeno delay escalonado para efeito cascata
                setTimeout(() => {
                    entry.target.classList.add('is-visible');
                }, index * 80);

                // Para de observar (anima\u00e7\u00e3o \u00fanica)
                observer.unobserve(entry.target);
            }
        });
    };

    // Cria e inicia o observer
    const observer = new IntersectionObserver(onIntersect, observerConfig);

    elementos.forEach(elemento => {
        observer.observe(elemento);
    });

    console.log('\u2705 Sistema de anima\u00e7\u00f5es inicializado para', elementos.length, 'elementos');
}