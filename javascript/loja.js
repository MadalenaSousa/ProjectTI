//Loja

artigos();
artigoDetail();

function artigos() {
    for(let i=0; i<10; i++) {
        fetch("https://jsonplaceholder.typicode.com/photos/1")
            .then(function(response) {
                return response.json();
            })
            .then(function(json) {
                console.log(json);

                document.querySelector(".grid-loja .row").appendChild(articleThumbnail(json));
                document.querySelector(".artigo .row").appendChild(article(json));
            });
    }
}

function artigoDetail() {
        fetch("https://jsonplaceholder.typicode.com/photos/1")
            .then(function(response) {
                return response.json();
            })
            .then(function(json) {
                console.log(json);

                document.querySelector(".artigo .row").appendChild(article(json));
            });
}

function articleThumbnail(json) {
    let container = document.createElement("div");
    container.classList.add("col-6");

    let link = document.createElement("a");
    link.setAttribute("href", "artigo.html");

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

function article(json) {
    let container = document.createElement("div");
    container.classList.add("col-4");

    let imagem = document.createElement("img");
    imagem.setAttribute("src", json.url);
    imagem.setAttribute("alt", json.title);

    let descricao = document.createElement("div");
    descricao.innerText = json.title;

    container.appendChild(imagem);

    return container;
}
