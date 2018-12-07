//Dropdown das imagens
let seta = document.querySelectorAll(".seta");
let texto = document.querySelectorAll(".texto");


for(let i=0; i<texto.length; i++){
    seta[i].addEventListener("click", dropdown(texto[i]));

    seta[i].addEventListener("click",function () {
        if (seta[i].alt == "Seta") {
            seta[i].src = "imagens/setaInvertida.png";
            seta[i].alt= "SetaInv";
        }
        else {
            seta[i].src = "imagens/seta.png";
            seta[i].alt= "Seta";
        }
    });
}