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
    <div class="fullscreen-contentor-video">

        <video class="col-12 img-video" muted autoplay controls poster="imagens/videos/miniatura.jpg">
            <source src="imagens/videos/promovideo.mp4" type="video/mp4">
            <source src="imagens/videos/promovideo.wmv" type="video/wmv">
        </video>

        <div class="fullscreen-conteudo">
            <header class="grid-header">

                <?php include('header.php'); ?>

            </header>

            <footer class="grid-footer">

                <?php include('footer.html'); ?>

            </footer>
        </div>
    </div>
    <script src="javascript/javascript.js"></script>
</body>
</html>