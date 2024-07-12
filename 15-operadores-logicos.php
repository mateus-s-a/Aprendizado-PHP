<?php
/* Operadores Lógicos. Servem para fazer comparações entre expressões. 
E (&& - and)
OU (|| - or)
OU EXCLUSIVO (xor)
NEGACAO (!)
*/

$idade = 20;
$nome = "Matthew";

if($idade >= 18 && $nome == "Matthew"): // --- idade é maior ou igual a 18 E nome é igual a Matthew
    echo "Verdadeiro.<hr>";
else:
    echo "Falso.<hr>";
endif;

if($idade >= 18 || $nome == "Joseph"): // --- idade é maior ou igual a 18 OU nome é igual a Matthew
    echo "Verdadeiro.<hr>";
else:
    echo "Falso.<hr>";
endif;

if($idade >= 18 xor $nome == "Matthew"): // --- ou é um, ou é outro, ambos não podem ser verdadeiros
    echo "Verdadeiro.<hr>";
else:
    echo "Falso.<hr>";
endif;

if(!($idade >= 18 && $nome == "Matthew")): // --- idade NÃO é maior ou igual a 18 E nome não é igual a Matthew
    echo "Verdadeiro.<hr>";
else:
    echo "Falso.<hr>";
endif;
?>