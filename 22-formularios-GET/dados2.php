<?php

$nome_form = $_GET['nome_form']; // --- $_GET = dados enviados por GET no 'index.php'
$email_form = $_GET['email_form']; // --- $_GET = dados enviados por GET no 'index.php'

echo "Você tem $nome_form anos de idade e mora na $email_form.<br>";
var_dump($_GET);

echo "<hr>";

echo $_GET['idade']."<br>".$_GET['sobrenome'];

// Dentro do URL, pode-se adicionar mais um parâmetro digitando no final: '....&cidade=Alagoas'
// Logo, '$_GET' recebe => '$_GET[cidade]' = Alagoas

?>