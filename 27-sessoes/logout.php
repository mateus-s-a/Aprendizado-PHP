<?php

session_start();
session_unset();
session_destroy();

/* Para deslogar o usuário, basta limpar a sessão. Assim, o usuário ficará deslogado.
O arquivo 'home.php' retorna novamente um erro de variáveis indefinidas, porque a sessão foi removida aqui.
*/

?>