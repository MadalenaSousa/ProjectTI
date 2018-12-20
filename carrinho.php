<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Carrinho | MMDesign</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="imagens/icon-separador.png">
</head>
<body>
<div class="contentor">
    <header class="grid-header">
        <nav class="row">
                    <span class="col-6 empty">
                        <img class="icon burguer" src="imagens/mobile/options.png" alt="">
                    </span>

            <a href="index.html">
                        <span class="logo botao">
                            MMDesign
                        </span>
            </a>

            <div class="paginas">
                <a href="sobre.html">
                            <span class="col-1">
                                Sobre
                            </span>
                </a>
                <div>
                    <div class="col-1 portfolio">
                        Portfólio
                    </div>
                    <div class="list-pages">
                        <a href="portfolio.html"><div class="col-1">2018</div></a>
                        <a href=""><div class="col-1">2017</div></a>
                        <a href=""><div class="col-1">2016</div></a>
                    </div>
                </div>
                <a href="eventos.html">
                            <span class="col-1">
                                Eventos
                            </span>
                </a>
                <a href="loja.html">
                            <span class="col-1">
                                Loja
                            </span>
                </a>
                <a href="contactoselocalizacao.html">
                            <span class="col-1">
                                Contactos
                            </span>
                </a>

                <div>
                    <div class="col-1 cart">
                        <img class="icon" src="imagens/carrinho.png" alt="Carrinho de Compras">
                    </div>
                    <div class="list-itens">
                        <a href=""><div class="col-1">Item 1</div></a>
                        <a href=""><div class="col-1">Item 2</div></a>
                        <a href=""><div class="col-1">Item 3</div></a>
                        <a href="carrinho.php"><div class="col-1">Ver Carrinho</div></a>
                        <a href="dadospagamento.php"><div class="col-1">Checkout</div></a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="row">
            <div class="col-12 img-video carousel">
                <img src="imagens/slideshow1.jpg" alt="Projeto 2017">
            </div>
        </div>
    </header>

    <main class="grid-main carrinho">
        <div class="row" id="artigo">
            <div class="col-1"></div>

            <div class="col-2"></div>

            <div class="col-5"></div>

            <div class="col-1 opcoesCart" id="preco">
                Preço
                <br>
            </div>

            <div class="col-1 opcoesCart">
                <label for="quantity">
                    Quantidade
                </label>
                <input type="number" name="quantity" id="quantity" min="1" value="1">
            </div>

            <div class="col-1 opcoesCart">
                <button id="remove">
                    Remover
                </button>
            </div>

            <div class="col-1"></div>
        </div>

        <div class="row">
            <div class="col-8"></div>

            <div class="col-4">
                <a href="loja.html">
                    <button class="botao">
                        Continuar a Comprar
                    </button>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-8"></div>

            <div class="col-4">
                <a href="dadospagamento.php">
                    <button class="botao">
                        Checkout
                    </button>
                </a>
            </div>
        </div>
    </main>
</div>

<footer class="grid-footer">
    <div class="row">
        <div class="col-2">
            <a href="index.html">
                <svg id="Camada_1" data-name="Camada 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 243.22 58.47" width="200px">
                    <defs>
                        <style>.cls-1{fill:#303;}.cls-2{font-size:36px;fill:#909;font-family:OCRAStd, OCR A Std;}</style>
                    </defs>
                    <title>logo-footer</title>
                    <rect class="cls-1" width="243.22" height="58.47"/>
                    <text class="cls-2" transform="translate(14.41 40.68)">MMDesign</text>
                </svg>
            </a>
        </div>

        <div class="col-1 empty"></div>

        <div class="col-2">
            <a href="*link to fb">
                <img class="icon" src="imagens/facebook.png" alt="Ícone do Facebook">
            </a>
            <br>
            <a href="*link to fb">
                Facebook/MMDesign
            </a>
        </div>

        <div class="col-2">
            <a href="*link to insta">
                <img class="icon" src="imagens/insta.png" alt="Ícone do Instagram">
            </a>
            <br>
            <a href="*link to insta">
                Instagram/MMDesign
            </a>
        </div>

        <div class="col-2">
            <a href="*link to tt">
                <img class="icon" src="imagens/twitter.png" alt="Ícone do Twitter">
            </a>
            <br>
            <a href="*link to tt">
                Twitter/MMDesign
            </a>
        </div>

        <div class="col-1 empty"></div>

        <div class="col-2"> Website Design:<br> MMDesign</div>
    </div>
</footer>
<script src="javascript/javascript.js"></script>
<script src="javascript/slideshow.js"></script>
<script src="javascript/cart.js"></script>
</body>
</html>