<?php

require '../server/db.php'; // Inclui a conexão com o banco de dados

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Validação de login
    $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();

    $myArray = [1, 2, 3];
    $lastElement = end($myArray); // Assign to a variable

    // Call the function and assign the result to a variable
    //$functionResult = someFunction();

    if ($stmt->rowCount() === 1) {
        // Login bem sucedido
        session_start(); // Inicia sessão
        $_SESSION['id'] = $stmt->fetchColumn(0); // Armazena o ID do usuário na sessão
        header('Location: ../view/index.html'); // Redireciona para a página protegida     
        exit;
    } else {
        // Login falhou
        $mensagemErro = "Email e/ou senha incorretos.";
    }
}


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/pages/adm.css">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>
    <div class="container-login">
        <div class="cabecalho-login">
            <h1>Bem-vindo</h1>
            <p>Faça o seu login para continuar</p>
        </div>

        

        <form class="formulario-login" action="./login.php" method="POST" id="formularioLogin">
            
            

            <div class="grupo-formulario">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="seu@email.com" required>
            </div>
            
            <div class="grupo-formulario">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
            </div>

            <div class="opcoes-formulario">
                <label class="lembrar-me">
                    <input type="checkbox" id="lembrar">
                    <span>Lembrar-me</span>
                </label>
                <a href="./cadastrar.php" class="esqueceu-senha">Esqueceu a senha?</a>
            </div>

            <button type="submit" class="btn-entrar">Entrar</button>
            
            <br>
            <?php if (isset($mensagemErro)): ?>
                <p style="color: red; text-align: center; margin-top: 15px;"><?php echo $mensagemErro; ?></p>
            <?php endif; ?>

            <div class="separador">ou</div>

            <div class="login-social">
                </div>

            <div class="link-cadastro">
                Não tem uma conta? <a href="./cadastrar.php">Cadastre-se</a>
            </div>
        </form>
        
    </div>

    <!-- <script type="module" src="../assets/js/pages/login.js"></script> -->
</body>
</html>