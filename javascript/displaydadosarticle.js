let artigoContainer = document.getElementsByClassName("idDisplay");
let display = document.getElementsByClassName("img-descricao-article");

artigoDisplay(0);

function artigoDisplay(index) {
    if (index >= artigoContainer.length) {
        return;
    }

    fetch("https://jsonplaceholder.typicode.com/photos/" + artigoContainer[index].innerText)
        .then(function (response) {
            return response.json();
        })
        .then(function (json) {
            console.log(json);

            display[index].appendChild(articleSmall(json));

            artigoDisplay(index+1);

        });
}

function articleSmall(json) {
    let container = document.createElement("div");

    let imagem = document.createElement("img");
    imagem.setAttribute("src", json.thumbnailUrl);
    imagem.setAttribute("alt", json.title);
    imagem.classList.add("icon");

    let descricao = document.createElement("div");
    descricao.innerHTML = "<h5>Descrição: </h5>" + json.title;

    container.appendChild(imagem);
    container.appendChild(descricao);

    return container;
}