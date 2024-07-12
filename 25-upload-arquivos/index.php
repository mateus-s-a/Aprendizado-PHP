<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>25-Upload de Arquivos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php
if(isset($_POST['enviar-formulario'])):
    $formatosPermitidos = array('png', 'jpg', 'jpeg', 'gif');
    $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

    if(in_array($extensao, $formatosPermitidos)):
        $pasta = "arquivos/";
        $temporario = $_FILES['arquivo']['tmp_name'];
        $novoNome = uniqid().'.'.$extensao;

        if(move_uploaded_file($temporario, $pasta.$novoNome)):
            echo "<img src='$pasta$novoNome' style='width: 300px'; height='300px'>";
            echo "Upload efetuado com sucesso!";
        else:
            echo "Erro. Verifique novamente o upload.";
        endif;
    else:
        echo "Formato de arquivo inválido.";
    endif;
endif;
?>

<!-- UPLOAD DE ARQUIVOS
(enctype="multipart/form-data") é necessário para o envio de arquivos
-->
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivo"><br>
    <input type="submit" name="enviar-formulario">
</form>
    
</body>
</html>