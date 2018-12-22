<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Carrinho | MMDesign</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="imagens/icon-separador.png">
</head>
<body>
<div class="contentor">
    <header class="grid-header">

        <?php include('header.html'); ?>

        <div class="row">
            <div class="col-12 img-video carousel">
                <img src="imagens/slideshow1.jpg" alt="Projeto 2017">
            </div>
        </div>
    </header>

    <main class="grid-main carrinho">

        <?php

        session_start();

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

        ?>

        <div class="col-1"></div>

        <?php

        if(isset($_SESSION['articles'])){
            echo '<table class="col-10"></table>';
        } else {
            echo '<table class="col-10" style="display: none"></table>';
            echo '<div class="id" id="noItemsMessage">';
            echo 'Ainda não adicionou artigos ao seu carrinho.';
            echo '</div>';
        }

        ?>

        <div class="col-1"></div>

        <div class="row">
            <div class="col-8"></div>

            <div class="col-4">
                <a href="loja.php">
                    <button class="botao">
                        Continuar a Comprar
                    </button>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-8"></div>

            <div class="col-4">
                <form method="post" action="php/clearcart.php">
                    <input class="botao" type="submit" value="Esvaziar Carrinho">
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-8"></div>

            <div class="col-4">
                <a href="dadospagamento.php">
                    <button class="botao">
                        Checkout
                    </button>
                </a>
            </div>
        </div>
    </main>
</div>

<footer class="grid-footer">

    <?php include('footer.html'); ?>

</footer>
<script src="javascript/javascript.js"></script>
<script src="javascript/slideshow.js"></script>
<script src="javascript/cart.js"></script>
<!--script src="javascript/removeitens.js"></script-->
</body>
</html>