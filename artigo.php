<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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

        <main class="grid-main artigo">
            <div class="row">
                <div class="col-2"></div>

                <div class="col-3">

                    <form method="post" action="php/addToCart.php">
                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                        <input type="hidden" name="compraImediata" value="0">
                        <input type="submit" class="botao" value="Adicionar ao Carrinho">
                    </form>

                    <form method="post" action="php/addToCart.php">
                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                        <input type="hidden" name="compraImediata" value="1">
                        <input class="botao" type="submit" value="Proceder à Compra Imediata">
                    </form>
                </div>

                <div class="col-1"></div>

                <div class="col-4"></div>
            </div>
        </main>
    </div>

    <footer class="grid-footer">

        <?php include('footer.html'); ?>

    </footer>
    <script src="javascript/javascript.js"></script>
    <script src="javascript/slideshow.js"></script>
    <script src="javascript/artigo.js"></script>
</body>
</html>