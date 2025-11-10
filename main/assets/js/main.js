import { inicializarBusca } from './modules/busca.js';
import { inicializarCarrossel } from './modules/carrossel.js';
import { inicializarSmoothScroll } from './modules/scroll.js';
import { inicializarAnimacoes } from './modules/animacoes.js';
import { inicializarProjetos } from './feira/projetos.js';


// Aguarda DOM carregar
document.addEventListener('DOMContentLoaded', () => {
    // console.log('%c🚀 MUSEU VIRTUAL', 'font-size: 20px; color: #00bcd4; font-weight: bold;');
    // console.log('Inicializando aplicação...');

    try {
        // Inicializa todos os módulos
        inicializarBusca();
        inicializarCarrossel();
        inicializarSmoothScroll();
        inicializarAnimacoes();
        inicializarProjetos();

        // console.log('%c✅ Aplicação inicializada com sucesso!', 'color: #00cd67; font-weight: bold;');
    } catch (error) {
        // console.error('❌ Erro ao inicializar:', error);
    }
});

// Log de performance (opcional)
window.addEventListener('load', () => {
    const performance = window.performance;
    if (performance && performance.timing) {
        const loadTime = performance.timing.loadEventEnd - performance.timing.navigationStart;
        // console.log(`⚡ Página carregada em ${loadTime}ms`);
    }
});