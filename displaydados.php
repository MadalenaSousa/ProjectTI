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

                htmlOutputForm($nome, $mail, $numero, $morada, $cartao);

                fileOutputForm($nome, $mail, $numero, $morada, $cartao, $filename);

                function htmlOutputForm($name, $email, $tlmvl, $morada, $cartao)
                {
                    echo '<table>';

                    echo '<tr>';
                    echo '<th>Nome</th><th>Email</th><th>Número de Telemóvel</th><th>Morada</th><th>Número do Cartão</th>';
                    echo '</tr>';

                    echo '<tr>';
                    echo "<td>$name</td><td>$email</td><td>$tlmvl</td><td>$morada</td><td>$cartao</td>";
                    echo '</tr>';

                    echo '</table>';
                }


                function fileOutputForm($name, $email, $tlmvl, $morada, $cartao, $filename)
                {
                    $line_to_write = $name . ', ';
                    $line_to_write = $line_to_write . $email . ',';

                    $line_to_write = $line_to_write . $tlmvl . ',';
                    $line_to_write = $line_to_write . $morada;
                    $line_to_write = $line_to_write . $cartao;
                    $line_to_write = $line_to_write . "\n";

                    file_put_contents($filename, $line_to_write, FILE_APPEND);
                }
                
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
