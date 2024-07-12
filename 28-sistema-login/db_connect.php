<?php

// Conexão com o DataBase
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$db_name = "sistemalogin";

$connect = mysqli_connect($serverName, $userName, $userPassword, $db_name);

if(mysqli_connect_error()):
    echo "Falha na conexão: ".mysqli_connect_error();
endif;

?>