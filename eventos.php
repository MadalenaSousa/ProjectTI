<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eventos | MMDesign</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="imagens/icon-separador.png">
</head>
<body>
    <div class="contentor">
        <header class="grid-header">
            <header class="grid-header">

                <?php include('header.php'); ?>

                <div class="row">
                    <div class="col-12 img-video carousel">
                        <img src="imagens/slideshow1.jpg" alt="Projeto 2017">
                    </div>
                </div>
            </header>

        <main class="grid-main">
            <div class="row eventos">
                    <div class="col-1"></div>

                    <div class="col-4">
                        <div class="botao" id="mes">
                            Novembro
                        </div>
                        <div id="eventoInfoMes">

                        </div>
                    </div>

                    <div class="col-1"></div>

                    <div id="calendario">
                        <table class="col-5 grid-calendario">
                            <thead>
                                <tr>
                                    <th class="col-1">Domingo</th>
                                    <th class="col-1">Segunda</th>
                                    <th class="col-1">Terça</th>
                                    <th class="col-1">Quarta</th>
                                    <th class="col-1">Quinta</th>
                                    <th class="col-1">Sexta</th>
                                    <th class="col-1">Sábado</th>
                                </tr>
                            </thead>

                            <tbody>

                            </tbody>

                            <tfoot>
                                <tr>
                                    <th class="col-7">
                                        <img class="icon" id="setaLeft" src="imagens/eventos/seta-left.png" alt="">
                                        <img class="icon" id="setaRight" src="imagens/eventos/seta-right.png" alt="">
                                    </th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="col-1"></div>
            </div>
        </main>
    </div>

    <footer class="grid-footer">

        <?php include('footer.html'); ?>

    </footer>
    <script src="javascript/eventos.js"></script>
    <script src="javascript/javascript.js"></script>
    <script src="javascript/slideshow.js"></script>
</body>
</html>