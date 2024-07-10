<?php
$nome = 'Matthew';
echo 'Meu nome é $nome'; // --- o valor da variável '$nome' não será exibido na tela, em vez, "$nome" será exibido.
echo "<br>";
echo 'Meu nome é '.$nome.', e minha idade é 20.';
echo "<br>";
echo 'Estou cursando \'Engenharia da Computação\'.';
echo "<hr>";
echo "Meu nome é \"$nome\""; // --- asplas duplas são interpretativas.
?>