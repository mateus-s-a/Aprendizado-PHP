<?php
/*
 * --- Operadores de Incremento e Decremento. Servem para somar ou subtrair em (+1 ou -1),
 * qualquer valor do tipo numérico ou string.
*/

$valor = 20;

echo $valor++; // --- pós-incremento..........20
echo "</br>";
echo $valor; // ---...........................21
echo "</br>";
echo ++$valor; // --- pré-incremento..........22

echo "<hr>";

echo $valor--; // --- pós-decremento..........22
echo "</br>";
echo $valor; // ---...........................21
echo "</br>";
echo --$valor; // --- pré-decremento..........20
?>