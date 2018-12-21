<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Loja | MMDesign</title>
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

    <main class="grid-main dados">

        <div class="row">
            <div class="col-2"></div>

            <div class="col-8">
                Enviamos um mail com os dados da sua compra.<br>
                Aceda ao link que lhe enviámos e siga as instruções.
            </div>

            <div class="col-2"></div>
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
                <a href="index.php">
                    <button class="botao">
                        HomePage
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
</body>