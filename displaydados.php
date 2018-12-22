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

                <?php

                session_start();

                unset($_SESSION['articles']);

                include('php/readfile.php');

                $encomedas = lerFicheiro('php/data.txt');

                ?>

                <h4>Nome:</h4>

                <?php echo ' ' . $encomedas[$_GET['idEncomenda']]['nome']; ?>

                <h4>Email:</h4>

                <?php echo ' ' . $encomedas[$_GET['idEncomenda']]['email']; ?>

                <h4>Número de Telemóvel:</h4>

                <?php echo ' ' . $encomedas[$_GET['idEncomenda']]['tlmvl']; ?>

                <h4>Morada:</h4>

                <?php echo ' ' . $encomedas[$_GET['idEncomenda']]['morada']; ?>

                <h4>Número do Cartão:</h4>

                <?php echo ' ' . $encomedas[$_GET['idEncomenda']]['nCartao']; ?>

                <h4>Artigo(s):</h4>

                <?php

                for($i=0; $i<count($encomedas[$_GET['idEncomenda']]['items']); $i++){
                    echo ' ' . $encomedas[$_GET['idEncomenda']]['items'][$i]['id'] . ' ' . 'x' . $encomedas[$_GET['idEncomenda']]['items'][$i]['quantity'] . '<br>';
                }

                ?>

            </div>

            <div class="col-2"></div>
        </div>

        <div class="row">
            <div class="col-8"></div>

            <div class="col-4">
                <form method="post" action="php/sendmail.php">
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    <input class="botao" type="submit" value="Confirmar">
                </form>
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
