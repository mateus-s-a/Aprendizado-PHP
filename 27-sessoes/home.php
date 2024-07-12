<?php

session_start();
echo $_SESSION['cor'] ."<br>". $_SESSION['carro'] ."<br>". session_id();

/* Se tentarmos acessar o 'home.php' pelo o navegador antes do 'index.php', irá retornar um erro de variáveis indefinidas.
Porque a sessão ainda não foi iniciada. Que é iniciada com o acesso do 'index.php' primeiro.
*/

?>