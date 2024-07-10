<?php
// --- Constantes. São automaticamente GLOBAIS.
define("PI", 3.14); // primeiro parametroetro = nome da constante, segundo parametroetro = valor da constante
echo PI;
define("NOME", "Matthew");
echo NOME;
define("CURSO", true);
var_dump(CURSO);
define("IDADE", 20);

echo 'Meu nome é '.NOME.', e tenho '.IDADE.' anos.';

echo "<hr>";

define("TIMES", ["Corinthians", "Palmeiras", "Santos", "Flamengo"]);
echo TIMES[0];
var_dump(TIMES);

echo "<hr>";



function exibeNome() { echo NOME; } // --- constantes são globais
exibeNome();
?>