<?php
    include '../server/db.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    try {
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();

        // Redirecione de volta à página principal após a atualização
        header("Location: ./login.php");
        exit();
    } catch(PDOException $e) {
        echo "Erro ao adicionar usuário: " . $e->getMessage();
    }
?>
