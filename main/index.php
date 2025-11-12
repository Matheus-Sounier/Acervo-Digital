<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Acervo Digital - Explore projetos inovadores e coleções digitais">
    <title>Acervo Digital FUCAPI</title>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- CSS Principal -->
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>

    <!-- ========== HEADER ========== -->
    <header>
        <div class="container-cabecalho">
            
            <!-- Logo (Esquerda) -->
            <a href="./index.php" class="logo" aria-label="Página inicial">
                <img src="./assets/img/Logos/logo_Fucapi.png" alt="Logo FUCAPI">
            </a>
            
            <!-- Container de Busca (Centro) -->
            <div class="container-busca">
                <!-- Botão que mostra inicialmente -->
                <button class="botao-busca" aria-label="Abrir busca">
                    <i class="fas fa-search"></i>
                    <!-- <span>Buscar projetos...</span> -->
                </button>
                
                <!-- Barra de busca (expansível) -->
                <form class="barra-busca" role="search">
                    <input 
                        type="search" 
                        placeholder="Buscar projetos por nome, categoria ou ano..." 
                        aria-label="Campo de busca"
                        autocomplete="off">
                    <button type="submit" aria-label="Pesquisar">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
                
                <!-- Botão fechar -->
                <button class="botao-fechar" type="button" aria-label="Fechar busca">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <!-- Menu de Navegação (Direita) -->
            <nav class="menu-navegacao" aria-label="Menu principal">
                <a href="./assets/pages/links/feiras-geral.html" class="link-navegacao">Projetos</a>
                <a href="./assets/pages/links/sobre.html" class="link-navegacao">Sobre</a>
            </nav>

            <a href="./controller/login.php" class="link-login">Área Restrita</a>
            
        </div>
    </header>

    <!-- ========== SEÇÃO HERO (CARROSSEL) ========== -->
    <section class="secao-hero" id="home">
        <!-- Container do Carrossel -->
        <div class="container-carrossel">
            <div class="carrossel">
            
                <!-- Slide 1 -->
                <div class="slide-carrossel is-active">
                    <img src="./assets/img/Carrosel/projeto1.JPG" alt="Feira">
                    <div class="overlay-slide">
                        <h2>Projeto em Destaque:<br>Fazenda do Futuro</h2>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="slide-carrossel">
                    <img src="./assets/img/Carrosel/xv.jpg" alt="Feira">
                    <div class="overlay-slide">
                        <h2>Projeto em Destaque:<br>Sistema Hidrotérmico</h2>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="slide-carrossel">
                    <img src="./assets/img/Carrosel/vi.JPG" alt="Projeto Trava Eletrônica">
                    <div class="overlay-slide">
                        <h2>Projeto em Destaque:<br>Trava Eletrônica</h2>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="slide-carrossel">
                    <img src="./assets/img/Carrosel/projeto2.jpg" alt="Projeto Sinalizador de LED">
                    <div class="overlay-slide">
                        <h2>Projeto em Destaque:<br>Sinalizador de LED</h2>
                    </div>
                </div>

                <!-- Botões de navegação -->
                <button class="botao-carrossel botao-anterior" type="button" aria-label="Slide anterior">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="botao-carrossel botao-proximo" type="button" aria-label="Próximo slide">
                    <i class="fas fa-chevron-right"></i>
                </button>

                <!-- Indicadores -->
                <div class="indicadores-carrossel" role="tablist">
                    <div class="indicador is-active" data-slide="0" role="tab" aria-label="Slide 1"></div>
                    <div class="indicador" data-slide="1" role="tab" aria-label="Slide 2"></div>
                    <div class="indicador" data-slide="2" role="tab" aria-label="Slide 3"></div>
                    <div class="indicador" data-slide="3" role="tab" aria-label="Slide 4"></div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========== SEÇÃO COLEÇÕES (PROJETOS) ========== -->
    <section class="secao-colecoes" id="projetos">
        <h2 class="titulo-secao">Continue explorando...</h2>

        <div class="grid-colecoes" id="container-projetos">
            
            <!-- Card 1 -->
            <article class="card-colecao" data-nome="XIII FEIRA TECNOLÓGICA DA FUCAPI" data-ano="2016" data-tags="XIII, FEIRA, TECNOLÓGICA, TECNOLOGICA, DA, FUCAPI, CRIATIVIDADE, INOVAÇÃO, SUPERANDO, DESAFIOS, 2016">
            <a href="./assets/pages/feiras/feira-2016.html">
                <img src="./assets/img/Cards/_MG_1760.JPG" alt="XIII FEIRA TECNOLÓGICA DA FUCAPI">
                <div class="conteudo-card">
                    <h3 class="titulo-card">XIII FEIRA TECNOLÓGICA DA FUCAPI</h3>
                    <p class="descricao-card">CRIATIVIDADE E INOVAÇÃO: SUPERANDO DESAFIOS</p>
                </div>
            </a>    
            </article>

            <!-- Card 2 -->
            <article class="card-colecao" data-nome="XIV FEIRA TECNOLÓGICA FUCAPI" data-ano="2017" data-tags="XIV, FEIRA, TECNOLÓGICA, TECNOLOGICA, FUCAPI, MATEMÁTICA, SUAS, SOLUÇÕES, PARA, PLANETA, 2017">
                <a href="./assets/pages/feiras/feira-2017.html">
                    <img src="./assets/img/Cards/_MG_1902.JPG" alt="XIV FEIRA TECNOLÓGICA DA FUCAPI">
                    <div class="conteudo-card">
                        <h3 class="titulo-card">XIV FEIRA TECNOLÓGICA DA FUCAPI</h3>
                        <p class="descricao-card">MATEMÁTICA E SUAS SOLUÇÕES PARA O PLANETA</p>
                    </div>
                </a>
            </article>

            <!-- Card 3 -->
            <article class="card-colecao" data-nome="VIII FEIRA TECNOLÓGICA FUCAPI" data-ano="2011" data-tags="VIII, FEIRA, TECNOLÓGICA, TECNOLOGICA, FUCAPI, CONSTRUINDO, CONHECIMENTO">
                <a href="./assets/pages/feiras/feira-2011.html">
                    <img src="./assets/img/Cards/_MG_1710.JPG" alt="VIII FEIRA TECNOLÓGICA FUCAPI">
                    <div class="conteudo-card">
                        <h3 class="titulo-card">VIII FEIRA TECNOLÓGICA FUCAPI</h3>
                        <p class="descricao-card">CONSTRUINDO O CONHECIMENTO</p>
                    </div>
                </a>
            </article>

            <!-- Card 4 -->
            <article class="card-colecao" data-nome="XVII FEIRA TECNOLÓGICA DA FUCAPI" data-ano="2022" data-tags="2022, XVII, FEIRA, TECNOLÓGICA, TECNOLOGICA, FUCAPI, 40, ANOS, INOVAÇÃO, ENSINO, AMAZÔNIA, AMAZONIA">
                <a href="./assets/pages/feiras/feira-2022.html">
                    <img src="./assets/img/Cards/_MG_1346.JPG" alt="Projeto Meio Ambiente">
                    <div class="conteudo-card">
                        <h3 class="titulo-card">XVII FEIRA TECNOLÓGICA DA FUCAPI</h3>
                        <p class="descricao-card">40 ANOS DE INOVAÇÃO TECNOLÓGICA E ENSINO NA AMAZÔNIA</p>
                    </div>
                </a>
            </article>

            <!-- Card 5 -->
            <article class="card-colecao" data-nome="XVIII FEIRA TECNOLÓGICA DA FUCAPI" data-ano="2023" data-tags="2023, XVIII, FEIRA, TECNOLÓGICA, TECNOLOGICA, FUCAPI, INCLUSÃO, INCLUSÃO, SOCIAL, TECNOLOGIA">
                <a href="./assets/pages/feiras/feira-2023.html">
                    <img src="./assets/img/Cards/_MG_1142.JPG" alt="XVIII FEIRA TECNOLÓGICA DA FUCAPI">
                    <div class="conteudo-card">
                        <h3 class="titulo-card">XVIII FEIRA TECNOLÓGICA DA FUCAPI</h3>
                        <p class="descricao-card">INCLUSÃO SOCIAL E TECNOLOGIA</p>
                    </div>
                </a>
            </article>

            <!-- Card 6 -->
            <article class="card-colecao" data-nome="XVI FEIRA TECNOLÓGICA DA FUCAPI" data-ano="2019" data-tags="2019, XVI, FEIRA, TECNOLÓGICA, TECNOLOGICA, FUCAPI, PROCESSOS, INDUSTRIAIS, TECNOLOGIAS">
                <a href="./assets/pages/feiras/feira-2019.html">
                    <img src="./assets/img/Cards/_MG_1611.JPG" alt="XVI FEIRA TECNOLÓGICA DA FUCAPI">
                    <div class="conteudo-card">
                        <h3 class="titulo-card">XVI FEIRA TECNOLÓGICA DA FUCAPI</h3>
                        <p class="descricao-card">PROCESSOS INDUSTRIAIS E TECNOLOGIAS</p>
                    </div>
                </a>
            </article>

        </div>
    </section>

    <!-- ========== FOOTER ========== -->
    <footer class="rodape">
        <div class="container-rodape">
            
            <!-- Coluna 1: Sobre o Museu -->
            <div class="coluna-rodape">
                <div class="logo-rodape">
                    <h3>ACERVO DIGITAL</h3>
                </div>
                <p class="descricao-rodape">
                    Explore a história e a cultura através de nossas coleções digitais. 
                    Uma experiência educativa e interativa para todos.
                </p>
                <div class="redes-sociais">
                    <a href="https://www.facebook.com/fucapioficial/?locale=pt_BR" target="_blank" rel="noopener noreferrer" aria-label="Facebook FUCAPI">
                        <img src="./assets/img/Logos/icons8-facebook-4.png" alt="Facebook">
                    </a>
                    <a href="https://x.com/FucapiOficial" target="_blank" rel="noopener noreferrer" aria-label="Twitter FUCAPI">
                        <img src="./assets/img/Logos/icons8-twitter-48.png" alt="Twitter">
                    </a>
                    <a href="https://www.instagram.com/fucapioficial/" target="_blank" rel="noopener noreferrer" aria-label="Instagram FUCAPI">
                        <img src="./assets/img/Logos/icons8-instagram-48.png" alt="Instagram">
                    </a>
                </div>
            </div>
            
            <!-- Coluna 2: Links Rápidos -->
            <div class="coluna-rodape">
                <h4 class="titulo-coluna">Links Rápidos</h4>
                <ul class="lista-links">
                    <li><a href="./assets/pages/links/feiras-geral.html">Projetos</a></li>
                    <li><a href="./assets/pages/links/sobre.html">Sobre Nós</a></li>
                    <li><a href="#eventos">Eventos</a></li>
                </ul>
            </div>
            
            <!-- Coluna 4: Contato -->
            <div class="coluna-rodape">
                <h4 class="titulo-coluna">Contato</h4>
                <ul class="lista-contato">
                    <li>
                        <i class="fas fa-phone"></i>
                        <span>(92) 99972-0191</span>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <span>fucapi@fucapi.br</span>
                    </li>
                </ul>
            </div>
            
        </div>
        
        <!-- Barra inferior do rodapé -->
        <div class="rodape-inferior">
            <p>&copy; 2025 Acervo Digital. Todos os direitos reservados.</p>
            <div class="links-legais">
                <a href="#privacidade">Política de Privacidade</a>
                <span>|</span>
                <a href="#termos">Termos de Uso</a>
                <span>|</span>
                <a href="#cookies">Cookies</a>
            </div>
        </div>
    </footer>

    <!-- JavaScript Principal (ES6 Modules) -->
    <script type="module" src="./assets/js/main.js"></script>
    <script type="module" src="./assets/js/modules/sugestao.js"></script>
</body>
</html>