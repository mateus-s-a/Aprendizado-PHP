<?php
/* Estruturas de Repetição. Estruturas de repetição baseadas em loops.
while
do..while
for
foreach
*/

$contador = 1;

while($contador <= 10): //...................... --- enquanto o contador for menor ou igual a 10
    echo "Dentro do while: $contador.</br>";
    $contador++;
endwhile;

echo "<hr>";

do { //......................................... --- executado pelo menos uma vez, depois verifica a condição
    echo "Dentro do do...while: $contador.</br>";
    $contador++;
} while ($contador <= 10);

echo "<hr>";

for($contador=1; $contador<=10; $contador++): // --- enquanto o contador for menor ou igual a 10
    echo "Dentro do for: $contador.</br>";
endfor;

for($i=1; $i<=10; $i++): //...................... --- tabuada de 8
    echo "8 x $i = ".(8 * $i)."</br>";
endfor;

echo "<hr>";

$cores = array("vermelho", "azul", "verde", "amarelo");
print_r($cores);
echo "</br>";
foreach($cores as $el):
    echo "Dentro do foreach: $el.</br>";
endforeach;

foreach($cores as $i => $el):
    echo $i."-".$el."</br>";
endforeach;
?>