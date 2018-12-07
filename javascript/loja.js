//Loja

artigos();

function artigos() {
    var headers = new Headers();
    headers.append("user-key", "gcxr7feektczgfpeymqazn2j");
    fetch("http://api.walmartlabs.com/v1/paginated/items?category=3944&specialOffer=rollback&apiKey={gcxr7feektczgfpeymqazn2j}&format=json", {headers: headers})
        .then(function(response) {
            return response.json();
        })
        .then(function(json) {
            console.log(json);

            document.querySelector(".grid-loja .row").appendChild(createArticle(json));
        });
}

function createArticle(json) {
    let container = document.createElement("div");
    container.classList.add("col-6");

    json.items.forEach(function () {
        let link = document.createElement("a");
        link.setAttribute("href", "artigo.html");

        let imagem = document.createElement("img");
        imagem.setAttribute("src", json.thumbnailImage);
        imagem.setAttribute("alt", json.name);

        let picture = document.createElement("picture");
        picture.appendChild(imagem);

        let descricao = document.createElement("div");
        descricao.innerText = json.name;

        let preco = document.createElement("div");
        preco.innerText = json.salePrice;

        link.appendChild(imagem);
        link.appendChild(descricao);
        link.appendChild(preco);
    });

    container.appendChild(link);

    return container;
}