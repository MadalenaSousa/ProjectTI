console.log(document.querySelector(".paginas .col-1:nth-child(2)"));

let botaoPortfolio = document.querySelector(".paginas .col-1:nth-child(2)");

botaoPortfolio.addEventListener("click", function () {

    var newItem = document.createElement("div");
    newItem.innerHTML = "<div class=\"options\">\n" +
        "                                <div>\n" +
        "                                    <a href=\"portfolio.html\">\n" +
        "                                        2018\n" +
        "                                    </a>\n" +
        "                                </div>\n" +
        "                                <div>\n" +
        "                                    <a href=\"\">\n" +
        "                                        2017\n" +
        "                                    </a>\n" +
        "                                </div>\n" +
        "                                <div>\n" +
        "                                    <a href=\"\">\n" +
        "                                        2016\n" +
        "                                    </a>\n" +
        "                                </div>\n" +
        "                            </div>";

    botaoPortfolio.appendChild(newItem);
});

