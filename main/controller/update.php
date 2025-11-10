<?php
    include '../server/db.php';

    // Verifique se os dados do formulário de edição foram enviados via método POST
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        try {
            // Consulta SQL para atualizar os dados do usuário com o ID fornecido
            $sql = "UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            // Redirecione de volta à página principal após a atualização
            header("Location: index.php");
            exit();
        } catch(PDOException $e) {
            echo "Erro ao executar a consulta: " . $e->getMessage();
        }
    } else {
        echo "Método não permitido para acessar esta página.";
        exit();
    }
?>
