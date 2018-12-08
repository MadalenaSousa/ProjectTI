//Loja

let randNum;
let itens = [];

let checkCanecas = document.getElementById("canecas");
let checkTshirts = document.getElementById("tshirts");
let checkCanetas = document.getElementById("canetas");
let checkIsqueiros = document.getElementById("isqueiros");
let checkPortachaves = document.getElementById("portachaves");

artigos();

console.log(itens);

function artigos() {
    for(let i=0; i<6; i++) {
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
                console.log(json);

                document.querySelector(".grid-loja .row").appendChild(articleThumbnail(json));
                itens.push(json);
            });
    }
}

function articleThumbnail(json) {
    let container = document.createElement("div");
    container.classList.add("col-6");

    let link = document.createElement("a");
    link.setAttribute("href", "artigo.html?id=" + json.id);

    let imagem = document.createElement("img");
    imagem.setAttribute("src", json.thumbnailUrl);
    imagem.setAttribute("alt", json.title);

    let descricao = document.createElement("div");
    descricao.innerText = json.title;

    link.appendChild(imagem);
    link.appendChild(descricao);

    container.appendChild(link);

    return container;
}

filter();

function filter() {
    filteredItens = [];

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

    console.log(filteredItens);

    let container = document.querySelector(".grid-loja .row");
    container.innerHTML = "";
    
    for(let i=0; i<filteredItens.length; i++) {
        let contentorArtigo = document.createElement("div");
        contentorArtigo.classList.add("col-6");

        let link = document.createElement("a");
        link.setAttribute("href", "artigo.html?id=" + filteredItens[i].id);

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

checkCanecas.addEventListener("click", filter);
checkTshirts.addEventListener("click", filter);
checkCanetas.addEventListener("click", filter);
checkIsqueiros.addEventListener("click", filter);
checkPortachaves.addEventListener("click", filter);

//albumId = categoria 100/5 = 20, if(seleciona o check 1) { display albumId <= (100/5)*1} else if ...
//id = preço map(x, 0, 5000, 0, 50) if(input = valor) {display x < valor}
//?  = cor