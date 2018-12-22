<?php session_start(); ?>

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

        <?php include('header.php'); ?>

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

                unset($_SESSION['articles']);

                include('php/readfile.php');

                $encomedas = lerFicheiro('php/data.txt');

                ?>

                <h4>Nome:</h4>

                <?php echo '<div>' . ' ' . $encomedas[$_GET['idEncomenda']]['nome'] . ' ' . '</div>'; ?>

                <h4>Email:</h4>

                <?php echo '<div>' . ' ' . $encomedas[$_GET['idEncomenda']]['email'] . ' ' . '</div>'; ?>

                <h4>Número de Telemóvel:</h4>

                <?php echo '<div>' . ' ' . $encomedas[$_GET['idEncomenda']]['tlmvl'] . ' ' . '</div>'; ?>

                <h4>Morada:</h4>

                <?php echo '<div>' . ' ' . $encomedas[$_GET['idEncomenda']]['morada'] . ' ' . '</div>'; ?>

                <h4>Número do Cartão:</h4>

                <?php echo '<div>' . ' ' . $encomedas[$_GET['idEncomenda']]['nCartao'] . ' ' . '</div>'; ?>

                <h4>Artigo(s):</h4>

                <?php

                for($i=0; $i<count($encomedas[$_GET['idEncomenda']]['items']); $i++){
                    echo '<div style="display: inline-block; margin-right: 50px; float: left">';
                    echo '<div class="img-descricao-article" style="max-width: 250px"></div>';
                    echo '<div><h5>Preço:</h5>' . ' ';
                    echo '<span class="idDisplay">' . $encomedas[$_GET['idEncomenda']]['items'][$i]['id'] . '</span>';
                    echo '€' . '</div>';
                    echo '<div><h5>' . 'Quantidade: </h5>' . $encomedas[$_GET['idEncomenda']]['items'][$i]['quantity'] . ' ' . '</div>';
                    echo '</div>';
                }

                ?>

            </div>

            <div class="col-2"></div>
        </div>

        <div class="row">
            <div class="col-8"></div>

            <div class="col-4">
                <form method="post" action="php/sendmail.php">
                    <input type="hidden" name="idEncomenda" value="<?php echo $_GET['idEncomenda']; ?>">
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
<script src="javascript/displaydadosarticle.js"></script>
</body>
