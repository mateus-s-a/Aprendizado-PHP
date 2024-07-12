<?php

/* Encerrando a sessão atual */
session_start();
session_unset();
session_destroy();
header('Location: index.php'); // --- quando deslogar, redireciona para o 'index.php'.

/* Para deslogar o usuário, basta limpar a sessão. Assim, o usuário ficará deslogado. */

?>