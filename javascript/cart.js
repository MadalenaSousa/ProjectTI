let artigo = document.getElementsByClassName("id");

let tabela = document.querySelector(".carrinho table");
tabela.appendChild(cabecalho());

artigoDetail();

let botaoRemover = document.getElementsByClassName("remover");
let botaoQuantidade = document.getElementsByClassName("quantidade");
let rowCarrinho = document.getElementsByClassName("rowCart");
let precoArtigo = document.getElementsByClassName("precoArticle");

function artigoDetail() {
    for(let i=0; i<artigo.length; i++) {
        if(artigo[i].innerText !== 'Ainda não adicionou artigos ao seu carrinho.') {
            fetch("https://jsonplaceholder.typicode.com/photos/" + artigo[i].innerText)
                .then(function (response) {
                    return response.json();
                })
                .then(function (json) {
                    console.log(json);

                    tabela.appendChild(article(json));


                    botaoRemover[i].addEventListener("click", function () {
                        tabela.removeChild(rowCarrinho[i]);
                    });

                    botaoQuantidade[i].addEventListener("click", function () {
                        precoArtigo[i].innerText = (json.id * botaoQuantidade[i].value) + "€";
                    });

                    botaoQuantidade[i].addEventListener("keyup", function () {
                        precoArtigo[i].innerText = (json.id * botaoQuantidade[i].value) + "€";
                    });
                });
        }
    }
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

function article(json) {
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

    let input = document.createElement("input");
    input.setAttribute("type", "number");
    input.setAttribute("name", "quantity");
    input.setAttribute("min", "1");
    input.setAttribute("value", "1");
    input.classList.add("quantidade");

    quantidade.appendChild(input);


    let preco = document.createElement("td");
    preco.classList.add("precoArticle");
    preco.innerText = (json.id * input.value) + "€";


    let remover = document.createElement("td");

    let botao = document.createElement("input");
    botao.setAttribute("value", "x");
    botao.setAttribute("type", "submit");
    botao.classList.add("remover");

    remover.appendChild(botao);


    row.appendChild(produto);
    row.appendChild(preco);
    row.appendChild(quantidade);
    row.appendChild(remover);

    return row;
}



