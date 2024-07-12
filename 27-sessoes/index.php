<?php
/* Sessões. Manipulando variáveis de sessão. Servem no cotidiano para salvar dados entre as requisições. 
Por exemplo: o usuário pode ser autenticado e salvo na sessão, para que o mesmo seja usado em outras requisições.
Carrinhos de compra, sistema de login, dados de usuários, etc.
*/

session_start(); // --- inicia a sessão

$_SESSION['cor'] = "Verde"; // --- salva dados na sessão
$_SESSION['carro'] = "Fiat";
echo $_SESSION['cor'] ."<br>". $_SESSION['carro'] ."<br>". session_id(); // session_id() = identificador da sessão

?>