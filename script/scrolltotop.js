const toTopEle = document.getElementById("gotopbutton");

window.addEventListener("scroll", () => {
    if (window.pageYOffset > 400) {
        toTopEle.style.transform = "scale(1)";
        toTopEle.style.opacity = "1";
        toTopEle.style.pointerEvents = "all";
    }
    else if (window.pageYOffset < 400) {
        toTopEle.style.transform = "scale(0)";
        toTopEle.style.opacity = "0";
        toTopEle.style.pointerEvents = "none";
    }
})