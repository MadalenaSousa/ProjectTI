<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contactos | MMDesign</title>
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

        <main class="grid-main contactoselocalizacao">
            <div class="row">
                <div class="col-1"></div>

                <div class="titulo col-11">
                    Onde nos Encontrar
                </div>
            </div>

            <div class="row">
                <div class="col-1"></div>

                <div class="col-5">
                    <div>
                        <h2>Contactos</h2>
                    </div>

                    <div>
                        <address>
                            Agência de Design MM<br>
                            912345678<br>
                            Email: <a href="mailto:mmdesign@example.com">mmdesign@example.com</a><br>
                        </address>
                    </div>
                </div>


                <div class="col-5">
                    <div>
                        <h2>Localização</h2>
                    </div>

                    <div>
                        <address>
                            Polo 2<br>
                            Universidade de Coimbra<br>
                            Rua Sílvio Lima<br>
                            <a href="https://www.google.pt/maps/place/Faculdade+de+Ci%C3%AAncias+e+Tecnologia+da+Universidade+de+Coimbra/@40.1915918,-8.4129399,15z/data=!4m8!1m2!2m1!1spolo+2!3m4!1s0xd22f90bdfee5f61:0xb716944586028c73!8m2!3d40.186611!4d-8.412179" target="_blank">
                                <picture>
                                    <source media="(max-width: 768px)" srcset="imagens/tablet/mapa-tablet.jpg">
                                    <img src="imagens/contactoselocalizacao/mapa.png" alt="Localização">
                                </picture>

                            </a>
                        </address>
                    </div>
                </div>

                <div class="col-1"></div>
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