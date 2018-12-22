<?php

session_start();

$filename = "data.txt";

$idEncomenda = rand();

$nome = $_POST["name"];
$mail = $_POST["email"];
$numero	= $_POST["mobile"];
$morada	= $_POST["adress"];
$cartao = $_POST["cartao"];
$validade = $_POST["validade"];
$codigo	= $_POST["codigo"];

fileOutputForm($idEncomenda, $nome, $mail, $numero, $morada, $cartao, $validade, $codigo, $filename, $_SESSION['articles']);

function fileOutputForm($idEncomenda, $nome, $mail, $numero, $morada, $cartao, $validade, $codigo, $filename, $articles)
{

    $line_to_write = $idEncomenda . "\n";
    $line_to_write = $line_to_write . $nome . "\n";
    $line_to_write = $line_to_write . $mail . "\n";
    $line_to_write = $line_to_write . $numero . "\n";
    $line_to_write = $line_to_write  . $morada . "\n";
    $line_to_write = $line_to_write . $cartao . "\n";
    $line_to_write = $line_to_write . $validade . "\n";
    $line_to_write = $line_to_write . $codigo . "\n";
    $line_to_write = $line_to_write . count($articles) . "\n";

    for($i=0; $i<count($articles); $i++){
        $line_to_write = $line_to_write . $articles[$i]['id'] . "\n";
        $line_to_write = $line_to_write . $articles[$i]['quantity'] . "\n";
    }

    $line_to_write = $line_to_write . "\n";

    file_put_contents($filename, $line_to_write, FILE_APPEND);
}

header('Location: ../displaydados.php?idEncomenda=' . $idEncomenda);

?>