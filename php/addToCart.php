<?php

session_start();

$_SESSION['articles'][] = $_POST['id'];

if(isset($_SESSION['articles'])){
    $i = 0;

    //Se já lá estiver aumenta a quantidade
    for($i=0; $i<count($_SESSION['articles']); $i++){
        if($_SESSION['articles'][$i]["id"] == $_POST['id']){
            $_SESSION['articles'][$i]["quantity"]++;
            break;
        }
    }

    //Se correu todos os artigos e não está lá nenhum igual, adiciona
    if($i == count($_SESSION['articles'])){
        $array = array(
            "id" => $_POST['id'],
            "quantity" => 1
        );
        array_push($_SESSION['articles'], $array);
    }
} else {
    $_SESSION['articles'] = array();
    $array = array(
        "id" => $_POST['id'],
        "quantity" => 1
    );
    array_push($_SESSION['articles'], $array);
}

header('Location: ../carrinho.php');

?>