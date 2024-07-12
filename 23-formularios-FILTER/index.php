<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>23-Formulário-FILTER</title>
</head>
<body>

<?php
if(isset($_POST['enviar-formulario'])):
    // echo "Enviou<br>";
    // var_dump($_POST);
    $erros = array(); // Array de erros

    // validação dos dados, parte de segurança dos dados
    if(!($idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT))): // --- FILTER_VALIDATE_INT = apenas números inteiros
        $erros[] = "Idade precisa ser um inteiro.";
    endif;

    if(!($email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL))): // --- FILTER_VALIDATE_EMAIL = validação de email
        $erros[] = "Email inválido.";
        var_dump(($email));
    endif;

    if(!($peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT))): // --- FILTER_VALIDATE_FLOAT = apenas números decimais
        $erros[] = "Peso precisa ser um float.";
    endif;

    if(!($ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP))): // --- FILTER_VALIDATE_IP = validação de IP
        $erros[] = "IP inválido.";
    endif;

    if(!($url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL))): // --- FILTER_VALIDATE_URL = validação de URL
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
        Idade: <input type="text" name="idade"><br>
        Email: <input type="email" name="email"><br>
        Peso: <input type="text" name="peso"><br>
        IP: <input type="text" name="ip"><br>
        URL: <input type="text" name="url"><br>
        <button type="submit" name="enviar-formulario">Enviar</button><br>

    </form>
    
</body>
</html>