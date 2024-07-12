<?php
// --- Operadores de Atribuição. Servem para atribuir valores a uma variável.

$a = 10; // --- atribuição
echo $a."</br>";

$b = 5;
$a = $a + $b;
echo $a."</br>";

$a += $b; // --- $a = $a + $b
echo $a."</br>";

echo ($a -= $b)."</br>"; // --- $a = $a - $b
echo ($a *= $b)."</br>"; // --- $a = $a * $b
echo ($a /= $b)."</br>"; // --- $a = $a / $b
echo ($a %= $b)."</br>"; // --- $a = $a % $b
?>