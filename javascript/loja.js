//Loja

let randNum;
let itens = [];

let checkCanecas = document.getElementById("canecas");
let checkTshirts = document.getElementById("tshirts");
let checkCanetas = document.getElementById("canetas");
let checkIsqueiros = document.getElementById("isqueiros");
let checkPortachaves = document.getElementById("portachaves");

let colors = ["orange", "purple", "white", "black", "yellow", "green", "cyan", "blue", "red", "pink"];

let orange = document.getElementById("orange");
let purple = document.getElementById("purple");
let white = document.getElementById("white");
let black = document.getElementById("black");
let yellow = document.getElementById("yellow");
let green = document.getElementById("green");
let cyan = document.getElementById("cyan");
let blue = document.getElementById("blue");
let red = document.getElementById("red");
let pink = document.getElementById("pink");

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

artigos();

function artigos() {
    for(let i=0; i<6; i++) {
        let randColor = colors[Math.floor(Math.random() * colors.length)];

        function random(min, max) {
                min = Math.ceil(min);
                max = Math.floor(max);
                return Math.floor(Math.random() * (max - min)) + min;
        }

        randNum = random(1, 5001);

        fetch("https://jsonplaceholder.typicode.com/photos/" + randNum)
            .then(function(response) {
                return response.json();
            })
            .then(function(json) {
                //console.log(json);

                document.querySelector(".grid-loja .row").appendChild(articleThumbnail(json));
                itens.push(json);

                json.color = randColor;
            });
    }
}

function articleThumbnail(json) {
    let container = document.createElement("div");
    container.classList.add("col-6");

    let link = document.createElement("a");
    link.setAttribute("href", "artigo.php?id=" + json.id);

    let imagem = document.createElement("img");
    imagem.setAttribute("src", json.thumbnailUrl);
    imagem.setAttribute("alt", json.title);

    let descricao = document.createElement("div");
    descricao.innerText = json.title;

    let preco = document.createElement("div");
    preco.innerText = json.id + "€";

    link.appendChild(imagem);
    link.appendChild(descricao);
    link.appendChild(preco);

    container.appendChild(link);

    return container;
}

filterCategoria();

//Nota: Usamos a propriedade albumId como condição para a categoria
function filterCategoria() {
    let filteredItens = [];

    for(let i=0; i<6; i++) {
        if (checkCanecas.checked === false && checkTshirts.checked === false && checkCanetas.checked === false && checkIsqueiros.checked === false && checkPortachaves.checked === false) {
            filteredItens = itens;
        } else if (checkCanecas.checked === true && itens[i].albumId <= (100 / 5)) {
            filteredItens.push(itens[i]);
        } else if (checkTshirts.checked === true && itens[i].albumId <= ((100 / 5) * 2) && itens[i].albumId > (100 / 5)) {
            filteredItens.push(itens[i]);
        } else if (checkCanetas.checked === true && itens[i].albumId <= ((100 / 5) * 3) && itens[i].albumId > ((100 / 5)*2)) {
            filteredItens.push(itens[i]);
        } else if (checkIsqueiros.checked === true && itens[i].albumId <= ((100 / 5) * 4) && itens[i].albumId > ((100 / 5)*3)) {
            filteredItens.push(itens[i]);
        } else if (checkPortachaves.checked === true && itens[i].albumId <= ((100 / 5) * 5) && itens[i].albumId > ((100 / 5)*4)) {
            filteredItens.push(itens[i]);
        }
    }

    //console.log(filteredItens);

    let container = document.querySelector(".grid-loja .row");
    container.innerHTML = "";

    for(let i=0; i<filteredItens.length; i++) {
        let contentorArtigo = document.createElement("div");
        contentorArtigo.classList.add("col-6");

        let link = document.createElement("a");
        link.setAttribute("href", "artigo.php?id=" + filteredItens[i].id);

        let imagem = document.createElement("img");
        imagem.setAttribute("src", filteredItens[i].thumbnailUrl);
        imagem.setAttribute("alt", filteredItens[i].title);

        let descricao = document.createElement("div");
        descricao.innerText = filteredItens[i].title;

        link.appendChild(imagem);
        link.appendChild(descricao);

        contentorArtigo.appendChild(link);

        container.appendChild(contentorArtigo);
    }
}

