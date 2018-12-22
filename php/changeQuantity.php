<?php

session_start();

for($i=0; $i<count($_SESSION['articles']); $i++) {
    if ($_SESSION['articles'][$i]['id'] == $_POST['id']){
        $_SESSION['articles'][$i]['quantity'] = $_POST['quantity'];
        break;
    }
}

header('Location: ../carrinho.php');