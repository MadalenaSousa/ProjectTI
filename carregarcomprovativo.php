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

    <main class="grid-main dados">

        <div class="row">
            <div class="col-2"></div>

            <div class="col-8">
                Enviamos um mail com os dados da sua compra.<br>
                Por questões de verificação e segurança, carregue aqui o comprovativo da compra:
            </div>

            <div class="col-2"></div>
        </div>

        <form enctype="multipart/form-data" action="comprafinalizada.php" method="POST">
            <div class="row">
                <div class="col-2"></div>

                <div class="col-8">
                    <label><input type="file" name="file"></label>
                </div>

                <div class="col-2"></div>
            </div>

            <div class="row">
                <div class="col-8"></div>

                <div class="col-4">
                    <input class="botao" type="submit">
                </div>
            </div>
        </form>
    </main>
</div>

<footer class="grid-footer">

    <?php include('footer.html'); ?>

</footer>
<script src="javascript/javascript.js"></script>
<script src="javascript/slideshow.js"></script>
<script src="javascript/artigo.js"></script>
</body>