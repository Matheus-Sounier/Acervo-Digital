<?php
    include '../server/db.php';

    // Verifique se o ID do usuário foi fornecido na URL
    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        try {
            // Consulta SQL para selecionar o usuário com o ID fornecido
            $sql = "SELECT * FROM usuarios WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            // Verifique se o usuário existe
            if ($stmt->rowCount() == 1) {
                $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            } else {
                echo "Usuário não encontrado.";
                exit();
            }
        } catch(PDOException $e) {
            echo "Erro ao executar a consulta: " . $e->getMessage();
        }
    } else {
        echo "ID do usuário não especificado.";
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuário</title>
</head>
<body>
    <h2>Editar Usuário</h2>
    <form class="formulario-editar" action="update.php" method="POST">
        <input class="hidden-editar" type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
        Nome: <input class="input-editar" type="text" name="nome" value="<?php echo $usuario['nome']; ?>"><br>
        Email: <input class="input-editar" type="email" name="email" value="<?php echo $usuario['email']; ?>"><br>
        Senha: <input class="input-editar" type="password" name="senha" value="<?php echo $usuario['senha']; ?>"><br>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>
