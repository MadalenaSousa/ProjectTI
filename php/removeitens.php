<?php
session_start();

for($i=0; $i<count($_SESSION['articles']); $i++) {
    if ($_SESSION['articles'][$i]['id'] == $_POST['id']){
        array_splice($_SESSION['articles'], $i, 1);
        break;
    }
}

if(count($_SESSION['articles']) == 0) {
    unset($_SESSION['articles']);
}

header('Location: ../cartitems.php');