<?php
/* Criando Funções. Criando e chamando funções. */

function exibeNome($nome) {
    echo "Meu nome é $nome.";
}
exibeNome("Matthew");

echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4) {
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    if($media >= 7):
        echo "$nome, foi aprovado com a média $media</br>";
    else:
        echo "$nome, foi reprovado com a média $media</br>";
    endif;
}
calcularMedia("Matthew", 6, 8, 7, 9);
calcularMedia("Wehttam", 4, 2, 3, 1);


?>