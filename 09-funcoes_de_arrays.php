<?php
// 09 --- Funções de Arrays. Funções para manipulação de arrays.

/*
is_array ($array)....................... = verifica se a variavel é um array
in_array ($valor, $array)............... = verifica se um valor está em um determinado array
array_keys($array)...................... = retorna as chaves(indices) do array especificado
array_values($array).................... = retorna os valores do array especificado
array_merge ($array1,$array2)........... = agrega os conteudos de dois arrays
array_pop ($array)...................... = remove a ultima posicao do array
array_shift($array)..................... = remove a primeira posicao do array
array_unshift($array, "valor").......... = adiciona um ou mais elementos no inicio do array
array_push($array, $valor, "valor")..... = adiciona um ou mais elementos no fim do array
array_combine($keys,$values)............ = mescla os dois arrays em chaves e valores.
array_sum()............................. = calcula a soma dos elementos do array 
explode("/","20/10/2009")............... = transforma uma string em um array
implode ("separador", $array)........... = transforma um array em uma string
*/

$nomes = array("aluno"=>"Joaquim", "professor"=>"Jorge", "coordenadora"=>"Maria", "inspetor"=>"Pedro");

// is_array
echo is_array($nomes)."</br>"; // --- '1' = Verdadeiro, '0' = Falso
echo is_array($nomes) ? "É array.</br>" : "Não é array.</br>";

echo "<hr>";

// in_array
echo in_array("Joaquim", $nomes)."</br>"; // --- '1'
echo in_array("Jorge", $nomes) ? "Está no array.</br>" : "Não está no array.</br>";

echo "<hr>";

// array_keys
$array_keys = array_keys($nomes);
print_r($array_keys);

echo "<hr>";

// array_values
$array_values = array_values($nomes);
print_r($array_values);

echo "<hr>";

// array_merge
$array_merge = array_merge($array_keys, $array_values);
print_r($array_merge);

echo "<hr>";

// array_pop
echo array_pop($array_keys); // --- remove o último valor do array
echo "</br>";
print_r($array_keys);

echo "<hr>";

// array_shift
echo array_shift($array_values); // --- remove o valor do primeiro elemento
echo "</br>";
print_r($array_values);

echo "<hr>";

// array_unshift
echo array_unshift($array_keys, "aluno"); // --- adiciona um ou mais elementos no inicio do array, imprime o índice
echo "</br>";
print_r($array_keys);

echo "<hr>";

// array_push
echo array_push($array_values, "Joaquim"); // --- adiciona um ou mais elementos no fim do array, imprime o índice
echo "</br>";
print_r($array_values);

echo "<hr>";

// array_combine
$array_combine = array_combine($array_keys, $array_values); 
print_r($array_combine);

echo "<hr>";

// array_sum
$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo array_sum($numeros); // --- '55'

echo "<hr>";

// explode
$data = "09/07/2024";
$novaData = explode("/", $data);
print_r($novaData); // --- Array ( [0] => 09 [1] => 07 [2] => 2024 )
echo "</br>";
$frase = "O rato roeu a roupa do rei de Roma";
$palavras = explode(" ", $frase);
print_r($palavras); // --- Array ( [0] => O [1] => rato [2] => roeu [3] => a [4] => roupa [5] => do [6] => rei [7] => de [8] => Roma )

echo "<hr>";

// implode
$frase = implode(" ", $palavras);
echo $frase."</br>"; // --- 'O rato roeu a roupa do rei de Roma'
$novaData = implode("/", $novaData);
echo $novaData; // --- '09/07/2024'

?>