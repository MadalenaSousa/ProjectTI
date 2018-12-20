let id = window.location.search;
id = id.substring(id.indexOf("id=")+3);

let container = document.createElement("span");

let quantity = document.getElementById("quantity");
let remove = document.getElementById("remove");

artigoDetail();

function artigoDetail() {
    fetch("https://jsonplaceholder.typicode.com/photos/" + id)
        .then(function(response) {
            return response.json();
        })
        .then(function(json) {
            console.log(json);

            container.innerText = json.id + "€";

            quantity.addEventListener("click", function () {
                container.innerText = (json.id * quantity.value) + "€";
            });

            quantity.addEventListener("keyup", function () {
                container.innerText = (json.id * quantity.value) + "€";
            });

            document.querySelector(".carrinho .row .col-2").appendChild(article(json));
            document.querySelector(".carrinho .row .col-5").appendChild(info(json));

            document.querySelector("#preco").appendChild(container);
        });
}

function article(json) {
    let container = document.createElement("div");

    let imagem = document.createElement("img");
    imagem.setAttribute("src", json.thumbnailUrl);
    imagem.setAttribute("alt", json.title);
    imagem.classList.add("icon");

    container.appendChild(imagem);

    return container;
}

function info(json) {
    let container = document.createElement("div");

    let descricao = document.createElement("div");
    descricao.innerText = json.title;

    container.appendChild(descricao);

    return container;
}

remove.addEventListener("click", function () {
    document.querySelector(".carrinho").removeChild(document.getElementById("artigo"));
});