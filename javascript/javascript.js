console.log(document.querySelector(".paginas .col-1:nth-child(2)"));

let botaoPortfolio = document.querySelector(".paginas .col-1:nth-child(2)");


botaoPortfolio.addEventListener("click", function () {
    document.querySelector("nav .list").classList.toggle("show");
});
