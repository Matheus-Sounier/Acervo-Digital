export function inicializarBusca() {
    const botaoBusca = document.querySelector('.botao-busca');
    const barraBusca = document.querySelector('.barra-busca');
    const botaoFechar = document.querySelector('.botao-fechar');
    const inputBusca = barraBusca?.querySelector('input');

    if (!botaoBusca || !barraBusca || !botaoFechar || !inputBusca) {
        console.warn('⚠️ Elementos de busca não encontrados');
        return;
    }

    // Abrir busca
    function abrirBusca() {
        barraBusca.classList.add('is-active');
        botaoBusca.classList.add('is-hidden');
        
        setTimeout(() => {
            inputBusca.focus();
        }, 400);
    }

    // Fechar busca
    function fecharBusca() {
        barraBusca.classList.remove('is-active');
        botaoBusca.classList.remove('is-hidden');
        inputBusca.value = '';
    }

    // Processar busca
    function processarBusca(termo) {
        if (!termo.trim()) return;
        
        console.log(`🔍 Buscando por: "${termo}"`);
        alert(`Buscando por: "${termo}"`);
        // Aqui você implementaria a busca real
        // Exemplo: window.location.href = `/busca?q=${encodeURIComponent(termo)}`;
    }

    // Events
    botaoBusca.addEventListener('click', abrirBusca);
    botaoFechar.addEventListener('click', fecharBusca);

    // Fechar com ESC
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && barraBusca.classList.contains('is-active')) {
            fecharBusca();
        }
    });

    // Submit do formulário
    barraBusca.addEventListener('submit', (e) => {
        e.preventDefault();
        processarBusca(inputBusca.value);
    });

    console.log('✅ Sistema de busca inicializado');
}