<?php
/* 08-Arrays */
// Arrays Numéricos
$carros = array("Chevrolet", "Ford", "Fiat", "Volkswagen");
print_r($carros); // print_r = imprime um array: Array ( [0] => Chevrolet [1] => Ford [2] => Fiat [3] => Volkswagen )
echo "</br>";
echo $carros[0];
echo "</br>";
echo $carros[1];
echo "</br>";
echo $carros[2];
echo "</br>";
echo $carros[3];

echo "<hr>";

$carros[5] = "Renault";
$carros[4] = "Ferrari";
print_r($carros);

echo "<hr>";

$materiais = array(1=>"Madeira", 2=>"Papel", 3=>"Vidro"); // --- array associativo
echo $materiais[1];
echo "</br>";
print_r($materiais);

echo "<hr>";

$motos = array();
$motos[] = "BMW";
$motos[1] = "Honda";
$motos[4] = "Yamaha";
$motos[2] = "Suzuki";
print_r($motos);

echo "<hr>";

$clientes = ["Joaquim", "Ana", "Mateus", "Lorena", "Gabriel"];
print_r($clientes);

echo "<hr>";





// Count. Imprime a quantidade de elementos de um array
echo count($carros)."</br>";
echo count($motos)."</br>";
echo count($clientes);

$totalMateriais = count($materiais);
echo "</br>";
echo "O total de materiais é $totalMateriais";

echo "<hr>";

// forEach. Imprime todos os elementos de um array, percorrendo o array
foreach($carros as $el) {
    echo $el."</br>";
}
echo "<hr>";
foreach($motos as $el) { echo $el."</br>"; }
echo "<hr>";
foreach($clientes as $el) { echo $el."</br>"; }
echo "<hr>";
foreach($materiais as $el) { echo $el."</br>"; }
echo "<hr>";





// Arrays Associativos. Quando os indices de um array forem strings, como (chave: valor)
$pessoas = array("nome"=>"Matthew", "idade"=>20, "curso"=>"Engenharia da Computação");
echo $pessoas["nome"]." ".$pessoas["idade"]." ".$pessoas["curso"];
echo "</br>";
$pessoas["cidade"] = "Cuiabá";
print_r($pessoas);
echo "</br>";

foreach($pessoas as $indice => $el) {
    echo $indice.": ".$el."</br>";
}

echo "<hr>";

// Arrays Multidimensionais. Arrays que contêm outros arrays.
$times = array(
    "cariocas"=> array("campeao"=>"Vasco", "vice"=>"Flamengo", "terceiro"=>"Botafogo"),
    "paulistas"=> array("verde"=>"Palmeiras", "neymar"=>"Santos", "gotham city"=>"São Paulo"),
    "baianos"=> array("água"=>"Bahia", "derrota"=>"Vitória", "saiko"=>"Ceará")
);
print_r($times);
echo "</br>";
echo $times["cariocas"]["campeao"]."</br>";
echo $times["paulistas"]["neymar"]."</br>";
echo $times["baianos"]["saiko"]."</br></br>";

foreach($times["cariocas"] as $i => $el) { echo $i.": ".$el."</br>"; }
echo "</br>";
foreach($times["paulistas"] as $i => $el) { echo $i.": ".$el."</br>"; }
echo "</br>";
foreach($times["baianos"] as $i => $el) { echo $i.": ".$el."</br>"; }
?>