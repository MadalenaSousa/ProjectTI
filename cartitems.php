<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HomePage | MMDesign</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="imagens/icon-separador.png">
</head>

<body>
<main class="grid-main carrinho">

        <?php

        if(isset($_SESSION['articles'])){
            foreach ($_SESSION['articles'] as $itemDetails){
                echo '<div class="item" style="display: none">';

                echo '<div class="id">';
                echo $itemDetails['id'];
                echo '</div>';

                echo '<div class="quantity">';
                echo $itemDetails['quantity'];
                echo '</div>';

                echo '</div>';
            }
        }

        if(isset($_SESSION['articles'])){
            echo '<table class="col-12"></table>';
        } else {
            echo '<table class="col-12" style="display: none"></table>';
            echo '<div class="id" id="noItemsMessage">';
            echo 'Ainda não adicionou artigos ao seu carrinho.';
            echo '</div>';
        }

        ?>

</main>

<script src="javascript/cart.js"></script>
</body>
</html>

