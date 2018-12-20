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

    <main class="grid-main">
        <div class="row">
            <div class="col-8">
                <?php
                $filename = "data.txt";

                $nome = $_POST["name"];
                $mail = $_POST["email"];
                $numero	= $_POST["mobile"];
                $morada	= $_POST["adress"];
                $cartao = $_POST["cartao"];
                $validade = $_POST["validade"];
                $codigo	= $_POST["codigo"];

                $line_to_write = $nome . ', ' . $mail .', ' . $numero .', ' . $morada .', ' . $cartao .', ' . $validade .', ' . $codigo;

                file_put_contents($filename, $line_to_write, FILE_APPEND);

                $filename = 'data.txt';

                $data = file_get_contents($filename);

                echo $data;
                ?>
            </div>

            <div class="col-4">
                <a href="comprafinalizada.php">
                    <button class="botao" name="continue">
                        Finalizar Compra
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
<script src="javascript/artigo.js"></script>
</body>
