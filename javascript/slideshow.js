//SlideShow
let imageSources = ["imagens/slideshow1.jpg", "imagens/slideshow2.jpg", "imagens/slideshow3.jpg"];

let currentIndex = 0;

setInterval(function () {
    currentIndex = currentIndex + 1;

    if (currentIndex >= imageSources.length) {
        currentIndex = 0;
    }

    document.querySelector(".carousel img").setAttribute("src", imageSources[currentIndex]);
}, 3000);