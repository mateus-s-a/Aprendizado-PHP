<?php
/* Operadores de Comparação. Serve para comparar valores.
==, ===, !=, !==, <, >, <=, >=, <>, <=>
*/

if(10 == 10): // --- 10 é igual a 10?
    echo "10 == 10<hr>";
endif;

if(10 == "10"): // --- 10 é igual a '10'?
    echo "10 == '10'<hr>";
endif;

if(10 === "10"): // --- 10 é estritamente igual a '10'?
    echo "10 === '10'<hr>";
else:
    echo "10 !== '10'<hr>";
endif;

if(10 != 11): // --- 10 não é igual a 11?
    echo "10 != 11<hr>";
endif;

if(11 > 10): // --- 11 é maior que 10?
    echo "11 > 10<hr>";
endif;

if(10 < 11): // --- 10 é menor que 11?
    echo "10 < 11<hr>";
endif;

if(10 <= 10): // --- 10 é menor ou igual a 10?
    echo "10 <= 10<hr>";
endif;

if(10 >= 10): // --- 10 é maior ou igual a 10?
    echo "10 >= 10<hr>";
endif;

if(10 <> 11): // --- 10 não é igual a 11? (Verifica se dois valores são diferentes (igual a !=).)
    echo "10 <> 11<hr>";
endif;

if(9 <=> 10): // --- 9 é menor ou igual a 10? (Compara dois valores e retorna -1, 0 ou 1 dependendo de se o primeiro valor é menor, igual ou maior que o segundo valor.)
    echo "9 <=> 10";
endif;
var_dump(9 <=> 10);
?>