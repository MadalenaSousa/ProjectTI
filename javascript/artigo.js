let id = window.location.search;
id = id.substring(id.indexOf("id=")+3);

artigoDetail();

function artigoDetail() {
    fetch("https://jsonplaceholder.typicode.com/photos/" + id)
        .then(function(response) {
            return response.json();
        })
        .then(function(json) {
            console.log(json);

            document.querySelector(".artigo .row .col-4").appendChild(article(json));
            document.querySelector(".artigo .row .col-3").appendChild(infoArticle(json));
        });
}

function article(json) {
    let container = document.createElement("div");

    let imagem = document.createElement("img");
    imagem.setAttribute("src", json.url);
    imagem.setAttribute("alt", json.title);

    let descricao = document.createElement("div");
    descricao.innerText = json.title;

    container.appendChild(imagem);

    return container;
}

function infoArticle(json) {
    let container = document.createElement("div");

    let idItem = document.createElement("div");
    idItem.innerText = json.id;

    let descricaoItem = document.createElement("div");
    descricaoItem.innerText = json.title;

    container.appendChild(idItem);
    container.appendChild(descricaoItem);

    return container;
}