checkCanecas.addEventListener("click", filterCategoria);
checkTshirts.addEventListener("click", filterCategoria);
checkCanetas.addEventListener("click", filterCategoria);
checkIsqueiros.addEventListener("click", filterCategoria);
checkPortachaves.addEventListener("click", filterCategoria);

filterCor();

function filterCor() {
    let filteredItens = [];

    for(let i=0; i<6; i++) {
        if (!orange.classList.contains("border") && !purple.classList.contains("border") && !white.classList.contains("border") && !black.classList.contains("border") && !yellow.classList.contains("border") && !green.classList.contains("border") && !cyan.classList.contains("border") && !blue.classList.contains("border") && !red.classList.contains("border") && !pink.classList.contains("border")) {
            filteredItens = itens;
        } else if (orange.classList.contains("border") && itens[i].color === "orange") {
            filteredItens.push(itens[i]);
        } else if (purple.classList.contains("border") && itens[i].color === "purple") {
            filteredItens.push(itens[i]);
        } else if (white.classList.contains("border") && itens[i].color === "white") {
            filteredItens.push(itens[i]);
        } else if (black.classList.contains("border") && itens[i].color === "black") {
            filteredItens.push(itens[i]);
        } else if (yellow.classList.contains("border") && itens[i].color === "yellow") {
            filteredItens.push(itens[i]);
        } else if (green.classList.contains("border") && itens[i].color === "green") {
            filteredItens.push(itens[i]);
        } else if (cyan.classList.contains("border") && itens[i].color === "cyan") {
            filteredItens.push(itens[i]);
        } else if (blue.classList.contains("border") && itens[i].color === "blue") {
            filteredItens.push(itens[i]);
        } else if (red.classList.contains("border") && itens[i].color === "red") {
            filteredItens.push(itens[i]);
        } else if (pink.classList.contains("border") && itens[i].color === "pink") {
            filteredItens.push(itens[i]);
        }
    }

    //console.log(filteredItens);

    let container = document.querySelector(".grid-loja .row");
    container.innerHTML = "";

    for(let i=0; i<filteredItens.length; i++) {
        let contentorArtigo = document.createElement("div");
        contentorArtigo.classList.add("col-6");

        let link = document.createElement("a");
        link.setAttribute("href", "artigo.php?id=" + filteredItens[i].id);

        let imagem = document.createElement("img");
        imagem.setAttribute("src", filteredItens[i].thumbnailUrl);
        imagem.setAttribute("alt", filteredItens[i].title);

        let descricao = document.createElement("div");
        descricao.innerText = filteredItens[i].title;

        link.appendChild(imagem);
        link.appendChild(descricao);

        contentorArtigo.appendChild(link);

        container.appendChild(contentorArtigo);
    }
}

orange.addEventListener("click", filterCor);
purple.addEventListener("click", filterCor);
white.addEventListener("click", filterCor);
black.addEventListener("click", filterCor);
yellow.addEventListener("click", filterCor);
green.addEventListener("click", filterCor);
cyan.addEventListener("click", filterCor);
blue.addEventListener("click", filterCor);
red.addEventListener("click", filterCor);
pink.addEventListener("click", filterCor);

let preco = document.getElementById("price");

preco.addEventListener("change", filterPreco);

function filterPreco() {
    console.log(preco.value);

    let filteredItens = [];

    for(let i=0; i<6; i++) {
        if (itens[i].id <= preco.value) {
            filteredItens.push(itens[i]);
        }
    }

    console.log(filteredItens);

    let container = document.querySelector(".grid-loja .row");
    container.innerHTML = "";

    for(let i=0; i<filteredItens.length; i++) {
        let contentorArtigo = document.createElement("div");
        contentorArtigo.classList.add("col-6");

        let link = document.createElement("a");

        link.setAttribute("href", "artigo.php?id=" + filteredItens[i].id);

        let imagem = document.createElement("img");
        imagem.setAttribute("src", filteredItens[i].thumbnailUrl);
        imagem.setAttribute("alt", filteredItens[i].title);

        let descricao = document.createElement("div");
        descricao.innerText = filteredItens[i].title;

        link.appendChild(imagem);
        link.appendChild(descricao);

        contentorArtigo.appendChild(link);

        container.appendChild(contentorArtigo);
    }
}
