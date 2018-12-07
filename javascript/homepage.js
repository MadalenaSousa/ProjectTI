//Dropmenu da navegação
let botaoPortfolio = document.querySelector(".paginas div .col-1");
let opcoesPortfolio = document.querySelector(".list");

botaoPortfolio.addEventListener("click", dropdown(opcoesPortfolio));

//Dropmenu hamburguer
let hamburguer = document.querySelector("nav .burguer");
let opcoes = document.querySelector(".paginas");

hamburguer.addEventListener("click", dropdown(opcoes));

//loja
let box = document.querySelectorAll(".box");
let check = document.querySelectorAll(".check");

for(let i=0; i<check.length; i++) {
    box[i].addEventListener("click", dropdown(check[i]));
}

let cor = document.querySelectorAll(".cores img");

for(let i=0; i<cor.length; i++) {
    cor[i].addEventListener("click", function () {
        cor[i].classList.toggle("border");
    });
}

//Função dropmenu
function dropdown(menu) {
    let conteudo = menu;

    return function() {
        conteudo.classList.toggle("show");
    };
}