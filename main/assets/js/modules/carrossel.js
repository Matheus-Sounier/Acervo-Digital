export function inicializarCarrossel() {
    const slides = document.querySelectorAll('.slide-carrossel');
    const botaoAnterior = document.querySelector('.botao-anterior');
    const botaoProximo = document.querySelector('.botao-proximo');
    const indicadores = document.querySelectorAll('.indicador');
    const container = document.querySelector('.carrossel');

    if (slides.length === 0 || !botaoAnterior || !botaoProximo) {
        console.warn('⚠️ Elementos do carrossel não encontrados');
        return;
    }

    let slideAtual = 0;
    let intervaloAutoPlay;

    // Mostrar slide específico
    function mostrarSlide(indice) {
        // Remove estado ativo de todos
        slides.forEach(slide => slide.classList.remove('is-active'));
        indicadores.forEach(ind => ind.classList.remove('is-active'));

        // Normaliza o índice (circular)
        slideAtual = ((indice % slides.length) + slides.length) % slides.length;

        // Ativa slide e indicador
        slides[slideAtual].classList.add('is-active');
        if (indicadores[slideAtual]) {
            indicadores[slideAtual].classList.add('is-active');
        }
    }

    // Navegação
    function proximoSlide() {
        mostrarSlide(slideAtual + 1);
    }

    function slideAnterior() {
        mostrarSlide(slideAtual - 1);
    }

    // Auto-play
    function iniciarAutoPlay() {
        intervaloAutoPlay = setInterval(proximoSlide, 5000);
    }

    function pararAutoPlay() {
        clearInterval(intervaloAutoPlay);
    }

    function resetarAutoPlay() {
        pararAutoPlay();
        iniciarAutoPlay();
    }

    // Events - Botões
    botaoProximo.addEventListener('click', () => {
        proximoSlide();
        resetarAutoPlay();
    });

    botaoAnterior.addEventListener('click', () => {
        slideAnterior();
        resetarAutoPlay();
    });

    // Events - Indicadores
    indicadores.forEach((indicador, indice) => {
        indicador.addEventListener('click', () => {
            mostrarSlide(indice);
            resetarAutoPlay();
        });
    });

    // Events - Pausa ao hover
    if (container) {
        container.addEventListener('mouseenter', pararAutoPlay);
        container.addEventListener('mouseleave', iniciarAutoPlay);
    }

    // Suporte a teclado
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            slideAnterior();
            resetarAutoPlay();
        } else if (e.key === 'ArrowRight') {
            proximoSlide();
            resetarAutoPlay();
        }
    });

    // Inicializa
    mostrarSlide(0);
    iniciarAutoPlay();

    // Cleanup quando sair da página
    window.addEventListener('beforeunload', pararAutoPlay);

    console.log('✅ Carrossel inicializado com', slides.length, 'slides');
}