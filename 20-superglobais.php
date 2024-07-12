<?php
/* Variáveis Superglobais. Variáveis prédefinidas dentro de PHP.

$GLOBALS..... = Variáveis globais
$_SERVER..... = Informações do servidor
$_REQUEST.... = Dados de GET, POST e COOKIE
$_POST....... = Dados enviados por POST
$_GET........ = Dados enviados por GET
$_FILES...... = Arquivos enviados por upload
$_ENV........ = Variáveis de ambiente
$_COOKIE..... = Dados de cookies
$_SESSION.... = Dados da sessão

*/

// $GLOBALS ————————————————————————————————————————————————————————————————————————
$x = 10;
$y = 15;

function soma() {
    echo $GLOBALS['x'] + $GLOBALS['y'];
}
soma();

echo "<hr>";

// $_SERVER ————————————————————————————————————————————————————————————————————————
echo $_SERVER['PHP_SELF']."<br>"; // --- Caminho do script em execução
echo $_SERVER['SERVER_NAME']."<br>"; // --- Nome do servidor
echo $_SERVER['HTTP_HOST']."<br>"; // --- Cabeçalho do host
echo $_SERVER['HTTP_REFERER']."<br>"; // --- URL da página de referência
echo $_SERVER['HTTP_USER_AGENT']."<br>"; // --- Informação do agente de usuário
echo $_SERVER['SCRIPT_FILENAME']."<br>"; // --- Caminho absoluto do script
echo $_SERVER['REQUEST_TIME']."<br>"; // --- Timestamp da requisição
echo $_SERVER['REQUEST_TIME_FLOAT']."<br>"; // --- Timestamp com precisão em milissegundos
echo $_SERVER['DOCUMENT_ROOT']."<br>"; // --- Raiz do documento
echo $_SERVER['SERVER_PORT']."<br>"; // --- Porta do servidor
echo $_SERVER['REMOTE_ADDR']."<br>"; // --- Endereço IP do cliente

echo "<hr>";

?>