<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>26-Upload Múltiplo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php
if(isset($_POST['enviar-formulario'])):
    // var_dump($_FILES);

    $formatosPermitidos = array('png', 'jpg', 'jpeg', 'gif');
    $qtdArquivos = count($_FILES['arquivo']['name']);
    $contador = 0;

    while($contador < $qtdArquivos):
        $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);

        if(in_array($extensao, $formatosPermitidos)):
            $pasta = "arquivos/";
            $temporario = $_FILES['arquivo']['tmp_name'][$contador];
            $novoNome = uniqid().'.'.$extensao;

            if(move_uploaded_file($temporario, $pasta.$novoNome)):
                echo "<img src='$pasta$novoNome' style='width: 300px'; height='300px'>";
                echo "Upload efetuado com sucesso para o caminho '$pasta$novoNome'!<hr>";
            else:
                echo "Erro. Verifique novamente o upload.";
            endif;
        else:
            echo "Formato .$extensao inválido.<br>";
        endif;

        $contador++;
    endwhile;
endif;
?>

<!-- UPLOAD DE ARQUIVOS
(enctype="multipart/form-data") é necessário para o envio de arquivos

O 'multiple' é para permitir o envio de multiplos arquivos, e por isso, o 'name' deve ser 'arquivo[]', já que agora é um array.
-->
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivo[]" multiple><br>
    <input type="submit" name="enviar-formulario">
</form>
    
</body>
</html>