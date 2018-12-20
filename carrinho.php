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
        <div class="row" id="artigo">
            <div class="col-1"></div>

            <div class="col-2"></div>

            <div class="col-5"></div>

            <div class="col-1 opcoesCart" id="preco">
                Preço
                <br>
            </div>

            <div class="col-1 opcoesCart">
                <label for="quantity">
                    Quantidade
                </label>
                <input type="number" name="quantity" id="quantity" min="1" value="1">
            </div>

            <div class="col-1 opcoesCart">
                <button id="remove">
                    Remover
                </button>
            </div>

            <div class="col-1"></div>
        </div>

        <?php

        session_start();

        $_SESSION['article_1'] = $_GET['id'];

        echo $_SESSION['article_1'];

        ?>

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