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

        $_SESSION['articles'][] = $_GET['id'];

        if($_SESSION['articles'] != null){
            foreach ($_SESSION['articles'] as $val){
                echo '<div class="id">';
                echo $val;
                echo '</div>';
            }
        } else {
            echo '<div class="id">';
            echo 'Ainda não adicionou artigos ao seu carrinho.';
            echo '</div>';
        }

        ?>

        <div class="col-1"></div>

        <table class="col-10">

        </table>

        <div class="col-1"></div>

        <div class="row">
            <div class="col-8"></div>

            <div class="col-4">
                <form method="post" action="clearcart.php">
                    <input class="botao" type="submit" value="Esvaziar Carrinho">
                </form>
            </div>
        </div>

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
</body>
</html>