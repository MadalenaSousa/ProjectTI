<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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

    <main class="grid-main dados">
        <div class="row">

            <div class="col-2"></div>

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

                htmlOutputForm($nome, $mail, $numero, $morada, $cartao, $validade, $codigo);

                fileOutputForm($nome, $mail, $numero, $morada, $cartao, $validade, $codigo, $filename);

                function htmlOutputForm($nome, $mail, $numero, $morada, $cartao, $validade, $codigo)
                {
                    echo '<div><h4>Nome:</h4>' . $nome . '</div>';
                    echo '<div><h4>Email:</h4>' . $mail . '</div>';
                    echo '<div><h4>Número de Telemóvel:</h4>' . $numero . '</div>';
                    echo '<div><h4>Morada:</h4>' . $morada . '</div>';
                    echo '<div><h4>Número do Cartão:</h4>' . $cartao . '</div>';
                    echo '<div><h4>Validade:</h4>' . $validade . '</div>';
                    echo '<div><h4>Código:</h4>' . $codigo . '</div>';
                }


                function fileOutputForm($nome, $mail, $numero, $morada, $cartao, $validade, $codigo, $filename)
                {
                    $line_to_write = $nome . ', ';
                    $line_to_write = $line_to_write . $mail . ',';

                    $line_to_write = $line_to_write . $numero . ',';
                    $line_to_write = $line_to_write . $morada;
                    $line_to_write = $line_to_write . $cartao;
                    $line_to_write = $line_to_write . $validade;
                    $line_to_write = $line_to_write . $codigo;
                    $line_to_write = $line_to_write . "\n";

                    file_put_contents($filename, $line_to_write, FILE_APPEND);
                }

                mailOutputForm($nome, $mail, $numero, $morada, $cartao, $validade, $codigo);

                function mailOutputForm($nome, $mail, $numero, $morada, $cartao, $validade, $codigo)
                {
                    $message = "Saudações,
Este mail serve de confirmação de dados. Por favor, não responda a este mail. 
   
Dados
Nome: $nome
Email: $mail
Numero de Telemóvel: $numero
Morada: $morada
Número de cartão: $cartao
Validade: $validade
Codigo de Segurança: $codigo

Clique no link para confirmar e carregar o comprovativo de compra:

https://student.dei.uc.pt/~msousa/ProjectTI/carregarcomprovativo.php
https://student.dei.uc.pt/~mspereira/ProjectTI/carregarcomprovativo.php
 
Cumprimentos,
MMDesign
    ";

                    mail($mail,
                        'Form submitted',
                        $message,
                        'From: mmdesign@example.com');
                }
                
                ?>
            </div>

            <div class="col-2"></div>
        </div>

        <form enctype="multipart/form-data" action="enviomail.php" method="POST">
            <div class="row">
                <div class="col-8"></div>

                <div class="col-4">
                    <input class="botao" type="submit" value="Confirmar">
                </div>
            </div>
        </form>
    </main>
</div>

<footer class="grid-footer">

    <?php include('footer.html'); ?>

</footer>
<script src="javascript/javascript.js"></script>
<script src="javascript/slideshow.js"></script>
<script src="javascript/artigo.js"></script>
</body>
