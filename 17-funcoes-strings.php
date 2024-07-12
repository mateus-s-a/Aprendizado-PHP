<?php
/* Funções para Strings. Funções para manipulação de strings.
strtoupper....... = transforma todas as letras em maiúsculas
strtolower....... = transforma todas as letras em minúsculas
substr........... = pega uma parte de uma string e a retorna
str_pad.......... = adiciona zeros ou caracteres a uma string
str_repeat....... = repete uma string
strlen........... = pega o tamanho de uma string
str_replace...... = substitui uma string por outra
strpos........... = pega a posição de uma string
*/

$nome = "matthew";

// strtoupper
echo strtoupper($nome)."<hr>"; // --- MATTHEW

// strtolower
echo strtolower($nome)."<hr>"; // --- matthew

// substr
echo substr($nome, 0, 3)."<hr>"; // --- mat | substr($variavel, $inicio, $final)

// str_pad
echo str_pad($nome, 10, "0")."</br>"; // --- matthew000 | str_pad($variavel, $final, $caractere)
echo str_pad($nome, 10, "0", STR_PAD_LEFT)."</br>"; // --- 000matthew
echo str_pad($nome, 10, "_", STR_PAD_BOTH)."<hr>"; // --- _matthew_

// str_repeat
echo str_repeat("Matthew", 3)."<hr>"; // --- MatthewMatthewMatthew

// strlen
echo strlen($nome)."<hr>"; // --- 7

// str_replace
echo str_replace("t", "4", $nome)."<hr>"; // --- ma44hew | str_replace($procurar, $substituir, $variavel)

// strpos
echo strpos($nome, "w")."<hr>"; // --- 6 | str_replace($variavel, $procurar)

?>