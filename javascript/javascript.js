//Dropmenu da navegação
let botaoPortfolio = document.querySelector(".paginas .portfolio");
let opcoesPortfolio = document.querySelector(".list-pages");

botaoPortfolio.addEventListener("click", dropdown(opcoesPortfolio));

//Dropmenu hamburguer
let hamburguer = document.querySelector("nav .burguer");
let opcoes = document.querySelector(".paginas");

hamburguer.addEventListener("click", dropdown(opcoes));

//Dropmenu carrinho
let cart = document.querySelector("nav .cart");
let itensList = document.querySelector(".list-itens");

cart.addEventListener("click", dropdown(itensList));

//Função dropmenu
function dropdown(menu) {
    let conteudo = menu;

    return function() {
        conteudo.classList.toggle("show");
    };
}

