<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>21-Formulário</title>
</head>
<body>

    <form action="dados.php" method="POST"> <!-- aqui, os dados do formulário ficam em 'dados.php', utilizando o 'POST' -->
        Nome: <input type="text" name="nome"><br>
        Email: <input type="email" name="email"><br>
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>