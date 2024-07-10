<?php
// Escopo Global
$nome = "Matthew";

function exibeNome() {
    global $nome;
    echo $nome;
}

exibeNome();
echo "<hr>";

////////////////////////////////////

function exibeCidade() {
    // Escopo Local
    global $cidade;
    $cidade = "Cuiabá";
}

exibeCidade();
echo $cidade;
echo "<hr>";

////////////////////////////////////

$a = 1;
$b = 3;
$c = 7;

function soma($a, $b, $c) {
    // global $a, $b, $c;
    $res = $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
    echo "A resposta de $a + $b + $c é: $res"; // --- array especial $GLOBALS
}

soma($a, $b, $c);
?>