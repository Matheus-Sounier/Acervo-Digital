import { inicializarCarrossel } from '../modules/carrossel.js';
import { inicializarAnimacoes } from '../modules/animacoes.js';
import { inicializarSmoothScroll } from '../modules/scroll.js';
import { inicializarBusca } from '../modules/busca.js';

// Script de inicialização específico para páginas de feiras
document.addEventListener('DOMContentLoaded', () => {
  try {
    if (typeof inicializarBusca === 'function') inicializarBusca();
    if (typeof inicializarCarrossel === 'function') inicializarCarrossel();
    if (typeof inicializarSmoothScroll === 'function') inicializarSmoothScroll();
    if (typeof inicializarAnimacoes === 'function') inicializarAnimacoes();

    console.log('✅ Scripts de "feiras" inicializados');
  } catch (err) {
    console.error('❌ Erro ao inicializar scripts de feiras', err);
  }
});
