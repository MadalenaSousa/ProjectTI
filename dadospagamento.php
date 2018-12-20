<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dados Pessoais | MMDesign</title>
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
        <?php
        $filename = "data.txt";

        $nome =$_POST["name"];
        $mail =$_POST["email"];
        $numero	=$_POST["mobile"];
        $morada	=$_POST["adress"];
        $cartao =$_POST["cartao"];
        $validade	=$_POST["validade"];
        $codigo	=$_POST["codigo"];
        

        $line_to_write = $nome . ', ' . $mail .', ' . $numero .', ' . $morada .', ' . $cartao .', ' . $validade .', ' . $codigo . "\n";

        file_put_contents($filename, $line_to_write, FILE_APPEND);

        ?>
        <form method="post" action="dadospagamento.php">
        <main class="grid-main">
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
                    </div>

                    <div class="col-5">
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
                        <a href="displaydados.php"
                            <button class="botao">
                                Continuar
                            </button>
                        <input type="submit"
                        </a>
                    </div>
                </div>
        </main>
        </form>

    <footer class="grid-footer">

        <?php include('footer.html'); ?>

    </footer>
    <script src="javascript/javascript.js"></script>
    <script src="javascript/slideshow.js"></script>
</body>
</html>