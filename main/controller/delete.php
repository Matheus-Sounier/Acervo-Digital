<?php
    include '../server/db.php';

    // Verifique se o ID do usuário foi fornecido na URL
    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        try {
            // Consulta SQL para excluir o usuário com o ID fornecido
            $sql = "DELETE FROM usuarios WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            // Redirecione de volta à página principal após a exclusão
            header("Location: index.php");
            exit();
        } catch(PDOException $e) {
            echo "Erro ao executar a consulta: " . $e->getMessage();
        }
    } else {
        echo "ID do usuário não especificado.";
        exit();
    }
?>
