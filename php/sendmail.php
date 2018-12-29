<?php

include('readfile.php');

$encomedas = lerFicheiro('data.txt');


mailOutputForm($encomedas[$_POST['idEncomenda']]['nome'], $encomedas[$_POST['idEncomenda']]['email'], $encomedas[$_POST['idEncomenda']]['tlmvl'],
    $encomedas[$_POST['idEncomenda']]['morada'], $encomedas[$_POST['idEncomenda']]['nCartao'], $encomedas[$_POST['idEncomenda']]['validade'],
    $encomedas[$_POST['idEncomenda']]['codigo'], $encomedas[$_POST['idEncomenda']]['items'], $_POST['idEncomenda']);

function mailOutputForm($nome, $mail, $numero, $morada, $cartao, $validade, $codigo, $items, $idEncomenda)
{

    $artigos = 'ID da Encomenda: ' . $idEncomenda . "\n\n" ;

    for($i=0; $i<count($items); $i++) {
        $artigos = $artigos . 'ID do Artigo: ' . $items[$i]['id'] . "\n" . 'Preco: ' . $items[$i]['id'] . 'euros' . "\n" . 'Quantidade: ' . $items[$i]['quantity'] . "\n\n";
    }

    $message = "Saudacoes,
Este mail serve de confirmacao de dados. Por favor, nao responda a este mail. 
   
Dados
Nome: $nome
Email: $mail
Numero de Telemovel: $numero
Morada: $morada

Numero de cartao: $cartao
Validade: $validade
Codigo de Seguranca: $codigo

Artigo(s):

" . $artigos .
"

Se quiser rever a sua encomenda siga estes links:

https://student.dei.uc.pt/~msousa/ProjectTI/displaydados.php?idEncomenda=$idEncomenda
https://student.dei.uc.pt/~mspereira/ProjectTI/displaydados.php?idEncomenda=$idEncomenda

Clique no link para confirmar e carregar o comprovativo de compra:

https://student.dei.uc.pt/~msousa/ProjectTI/carregarcomprovativo.php
https://student.dei.uc.pt/~mspereira/ProjectTI/carregarcomprovativo.php
 
Cumprimentos,
MMDesign
    ";

    mail($mail,
        'Form submitted',
        $message,
        'From: mmdesign@example.com');
}

header('Location: ../enviomail.php');
