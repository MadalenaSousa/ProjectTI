let botaoRemover = document.getElementsByClassName("remover");
let rowCarrinho = document.getElementsByClassName("rowCart");

for(let i=0; i<botaoRemover.length; i++) {
    botaoRemover[i].addEventListener("click", function () {
        tbody.removeChild(rowCarrinho[i]);
    });
}
