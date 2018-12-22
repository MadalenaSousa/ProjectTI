let artigo = document.getElementsByClassName("id");
let artigoQuantity = document.getElementsByClassName("quantity");

let tabela = document.querySelector("table");
let theader = document.createElement("thead");
let tbody = document.createElement("tbody");

theader.appendChild(cabecalho());
tabela.appendChild(theader);

artigoDetail(0);

tabela.appendChild(tbody);

let botaoQuantidade = document.getElementsByClassName("quantidade");
let precoArtigo = document.getElementsByClassName("precoArticle");

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

            tbody.appendChild(article(json, artigoQuantity[index].innerText));

            artigoDetail(index+1);

            botaoQuantidade[index].addEventListener("click", function () {
                precoArtigo[index].innerText = (json.id * botaoQuantidade[index].value) + "€";
            });

            botaoQuantidade[index].addEventListener("keyup", function () {
                precoArtigo[index].innerText = (json.id * botaoQuantidade[index].value) + "€";
            });
        });
}

function cabecalho() {
    let row = document.createElement("tr");

    let produto = document.createElement("th");
    produto.innerHTML = "<h3>Produto</h3>";

    let preco = document.createElement("th");
    preco.innerHTML = "<h3>Preço</h3>";

    let quantidade = document.createElement("th");
    quantidade.innerHTML = "<h3>Quantidade</h3>";

    let remover = document.createElement("th");
    remover.innerHTML = "<h3>Remover</h3>";

    row.appendChild(produto);
    row.appendChild(preco);
    row.appendChild(quantidade);
    row.appendChild(remover);

    return row;
}

function article(json, quant) {
    let row = document.createElement("tr");
    row.classList.add("rowCart");

    let produto = document.createElement("td");

    let imagem = document.createElement("img");
    imagem.setAttribute("src", json.thumbnailUrl);
    imagem.setAttribute("alt", json.title);
    imagem.classList.add("icon");

    let descricao = document.createElement("div");
    descricao.innerText = json.title;

    produto.appendChild(imagem);
    produto.appendChild(descricao);

    let quantidade = document.createElement("td");

    let formQuantity = document.createElement("form");
    formQuantity.setAttribute("method", "post");
    formQuantity.setAttribute("action", "php/changeQuantity.php");

    let hiddenQuantityId = document.createElement("input");
    hiddenQuantityId.setAttribute("type", "hidden");
    hiddenQuantityId.setAttribute("value", json.id);
    hiddenQuantityId.setAttribute("name", "id");

    let input = document.createElement("input");
    input.setAttribute("type", "number");
    input.setAttribute("name", "quantity");
    input.setAttribute("min", "1");
    input.setAttribute("value", quant);
    input.setAttribute("required", "true");
    input.classList.add("quantidade");

    formQuantity.appendChild(hiddenQuantityId);
    formQuantity.appendChild(input);

    quantidade.appendChild(formQuantity);


    let preco = document.createElement("td");
    preco.classList.add("precoArticle");
    preco.innerText = (json.id * input.value) + "€";


    let remover = document.createElement("td");

    let form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("action", "php/removeitens.php");

    let botao = document.createElement("input");
    botao.setAttribute("value", "x");
    botao.setAttribute("type", "submit");
    botao.classList.add("remover");

    let hiddenId = document.createElement("input");
    hiddenId.setAttribute("type", "hidden");
    hiddenId.setAttribute("value", json.id);
    hiddenId.setAttribute("name", "id");

    form.appendChild(hiddenId);
    form.appendChild(botao);

    remover.appendChild(form);


    row.appendChild(produto);
    row.appendChild(preco);
    row.appendChild(quantidade);
    row.appendChild(remover);

    return row;
}



