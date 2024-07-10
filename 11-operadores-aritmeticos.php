<?php
/*
 * Operadores Aritméticos. Operadores que realizam operações matemáticas básicas.
 * { + - * / % ** }
 */

echo (5 + 7)."<hr>"; // --- soma
echo (5 - 7)."<hr>"; // --- subtração
echo (5 * 7)."<hr>"; // --- multiplicação
echo (5 / 7)."<hr>"; // --- divisão
echo (5 % 7)."<hr>"; // --- resto
echo (5 ** 7)."<hr>"; // --- potência

$a = 10;
$b = 20;
$c = 30;
$d = 5;
$adicao = $a + $b + $c + $d;
echo $adicao."<hr>";

$subtracao = $a - $b - $c - $d;
echo $subtracao."<hr>";

$multiplicacao = $a * $b;
echo $multiplicacao."<hr>";

$divisao = $c / $d;
echo $divisao."<hr>";

$resto = $c % $d;
echo $resto."<hr>";

$potência = $a ** $d;
echo $potência."<hr>";


echo (5 + 7 + 9 + 8) / 4;

?>