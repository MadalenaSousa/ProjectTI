//Eventos

//Função dropmenu
function dropdown(menu) {
    let conteudo = menu;

    return function() {
        conteudo.classList.toggle("show");
    };
}

//Calendário
let infoData = new Date();
let mesAtual = infoData.getMonth();
let anoAtual = infoData.getFullYear();
let meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

let setaRightCal = document.getElementById("setaRight");
let setaLeftCal = document.getElementById("setaLeft");

calendarioMesMostrado(anoAtual, mesAtual);

document.getElementById("mes").innerText = meses[mesAtual];

setaRightCal.addEventListener("click", function () { //Avança um mês quando clica na seta da direita
    mesAtual = mesAtual + 1;

    if (mesAtual > meses.length-1) { //Mudança de ano
        mesAtual = 0;
        anoAtual++;
    }

    document.getElementById("mes").innerText = meses[mesAtual]; //Update do texto do botão

    calendarioMesMostrado(anoAtual, mesAtual); //Update do calendário

    eventoCal(objeto1);
    eventoCal(objeto2);
    eventoCal(objeto3);
});

setaLeftCal.addEventListener("click", function () { //Recua um mês quando clica na seta da esquerda
    mesAtual = mesAtual - 1;

    if (mesAtual < 0) { //Mudança de ano
        mesAtual = 11;
        anoAtual--;
    }

    document.getElementById("mes").innerText = meses[mesAtual]; //Update do texto do botão

    calendarioMesMostrado(anoAtual, mesAtual); //Update do calendário

    eventoCal(objeto1);
    eventoCal(objeto2);
    eventoCal(objeto3);
});

function calendarioMesMostrado(ano, mes) {
    let primeiroDiaSemana = (new Date(ano, mes)).getDay();
    let numeroDiasMes = (new Date(ano, mes + 1, 0)).getDate();
    let dia = 0;
    let table = document.querySelector("tbody");

    table.innerHTML = ''; //Limpa calendário

    for (let i = 0; i < 6; i++) { //Cria o novo calendário
        let tRow = document.createElement("tr");

        for (let j = 0; j < 7; j++) {
            let tCell = document.createElement("td");

            if ((i === 0 && j < primeiroDiaSemana)) {
                tCell.innerText = "--";
                tCell.classList.add("other-month")
            } else {
                if (dia < numeroDiasMes) {
                    dia++;
                    tCell.innerText = dia;
                } else {
                    tCell.innerText = "--";
                    tCell.classList.add("other-month")
                }
            }

            tRow.appendChild(tCell);
        }

        table.appendChild(tRow);
    }
}

//Informação

//Objetos Eventos
let objeto1 = {
    tipo: "Exposição",
    descricao: "Exposição Audiovisual dos projetos da empresa MMDesign",
    local: "Universidade de Coimbra - Polo 1",
    linkLocal: "https://www.google.com/maps/search/universidade+de+coimbra/@40.2006872,-8.4341488,14z/data=!3m1!4b1",
    hora: "16:00",
    data: "2018, 12, 16"
};

let objeto2 = {
    tipo: "Workshop",
    descricao: "Workshop de HTML/CSS/JavaScript",
    local: "Universidade de Coimbra - Polo 2",
    linkLocal: "https://www.google.com/maps/search/universidade+de+coimbra/@40.2006872,-8.4341488,14z/data=!3m1!4b1",
    hora: "18:00",
    data: "2018, 12, 13"
};

let objeto3 = {
    tipo: "Jantar de Natal",
    descricao: "Tradicional jantar de Natal da empresa MMDesign",
    local: "Pancinhas",
    linkLocal: "https://www.google.com/maps/search/universidade+de+coimbra/@40.2006872,-8.4341488,14z/data=!3m1!4b1",
    hora: "20:00",
    data: "2018, 12, 22"
};

function criarInfoEvento(evento) {
    //Contentor
    let container = document.createElement("div");

    //Tipo
    let tipoElem = document.createElement("h3");
    tipoElem.innerText = evento.tipo;

    //Descrição
    let descricaoElem = document.createElement("div");
    descricaoElem.innerText = evento.descricao;

    //Local
    let containerLocal = document.createElement("div");

    let localTitleElem = document.createElement("em");
    localTitleElem.innerText = "Local: ";

    let localElem = document.createElement("a");
    localElem.setAttribute("href", evento.linkLocal);
    localElem.setAttribute("target", "_blank");
    localElem.innerText = evento.local;

    containerLocal.appendChild(localTitleElem);
    containerLocal.appendChild(localElem);

    //Hora
    let containerHora = document.createElement("div");

    let horaTitleElem = document.createElement("em");
    horaTitleElem.innerText = "Hora: ";

    let horaElem = document.createElement("span");
    horaElem.innerText = evento.hora;

    containerHora.appendChild(horaTitleElem);
    containerHora.appendChild(horaElem);

    //Encher o contentor
    container.appendChild(tipoElem);
    container.appendChild(descricaoElem);
    container.appendChild(containerLocal);
    container.appendChild(containerHora);

    container.classList.add("info");

    document.getElementById("eventoInfoMes").appendChild(container);

    let data = new Date(evento.data);
    if(mesAtual != data.getMonth()) {
        document.getElementById("eventoInfoMes").innerHTML = "";
    }

    return container;
}

function eventoCal(evento){
    let nome = document.createElement("div");
    nome.innerText = evento.tipo;
    nome.classList.add("evento");
    let elementInfo = criarInfoEvento(evento);
    nome.addEventListener("click", dropdown(elementInfo));

    let data = new Date(evento.data);
    console.log(data);
    let celula = document.getElementsByTagName("td");

    for(let i=0; i<celula.length; i++){
        if(celula[i].innerText == data.getDate() && mesAtual == data.getMonth() && anoAtual == data.getFullYear()){
            celula[i].appendChild(nome);
        }
    }

    return nome;
}

eventoCal(objeto1);
eventoCal(objeto2);
eventoCal(objeto3);