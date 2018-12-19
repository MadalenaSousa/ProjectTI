//Dropmenu da navegação
let botaoPortfolio = document.querySelector(".paginas div .col-1");
let opcoesPortfolio = document.querySelector(".list");

botaoPortfolio.addEventListener("click", dropdown(opcoesPortfolio));

//Dropmenu hamburguer
let hamburguer = document.querySelector("nav .burguer");
let opcoes = document.querySelector(".paginas");

hamburguer.addEventListener("click", dropdown(opcoes));

//Função dropmenu
function dropdown(menu) {
    let conteudo = menu;

    return function() {
        conteudo.classList.toggle("show");
    };
}