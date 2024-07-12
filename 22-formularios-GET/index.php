<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>22-Formulário-2</title>
</head>
<body>

    <form action="dados2.php" method="GET"> <!-- aqui, os dados do formulário são enviados via URL com o 'GET' -->
        Nome: <input type="text" name="nome_form"><br>
        Email: <input type="email" name="email_form"><br>
        <button type="submit">Enviar</button><br>

        <!-- Utilizando o método 'GET', não necessariamente ele precisa ser usado em um formulário.
        Pode ser simplesmente, por exemplo, por um link, e passar esses parâmetros via URL. -->

        <a href="dados2.php?idade=20&sobrenome=Santos">Enviar Dados</a>
    </form>
    
</body>
</html>