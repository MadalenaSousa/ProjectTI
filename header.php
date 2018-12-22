<nav class="row">
    <span class="col-6 empty">
        <img class="icon burguer" src="imagens/mobile/options.png" alt="">
    </span>

    <a href="index.php">
        <span class="logo">
            MMDesign
        </span>
    </a>

    <div class="paginas">
        <a href="sobre.php">
            <span class="col-1">
                Sobre
            </span>
        </a>
        <div>
            <div class="col-1 portfolio">
                Portfólio
            </div>
            <div class="list-pages">
                <a href="portfolio.php"><div class="col-1">2018</div></a>
                <a href=""><div class="col-1">2017</div></a>
                <a href=""><div class="col-1">2016</div></a>
            </div>
        </div>
        <a href="eventos.php">
            <span class="col-1">
                Eventos
            </span>
        </a>
        <a href="loja.php">
            <span class="col-1">
                Loja
            </span>
        </a>
        <a href="contactoselocalizacao.php">
            <span class="col-1">
                Contactos
            </span>
        </a>

        <div>
            <div class="col-1 cart">
                <img class="icon" src="imagens/carrinho.png" alt="Carrinho de Compras">
            </div>
            <div class="list-itens">

                <?php

                if(isset($_SESSION['articles'])){
                    foreach ($_SESSION['articles'] as $itemDetails){
                        echo '<div class="id" style="display: none">';
                        echo $itemDetails['id'];
                        echo '</div>';
                        echo '<div class="quant" style="display: none">';
                        echo $itemDetails['quantity'];
                        echo '</div>';

                    }
                }

                ?>

                <a href="carrinho.php"><div class="col-1">Ver Carrinho</div></a>
                <a href="dadospagamento.php"><div class="col-1">Checkout</div></a>
            </div>
        </div>
    </div>

    <!--script src="javascript/cartmenu.js"></script-->
</nav>