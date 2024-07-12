<?php

$nome = $_POST['nome']; // --- $_POST = dados enviados por POST no 'index.php'
$email = $_POST['email']; // --- $_POST = dados enviados por POST no 'index.php'

echo "Bem-vindo(a) de volta $nome<br>";
echo "Do email: $email<br>";

var_dump($_POST);

?>