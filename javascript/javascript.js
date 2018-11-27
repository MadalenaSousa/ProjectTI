document.querySelectorAll("nav [class*='col-'].empty img").addEventListener("click", function () {
    this.style.cssText = "backgroundColor: blue";
});