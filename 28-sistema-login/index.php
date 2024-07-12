<?php
/* Conexão com 'db_connect.php' */
require_once 'db_connect.php'; // --- require_once é para incluir o arquivo apenas uma vez.

/* Sessão */
session_start();

/* Botão de Entrar */
if(isset($_POST['btn-entrar'])):
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']); // --- mysqli_escape_string() = evita erros de SQLInjection
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    /* Verifica se os campos foram preenchidos */
    if(empty($login) or empty($senha)): // --- empty() = determina se um array é vazio. Se o '$login' ou '$senha' estiverem vazios.
        $erros[] = "<li>Preencha todos os campos.</li>";
    else:
        $sql = "SELECT login FROM usuarios WHERE login = '$login'"; // --- SELECT = seleciona; WHERE = onde; login = '$login' = o login digitado pelo usuário.
        $result = mysqli_query($connect, $sql); // --- mysqli_query() = executa uma consulta no BD; '$connect' = a conexão com o BD; '$sql' = a query a ser executada.

        /* Verifica se o login existe */
        if(mysqli_num_rows($result) > 0): // --- 'num_rows' = conta o número de linhas retornadas pelo comando SQL. Se o 'num_rows' for maior que '0', significa que o login existe.
            $senha = md5($senha); // --- md5() = criptografa a senha.
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'"; // --- verifica se o login e a senha batem
            $result = mysqli_query($connect, $sql);

            /* Verifica se a senha esta correta, se o login e a senha batem, significa que o usuário esta logado. */
            if(mysqli_num_rows($result) == 1): // --- Se o 'num_rows' for igual a '1', significa que o login e a senha batem.
                $dados = mysqli_fetch_array($result); // --- 'fetch_array' = retorna um array associativo com os dados do registro.
                mysqli_close($connect);
                $_SESSION['logado'] = true; // --- 'logado' = indica que o usuário está logado.
                $_SESSION['id_usuario'] = $dados['id'] ; // --- 'id_usuario' = o 'id' do usuário.
                header('Location: home.php'); // --- header() = redireciona o usuário para a 'home.php'.
            else:
                $erros[] = "<li>Usuário inexistente ou senha inválida.</li>";
            endif;

        else:
            $erros[] = "<li>Usuário não existe.</li>";
        endif;
    endif;
endif;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>28-Sistema de Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <h1>Login</h1>

    <!-- Exibir os erros -->
    <?php
    if(!empty($erros)):
        foreach($erros as $erro):
            echo $erro;
        endforeach;
    endif;
    ?>

    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="POST">
        Login: <input type="text" name="login"><br>
        Senha: <input type="password" name="senha"><br>
        <button type="submit" name="btn-entrar">Entrar</button>
    </form>
    
</body>
</html>