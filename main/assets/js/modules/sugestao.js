// Renderiza todos os projetos quando a página carregar pela primeira vez
document.addEventListener('DOMContentLoaded', () => {
    renderizarProjetos(projetos);
});
// Nota: A função de submit do formulário de busca padrão do seu HTML (que recarrega a página) precisará ser prevenida.
document.querySelector('.barra-busca').addEventListener('submit', (e) => {
    e.preventDefault(); // Impede o comportamento padrão de recarregar a página ao submeter
});

document.addEventListener('DOMContentLoaded', () => {
    // Seleciona o input de busca no cabeçalho
    const inputBusca = document.querySelector('.barra-busca input[type="search"]');
    // Seleciona todos os cards
    const cards = document.querySelectorAll('.card-colecao, .card');
    // Pega o container principal para a busca (previne submit)
    const formBusca = document.querySelector('.barra-busca');

    if (!inputBusca || !cards.length || !formBusca) {
        console.error("Elementos de busca ou cards não encontrados!");
        return;
    }
    
    // Impede o formulário de recarregar a página
    formBusca.addEventListener('submit', (e) => e.preventDefault());

    // Função principal de filtragem
    function aplicarFiltro(termoBusca) {
        const termo = termoBusca.toLowerCase().trim();

        cards.forEach(card => {
            // Pega os dados dos atributos data-*
            const nome = card.getAttribute('data-nome').toLowerCase();
            const ano = card.getAttribute('data-ano').toLowerCase();
            const tags = card.getAttribute('data-tags').toLowerCase(); // String de tags

            // Verifica se o termo está em algum dos campos
            const corresponde = nome.includes(termo) || ano.includes(termo) || tags.includes(termo);

            // Esconde ou mostra o card
            if (corresponde || termo === '') {
                card.style.display = ''; // Volta ao display padrão (flex, block, etc.)
            } else {
                card.style.display = 'none'; // Esconde o card
            }
        });
    }

        // Adiciona o ouvinte de evento 'input' ao campo de busca
        inputBusca.addEventListener('input', (event) => {
            aplicarFiltro(event.target.value);
        });
    });