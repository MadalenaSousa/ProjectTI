//Dropmenu da navegação
let botaoPortfolio = document.querySelector(".paginas .col-1:nth-child(2)");
let opcoesPortfolio = document.querySelector("nav .list");

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
console.log(cor);

for(let i=0; i<cor.length; i++) {
    cor[i].addEventListener("click", function () {
        cor[i].classList.toggle("border");
    });
}

//Função dropmenu
function dropdown(menu) {
    var conteudo = menu;

    return function() {
        conteudo.classList.toggle("show");
    };
}

//SlideShow
var imageSources = ["imagens/slideshow1.jpg", "imagens/slideshow2.jpg", "imagens/slideshow3.jpg"];

var currentIndex = 0;

setInterval(function () {
    currentIndex = currentIndex + 1;

    if (currentIndex >= imageSources.length) {
        currentIndex = 0;
    }

    document.querySelector(".carousel img").setAttribute("src", imageSources[currentIndex]);
}, 3000);
