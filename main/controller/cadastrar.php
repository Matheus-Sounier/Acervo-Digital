<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/pages/adm.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    
</head>
<body>
    <div class="container-login">
        <div class="cabecalho-login">
            <h1>Bem-vindo</h1>
            <p>Digite as suas informações para ser cadastrado</p>
        </div>

        <form class="formulario-login" action="store.php" method="POST" id="formularioLogin">
            <div class="grupo-formulario">
                <label for="nome">Nome</label>
                <input type="name" id="nome_id" name="nome" placeholder="Digite o seu nome" required>
            </div>

            <div class="grupo-formulario">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="seu@email.com" required>
            </div>

            <div class="grupo-formulario">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
            </div>

            <div class="opcoes-formulario">
                <a href="./login.php" class="esqueceu-senha">Voltar para o login</a>
            </div>

            <button type="submit" class="btn-entrar">Cadastrar</button>
        </form>

    </div>

    <script type="module" src="../../js/pages/login.js"></script>
</body>
</html>