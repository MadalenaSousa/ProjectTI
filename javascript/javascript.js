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

//Dropdow das imagens
let seta = document.querySelectorAll(".seta");
let texto = document.querySelectorAll(".texto");

for(let i=0; i<texto.length; i++ ){
    seta[i].addEventListener("click", dropdown(texto[i]));
}

function mudarImagem(setaImagem){
    image=document.querySelectorAll(".seta");
    image.src = setaImagem;
}

//Eventos
var info = new Date();
let mesAtual = info.getMonth();
var meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

document.getElementById("mes").innerText = meses[mesAtual-1];

var setaRightCal = document.


