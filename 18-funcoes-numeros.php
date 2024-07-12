<?php
/* Funções para Números. Manipulação de números.
number_format..... = formata um número em uma string de acordo você desejar.
round............. = arredonda um número para o número inteiro mais proximo.
ceil.............. = arredonda um número para o número inteiro mais alto.
floor............. = arredonda um número para o número inteiro mais baixo.
rand.............. = gera um número aleatório.
*/

$db = 1234.56;

// number_format
$preco = number_format($db, 2, ",", ".");
echo "O valor do produto: R$".$preco."<hr>";

// round
echo round($db)."<hr>";

// ceil
echo ceil(0.1)."<hr>";

// floor
echo floor(0.9)."<hr>";

// rand
echo rand(1, 20)."<hr>";
?>