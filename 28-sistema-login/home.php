<?php
/* Conexão */
require_once 'db_connect.php';

/* Sessão */
session_start();

/* Dados */
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'"; // --- essa instrução SQL seleciona o 'id' do usuário que estiver logado.
$result = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($result);
mysqli_close($connect); // --- fecha a conexão com o BD.

/* Verificação */
if(!isset($_SESSION['logado'])):
    header('Location: index.php');
endif;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home aula 28</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h1>Logado com sucesso!</h1>
    <p>Olá <?php echo $dados['nome']; ?></p>

    <a href="logout.php">Sair</a>
</body>
</html>