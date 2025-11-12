// export function inicializarBusca() {
//     const botaoBusca = document.querySelector('.botao-busca');
//     const barraBusca = document.querySelector('.barra-busca');
//     const botaoFechar = document.querySelector('.botao-fechar');
//     const inputBusca = barraBusca?.querySelector('input');
//     const mensagensErro = document.getElementById('erro');
//     const cards = document.querySelectorAll('.card-colecao, .card');

//     if (!botaoBusca || !barraBusca || !botaoFechar || !inputBusca) {
//         console.warn('⚠️ Elementos de busca não encontrados');
//         return;
//     }

//     // Abrir busca
//     function abrirBusca() {
//         barraBusca.classList.add('is-active');
//         botaoBusca.classList.add('is-hidden');
        
//         setTimeout(() => {
//             inputBusca.focus();
//         }, 400);
//     }

//     // Fechar busca
//     function fecharBusca() {
//         barraBusca.classList.remove('is-active');
//         botaoBusca.classList.remove('is-hidden');
//         inputBusca.value = '';
//         esconderErro();

//         // Mostrar todos os cards ao fechar a busca
//         cards.forEach(card => {
//             card.style.display = '';
//         });
//     }

//     function mostrarErro(mensagem) {
//         if (mensagensErro) {
//             mensagensErro.textContent = mensagem;
//             mensagensErro.style.display = 'block';
//             inputBusca.classList.add('input-erro');
//         }

//     function esconderErro() {
//         if (mensagensErro) {
//             mensagem.textContent = mensagem;
//             mensagensErro.style.display = 'block';
//             inputBusca.classList.add('input-erro');
//         }
//     }

//     function esconderErro() {
//         if (mensagensErro) {
//             mensagensErro.textContent = '';
//             mensagensErro.style.display = 'none';
//             inputBusca.classList.remove('input-erro');
//         }
//     }

//     function aplicarFiltro(termoBusca) {
//         const termo = termoBusca.toLowerCase().trim();

//         cards.forEach(card => {
//             const nome = card.getAttribute('data-nome')?.toLowerCase() || '';
//             const ano = card.getAttribute('data-ano')?.toLowerCase() || '';
//             const tags = card.getAttribute('data-tags')?.toLowerCase() || '';

//             const corresponde = nome.includes(termo) || ano.includes(termo) || tags.includes(termo);

//             if (corresponde || termo === '') {
//                 card.style.display = '';
//                 resultadosEncontrados++;
//             } else {
//                 card.style.display = 'none';
//             }
//         });

//         if (termo !== '' && resultadosEncontrados === 0) {
//             mostrarErro('Nenhum resultado encontrado.');
//         } else {
//             esconderErro();
//         }
//     }

//     // Eventos
//     botaoBusca.addEventListener('click', abrirBusca);
//     botaoFechar.addEventListener('click', fecharBusca);

//     document.addEventListener('keydown', (e) => {
//         if (e.key === 'Escape' && barraBusca.classList.contains('is-active')) {
//             fecharBusca();
//         }
//     });

//     //Submit do formulário
//     barraBusca.addEventListener('submit', (e) => {
//         e.preventDefault();
//         aplicarFiltro(inputBusca.value);
//     });

//     inputBusca.addEventListener('input', (e) => {
//         aplicarFiltro(e.target.value);
//     });

//     console.log('✅ Sistema de busca inicializado');
// }


export function inicializarBusca() {
    const botaoBusca = document.querySelector('.botao-busca');
    const barraBusca = document.querySelector('.barra-busca');
    const botaoFechar = document.querySelector('.botao-fechar');
    const inputBusca = barraBusca?.querySelector('input');
    const mensagemErro = document.getElementById('erro');
    const cards = document.querySelectorAll('.card-colecao, .card');
    
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
        esconderErro();
        
        // Mostra todos os cards novamente ao fechar
        cards.forEach(card => {
            card.style.display = '';
        });
    }

    // Funções de erro
    function mostrarErro(mensagem) {
        if (mensagemErro) {
            mensagemErro.textContent = mensagem;
            mensagemErro.style.display = 'block';
            inputBusca.classList.add('input-erro');
        }
    }

    function esconderErro() {
        if (mensagemErro) {
            mensagemErro.style.display = 'none';
            inputBusca.classList.remove('input-erro');
        }
    }

    // Função de filtragem (igual à sua lógica)
    function aplicarFiltro(termoBusca) {
        const termo = termoBusca.toLowerCase().trim();
        let resultadosEncontrados = 0;

        cards.forEach(card => {
            const nome = card.getAttribute('data-nome')?.toLowerCase() || '';
            const ano = card.getAttribute('data-ano')?.toLowerCase() || '';
            const tags = card.getAttribute('data-tags')?.toLowerCase() || '';

            const corresponde = nome.includes(termo) || ano.includes(termo) || tags.includes(termo);

            if (corresponde || termo === '') {
                card.style.display = '';
                resultadosEncontrados++;
            } else {
                card.style.display = 'none';
            }
        });

        // Mostra erro apenas se digitou algo E não encontrou nada
        if (termo !== '' && resultadosEncontrados === 0) {
            mostrarErro('Nenhum projeto encontrado. Tente outro termo de busca.');
        } else {
            esconderErro();
        }
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
        aplicarFiltro(inputBusca.value);
    });

    // Filtra em tempo real enquanto digita
    inputBusca.addEventListener('input', (e) => {
        aplicarFiltro(e.target.value);
    });

    console.log('✅ Sistema de busca inicializado com validação');
}