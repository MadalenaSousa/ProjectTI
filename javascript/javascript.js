//Dropmenu da navegação
let botaoPortfolio = document.querySelector(".paginas .col-1:nth-child(2)");
let opcoesPortfolio = document.querySelector("nav .list");

botaoPortfolio.addEventListener("click", dropdown(opcoesPortfolio));

//Dropmenu hamburguer
let hamburguer = document.querySelector("nav .burguer");
let opcoes = document.querySelector(".paginas");

console.log(hamburguer);
console.log(opcoes);

hamburguer.addEventListener("click", dropdown(opcoes));

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

//Dropdow das imagens
let seta = document.querySelectorAll(".seta");
let texto = document.querySelectorAll(".texto");
let i;

for(let i=0; i<texto.length; i++ ){
    seta[i].addEventListener("click", dropdown(texto[i]));
}

//Função dropdown das imagens
function dropdown(menu) {
    var conteudo = menu;

    return function() {
        conteudo.classList.toggle("show");
    };
}

function mudarImagem(setaImagem){
    image=document.querySelectorAll(".seta");
    image.src=setaImagem;
}

