<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Dados Pessoais | MMDesign</title>
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

        <main class="grid-main dadospagamento">
            <form method="post" action="php/writeFile.php">
                <div class="row">
                    <div class="col-1"></div>

                    <div class="col-10">

                        <iframe src="cartitems.php" width="100%" height="<?php

                        echo 100 + count($_SESSION['articles']) * 300;

                        ?>px" style="border: none"></iframe>

                    </div>

                    <div class="col-1"></div>
                </div>

                <div class="row">
                    <div class="col-1"></div>

                    <div class="col-5">

                            <div class="titulo">
                                Os seus dados
                            </div>

                            <label>Nome Completo* <input placeholder="Nome" type="text" name="name" required></label><br>

                            <label>E-mail* <input placeholder="email@example.com" type="text" name="email" required></label><br>

                            <label>Telemóvel* <input placeholder="9** *** ***" type="text" name="mobile" required></label><br>

                            <label> Morada* <input placeholder="Rua *** , Nº**, Exemplo" type="text" name="adress" required></label><br>

                            <div class="titulo">
                                Dados de pagamento
                            </div>

                            <div>
                                <img class="icon" src="imagens/visamastercard.png" alt="visa e mastercard">
                            </div>
                            <label>Número de cartão* <input placeholder="Numero" type="text" name="cartao" required></label><br>

                            <label>Data de validade* <input placeholder="MM/AA" type="text" name="validade" required></label><br>

                            <label>Código de segurança <input placeholder="***" type="text" name="codigo" required></label><br>
                    </div>

                    <div class="col-1"></div>
                </div>

                <div class="row">
                    <div class="col-1 empty"></div>

                    <div class="col-5">
                        <h6>*Campos obrigatórios</h6>
                    </div>

                    <div class="col-6"></div>
                </div>

                <div class="row">
                    <div class="col-8 empty"></div>

                    <div class="col-4">
                        <input type="submit" class="botao" value="Submeter">
                    </div>
                </div>
            </form>
        </main>

    <footer class="grid-footer">

        <?php include('footer.html'); ?>

    </footer>
    <script src="javascript/javascript.js"></script>
    <script src="javascript/slideshow.js"></script>
    <script src="javascript/cart.js"></script>
</body>
</html>