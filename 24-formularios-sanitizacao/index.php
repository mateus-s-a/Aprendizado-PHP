<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>24-Formulário-Sanitização</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php
if(isset($_POST['enviar-formulario'])):
    $erros = array(); // Array de erros

    // Sanitizacão dos dados. Servem para limpar as variáveis e evitar ataques de injeção de código.
    // E depois, utilização do 'filter-var'
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS); // --- FILTER_SANITIZE_SPECIAL_CHARS = limpa os caracteres especiais, para caso o usuário tente injetar um código
    
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT); // --- FILTER_SANITIZE_NUMBER_INT = limpa apenas números
    if(!filter_var($idade, FILTER_VALIDATE_INT)): // --- filter_var() = filtra uma variável com uma especificação
        $erros[] = "Idade precisa ser um inteiro.";
    endif;

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); // --- FILTER_SANITIZE_EMAIL = limpa apenas o email
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
        $erros[] = "Email inválido.";
    endif;
    
    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL); // --- FILTER_SANITIZE_URL = limpa apenas URLs
    if(!filter_var($url, FILTER_VALIDATE_URL)):
        $erros[] = "URL inválida.";
    endif;


    if(!empty($erros)): // --- se existirem erros e exibi-los. empty() = determina se um array é vazio
        foreach($erros as $erro):
            echo "<li>$erro</li>";
        endforeach;
    else:
        echo "Dados enviados com sucesso.";
    endif;
endif;
?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> <!-- ' $_SERVER['PHP_SELF']' retorna o caminho do próprio script -->
    Nome: <input type="text" name="nome"><br>
        Idade: <input type="text" name="idade"><br>
        Email: <input type="email" name="email"><br>
        URL: <input type="text" name="url"><br>
        <button type="submit" name="enviar-formulario">Enviar</button><br>

    </form>
    
</body>
</html>