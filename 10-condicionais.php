<?php
/*
--- Condicionais. Estruturas de decisão baseadas em condições.
if
else
elseif
*/

$numero = 110;

if($numero == 10):
    echo "É igual a 10.<hr>";
elseif($numero > 10):
    echo "E maior que 10.<hr>";
else:
    echo "É diferente de 10.<hr>";
endif;

$media = 7;
echo ($media >= 7) ? "APROVADO<hr>" : "REPROVADO<hr>";



/*
switch
case
default
*/

$cor = "vermelho";
switch($cor):
    case "vermelho":
        echo "Vermelho<hr>";
        break;
    case "azul":
        echo "Azul<hr>";
        break;
    default:
        echo "Branco<hr>";
endswitch;
?>