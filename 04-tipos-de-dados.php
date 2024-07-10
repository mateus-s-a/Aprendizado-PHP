<?php
// --- Tipos de Dados

/********* Escalares **********/
// string
$nome = "Matthew"; // --- string (sequência de caracteres)
var_dump($nome); // --- o método var_dump() mostra o tipo de dado de uma variável

if(is_string($nome)):
    echo "É uma string.";
else:
    echo "Não é uma string.";
endif;
echo (is_string($nome)) ? " É uma string." : " Não é uma string."; // --- operador ternário

echo "<hr>";


// int
$idade = 20; // --- int (inteiro)
var_dump($idade);

if(is_int($idade)):
    echo "É um inteiro.";
else:
    echo "Não é um inteiro.";
endif;

echo "<hr>";


// float
$altura = 1.72; // --- float (real)
var_dump($altura);

if(is_float($altura)):
    echo "É um float.";
else:
    echo "Não é um float.";
endif;

echo "<hr>";


// boolean
$admin = false; // --- boolean (verdadeiro ou falso)
var_dump($admin);

if(is_bool($admin)):
    echo "É um boolean.";
else:
    echo "Não é um boolean.";
endif;
echo "</br>";
if($admin):
    echo "Verdaddeiro.";
else:
    echo "Falso.";
endif;

echo "<hr>";




/********* Compostos **********/
// array
$carros = array("Ferrari", "BMW", "Mercedes", 9, 7.7, true); // --- array (vetor)
var_dump($carros);

echo "<hr>";

// object
class Cliente { // --- classe (objeto)
    public $nome; // --- propriedade
    public function setNome($parametro_nome) { // --- método
        $this->nome = $parametro_nome; // --- this.nome = (parâmetro_nome)
    }
}

$cliente = new Cliente(); // --- instância da classe
$cliente->setNome("Foyer"); // --- chamamada do método e definição do parâmetro
var_dump($cliente);

if(is_object($cliente)):
    echo "É um objeto.";
else:
    echo "Não é um objeto.";
endif;

echo "<hr>";



/********* Especiais **********/
// null
$cidade = NULL; // --- null (nulo)
var_dump($cidade);
?>