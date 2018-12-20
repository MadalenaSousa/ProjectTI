<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Compra realizada | MMDesign</title>
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
                <div class="col-2"></div>

                <div class="titulo col-8">
                    <?php

                    $uploaddir =  'comprovativos';
                    $uploadfile = $uploaddir . '/' . basename($_FILES['file']['name']);

                    $fileType = strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));
                    
                    if($fileType == "pdf") {
                        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
                            echo "<h5>A sua compra foi realizada com sucesso.</h5>\n";
                        }
                    } else {
                        echo "<h5>Hum... Algo de errado não está certo!</h5>\n";
                    }

                    ?>
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
        </main>
    </div>

    <footer class="grid-footer">

        <?php include('footer.html'); ?>

    </footer>
    <script src="javascript/javascript.js"></script>
    <script src="javascript/slideshow.js"></script>
</body>
</html>