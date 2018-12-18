let id = window.location.search;
id = id.substring(id.indexOf("id=")+3);

console.log(id);

artigoDetail();

function artigoDetail() {
    fetch("https://jsonplaceholder.typicode.com/photos/" + id)
        .then(function(response) {
            return response.json();
        })
        .then(function(json) {
            console.log(json);

            document.querySelector(".carrinho").appendChild(article(json));
        });
}

function article(json) {
    let container = document.createElement("div");
    container.classList.add("row");

    let coluna1 = document.createElement("div");
    container.classList.add("col-2");

    let imagem = document.createElement("img");
    imagem.setAttribute("src", json.url);
    imagem.setAttribute("alt", json.title);
    imagem.setAttribute("width", "50px");

    coluna1.appendChild(imagem);


    let descricao = document.createElement("div");
    descricao.classList.add("col-10");
    descricao.innerText = json.title;

    container.appendChild(coluna1);
    container.appendChild(descricao);

    return container;
}

console.log(id);