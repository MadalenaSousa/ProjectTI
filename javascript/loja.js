//Loja

let randNum;
let itens = [];

artigos();

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
    container.classList.add("item");

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

//albumId = categoria 100/5 = 20, if(seleciona o check 1) { display albumId <= (100/5)*1} else if ...
//id = preço map(x, 0, 5000, 0, 50) if(input = valor) {display x < valor}
//?  = cor