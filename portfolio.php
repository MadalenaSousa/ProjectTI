<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfólio | MMDesign</title>
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

        <main class="grid-main projeto">
            <div class="row">
                <div class="col-1"></div>

                <div class="titulo col-11">
                    Os nossos Projetos de 2018
                </div>
            </div>

            <div class="row">
                <div class="col-2"></div>
          
                <div class="col-4">
                    <div>
                        <picture>
                            <source media="(max-width: 600px)" srcset="imagens/mobile/projeto1_1-mobile.jpg">
                            <source media="(max-width: 1024px)" srcset="imagens/tablet/projeto1_1-tablet.jpg">
                            <img src="imagens/portfolio/projeto1_1.jpg" alt="">
                        </picture>
                    </div>

                    <div class="texto">
                        <p>Projeto desenvolvido por Madalena e Maria centrado na área do design e arte.</p>
                    </div>

                    <div>
                        <picture>
                            <source media="(max-width: 600px)" srcset="imagens/mobile/projeto1_2-mobile.jpg">
                            <source media="(max-width: 1024px)" srcset="imagens/tablet/projeto1_2-tablet.jpg">
                            <img src="imagens/portfolio/projeto1_2.jpg" alt="">
                        </picture>

                        <img class="seta icon" src="imagens/seta.png" alt="Seta">
                    </div>
                </div>

                <div class="col-4">
                    <picture>
                        <source media="(max-width: 600px)" srcset="imagens/mobile/projeto2_1-mobile.jpg">
                        <source media="(max-width: 1024px)" srcset="imagens/tablet/projeto2_1-tablet.jpg">
                        <img src="imagens/portfolio/projeto2_1.jpg" alt="">
                    </picture>

                    <div class="texto">
                        <p>Projeto desenvolvido por Madalena e Maria centrado na área da tecnologia.</p>
                    </div>

                    <div>
                        <picture>
                            <source media="(max-width: 600px)" srcset="imagens/mobile/projeto2_2-mobile.jpg">
                            <source media="(max-width: 1024px)" srcset="imagens/tablet/projeto2_2-tablet.jpg">
                            <img src="imagens/portfolio/projeto2_2.jpg" alt="">
                        </picture>

                        <img class="seta icon" src="imagens/seta.png" alt="Seta">
                    </div>
                </div>

                <div class="col-2"></div>
            </div>

            <div class="row">
                <div class="col-2"></div>

                <div class="col-4">
                    <picture>
                        <source media="(max-width: 600px)" srcset="imagens/mobile/projeto1_1-mobile.jpg">
                        <source media="(max-width: 1024px)" srcset="imagens/tablet/projeto1_1-tablet.jpg">
                        <img src="imagens/portfolio/projeto1_1.jpg" alt="">
                    </picture>

                    <div class="texto">
                        <p>Projeto desenvolvido por Madalena e Maria centrado na área do design e arte.</p>
                    </div>

                    <div>
                        <picture>
                            <source media="(max-width: 600px)" srcset="imagens/mobile/projeto1_2-mobile.jpg">
                            <source media="(max-width: 1024px)" srcset="imagens/tablet/projeto1_2-tablet.jpg">
                            <img src="imagens/portfolio/projeto1_2.jpg" alt="">
                        </picture>

                        <img class="seta icon" src="imagens/seta.png" alt="Seta">
                    </div>
                </div>

                <div class="col-4">
                    <picture>
                        <source media="(max-width: 600px)" srcset="imagens/mobile/projeto2_1-mobile.jpg">
                        <source media="(max-width: 1024px)" srcset="imagens/tablet/projeto2_1-tablet.jpg">
                        <img src="imagens/portfolio/projeto2_1.jpg" alt="">
                    </picture>

                    <div class="texto">
                        <p>Projeto desenvolvido por Madalena e Maria centrado na área da tecnologia.</p>
                    </div>

                    <div>
                        <picture>
                            <source media="(max-width: 600px)" srcset="imagens/mobile/projeto2_2-mobile.jpg">
                            <source media="(max-width: 1024px)" srcset="imagens/tablet/projeto2_2-tablet.jpg">
                            <img src="imagens/portfolio/projeto2_2.jpg" alt="">
                        </picture>

                        <img class="seta icon" src="imagens/seta.png" alt="Seta">
                    </div>
                </div>

                <div class="col-2"></div>
            </div>
        </main>
    </div>

    <footer class="grid-footer">

        <?php include('footer.html'); ?>

    </footer>
    <script src="javascript/javascript.js"></script>
    <script src="javascript/slideshow.js"></script>
    <script src="javascript/sobre+portfolio.js"></script>
</body>
</html>