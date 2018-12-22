<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sobre | MMDesign</title>
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

        <main class="grid-main sobre">
            <div class="row">
                <div class="col-1"></div>

                <div class="titulo col-11">
                    Quem somos nós?
                </div>
            </div>

            <div class="row">
                <div class="col-2"></div>

                <div class="col-4">
                    <div>
                        <picture>
                            <source media="(max-width: 600px)" srcset="imagens/mobile/madalena1-mobile.jpg">
                            <source media="(max-width: 1024px)" srcset="imagens/tablet/madalena1-tablet.jpg">
                            <img src="imagens/sobre/madalena1.jpg" alt="">
                        </picture>
                    </div>

                    <div class="texto" >
                        <h4>Madalena Sousa</h4>

                        <p>Acabou a Licenciatura em Design e Multimédia na Universidade de Coimbra em 2018 com 20 anos.
                        É atualmente diretora na Empresa M&M. Para além do seu cargo, Madalena Sousa ajuda nos projetos com os
                        seus dotes de programação.</p>
                    </div>

                    <div>
                        <picture>
                            <source media="(max-width: 600px)" srcset="imagens/mobile/madalena2-mobile.jpg">
                            <source media="(max-width: 1024px)" srcset="imagens/tablet/madalena2-tablet.jpg">
                            <img src="imagens/sobre/madalena2.jpg" alt="">
                        </picture>
                        <img class="seta icon" src="imagens/seta.png" alt="Seta">
                    </div>
                </div>

                <div class="col-4">
                    <div>
                        <picture>
                            <source media="(max-width: 600px)" srcset="imagens/mobile/maria1-mobile.jpg">
                            <source media="(max-width: 1024px)" srcset="imagens/tablet/maria1-tablet.jpg">
                            <img src="imagens/sobre/maria1.jpg" alt="">
                        </picture>
                    </div>

                    <div class="texto">
                        <h4>Maria Soares</h4>

                        <p>Terminou a Licenciatura em Design e Multimédia na Universidade de Coimbra em 2018 com apenas 19 anos.
                            É atualmente vice-diretora na Empresa M&M. Para além do seu cargo, Maria Soares ajuda nos projetos ao
                            nível do design.</p>
                    </div>

                    <div>
                        <picture>
                            <source media="(max-width: 600px)" srcset="imagens/mobile/maria2-mobile.jpg">
                            <source media="(max-width: 1024px)" srcset="imagens/tablet/maria2-tablet.jpg">
                            <img src="imagens/sobre/maria2.jpg" alt="">
                        </picture>

                        <img class="seta icon" src="imagens/seta.png" alt="Seta">
                    </div>
                </div>

                <div class="col-2"></div>
            </div>

            <div class="row">
                <div class="col-2"></div>

                <div class="col-8">
                    <div>
                        <picture>
                            <source media="(max-width: 600px)" srcset="imagens/mobile/empresa1-mobile.jpg">
                            <source media="(max-width: 1024px)" srcset="imagens/tablet/empresa1-tablet.jpg">
                            <img src="imagens/sobre/empresa1.jpg" alt="">
                        </picture>
                    </div>

                    <div class="texto">
                        <h4>Empresa</h4>

                        <p>A empresa foi criada em 2018 por Madalena Sousa e Maria Soares com a ajuda de outros membros.
                            Esta está localizada no pólo II da Universidade de Coimbra e conta com mais de 100 trabalhadores.
                            A empresa oferece ao cliente uma vasta variedade de serviços ao nível do Design.</p>
                    </div>

                    <div>
                        <picture>
                            <source media="(max-width: 600px)" srcset="imagens/mobile/empresa2-mobile.jpg">
                            <source media="(max-width: 1024px)" srcset="imagens/tablet/empresa2-tablet.jpg">
                            <img src="imagens/sobre/empresa2.jpg" alt="">
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