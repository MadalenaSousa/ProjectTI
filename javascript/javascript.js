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
let infoData = new Date();
let mesAtual = infoData.getMonth();
let anoAtual = infoData.getFullYear();
let meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

let setaRightCal = document.getElementById("setaRight");
let setaLeftCal = document.getElementById("setaLeft");

let evento = document.getElementsByClassName("evento");
let infoEvento = document.querySelector(".info");

for(let i=0; i<evento.length; i++){
    evento[i].addEventListener("click", dropdown(infoEvento));
}

calendarioMesMostrado(anoAtual, mesAtual);

document.getElementById("mes").innerText = meses[mesAtual];

setaRightCal.addEventListener("click", function () {
    mesAtual = mesAtual + 1;

    if (mesAtual > meses.length-1) {
        mesAtual = 0;
        anoAtual++;
    }

    document.getElementById("mes").innerText = meses[mesAtual];

    calendarioMesMostrado(anoAtual, mesAtual);
});

setaLeftCal.addEventListener("click", function () {
    mesAtual = mesAtual - 1;

    if (mesAtual < 0) {
        mesAtual = 11;
        anoAtual--;
    }

    document.getElementById("mes").innerText = meses[mesAtual];

    calendarioMesMostrado(anoAtual, mesAtual);
});

function calendarioMesMostrado(ano, mes) {
    let primeiroDiaSemana = (new Date(ano, mes)).getDay();
    let numeroDiasMes = (new Date(ano, mes + 1, 0)).getDate();
    console.log(numeroDiasMes);
    let dia = 0;
    let table = document.querySelector("tbody");

    table.innerHTML = '';

    for (let i = 0; i < 6; i++) {
        let tRow = document.createElement("tr");

        for (let j = 0; j < 7; j++) {
            let tCell = document.createElement("td");

            if ((i === 0 && j < primeiroDiaSemana)) {
                tCell.innerText = "";
                tCell.classList.add("other-month")
            } else {
                if (dia < numeroDiasMes) {
                    dia++;
                    tCell.innerText = dia;
                } else {
                    tCell.innerText = "";
                    tCell.classList.add("other-month")
                }
            }

            tRow.appendChild(tCell);
        }

        table.appendChild(tRow);
    }
}
