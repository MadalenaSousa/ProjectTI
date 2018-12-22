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

let artigo = document.getElementsByClassName("id");
let quantity = document.getElementsByClassName("quant");
let lista = document.querySelector("header .list-itens");

artigoDetail(0);

function artigoDetail(index) {
    if (index >= artigo.length) {
        return;
    }

    fetch("https://jsonplaceholder.typicode.com/photos/" + artigo[index].innerText)
        .then(function (response) {
            return response.json();
        })
        .then(function (json) {
            console.log(json);

            lista.appendChild(article(json, quantity[index].innerText));

            artigoDetail(index+1);

        });
}

function article(json, quant) {
    let link = document.createElement("a");
    link.setAttribute("href", "artigo.php?id=" + json.id);

    let row = document.createElement("div");
    row.classList.add("col-1");

    let imagem = document.createElement("img");
    imagem.setAttribute("src", json.thumbnailUrl);
    imagem.setAttribute("alt", json.title);
    imagem.setAttribute("width", "30px");
    imagem.classList.add("icon");

    let descricao = document.createElement("span");
    descricao.innerText = " " + json.id + "€" + " ";
    descricao.style.fontSize = "10pt";

    let quantidade = document.createElement("span");
    quantidade.innerText = "x" + quant;
    quantidade.style.fontSize = "10pt";

    row.appendChild(imagem);
    row.appendChild(descricao);
    row.appendChild(quantidade);

    link.appendChild(row);

    return link;
}

