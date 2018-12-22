<?php session_start(); ?>

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

            <?php include('header.php'); ?>

            <div class="row">
                <div class="col-12 img-video carousel">
                    <img src="imagens/slideshow1.jpg" alt="Projeto 2017">
                </div>
            </div>
        </header>

        <main class="grid-main loja">
            <div class="row">
                <div class="col-1"></div>

                <div class="titulo col-11">
                    Os Nossos Produtos
                </div>
            </div>

            <div class="row">
                <div class="col-1"></div>

                <div class="col-3">
                    <h1>Filtros</h1>

                    <div class="filtros">
                        <div>
                            <h3>Categoria</h3>

                                <ul>
                                    <li>
                                        <input type="checkbox" id="canecas">
                                        <label for="canecas">Canecas</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="tshirts">
                                        <label for="tshirts">T-Shirts e Sweats</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="canetas">
                                        <label for="canetas">Canetas</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="isqueiros">
                                        <label for="isqueiros">Isqueiros</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="portachaves">
                                        <label for="portachaves">Porta-Chaves</label>
                                    </li>
                                </ul>
                        </div>

                        <div>
                            <h3>Preço</h3>
                            <div class="pRelative">
                                0€
                                <label><input id="price" type="range" min="0" max="5000"></label>
                                50€
                            </div>
                        </div>

                        <div class="cores">
                            <h3>Cores</h3>
                            <img class="icon" src="imagens/loja/laranja.svg" id="orange" alt="" width="30px">
                            <img class="icon" src="imagens/loja/roxo.svg" id="purple" alt="" width="30px">
                            <img class="icon" src="imagens/loja/branco.svg" id="white" alt="" width="30px">
                            <img class="icon" src="imagens/loja/preto.svg" id="black" alt="" width="30px">
                            <img class="icon" src="imagens/loja/amarelo.svg" id="yellow" alt="" width="30px">
                            <br>
                            <img class="icon" src="imagens/loja/verde.svg" id="green" alt="" width="30px">
                            <img class="icon" src="imagens/loja/ciano.svg" id="cyan" alt="" width="30px">
                            <img class="icon" src="imagens/loja/azul.svg" id="blue" alt="" width="30px">
                            <img class="icon" src="imagens/loja/vermelho.svg" id="red" alt="" width="30px">
                            <img class="icon" src="imagens/loja/magenta.svg" id="pink" alt="" width="30px">
                        </div>
                    </div>
                </div>

                <div class="col-1"></div>

                <div class="col-6 grid-loja">
                    <div class="row">

                    </div>
                </div>

                <div class="col-1"></div>
            </div>
        </main>

    <footer class="grid-footer">

        <?php include('footer.html'); ?>

    </footer>
    <script src="javascript/javascript.js"></script>
    <script src="javascript/slideshow.js"></script>
    <script src="javascript/loja.js"></script>
</body>
</html>