//Hamburger menu
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");
const content = document.querySelector(".content")

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
    content.classList.toggle("nodisplay");
}

const navLink = document.querySelectorAll(".nav-link");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
    content.classList.remove("nodisplay");
}

// ScrollToTop
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

//Parallax Scroll
const determine_scroll=()=>{
    const scrollafstand = window.scrollY;
    const hoogte_pagina = document.querySelector("section").clientHeight;
    const hoogte = document.querySelector("section:nth-of-type(1)").offsetTop;
    document.querySelectorAll("section>div").forEach((pagina,index)=>{
        const start_rect_clip =(((index*hoogte_pagina) -scrollafstand)+hoogte)+"px";
        const end_rect_clip = (((index+1)*hoogte_pagina) - scrollafstand+hoogte)+"px";
        pagina.style.setProperty("clip","rect("+start_rect_clip+",auto,"+end_rect_clip+",0)")
    })
}

document.addEventListener("scroll",determine_scroll)
window.addEventListener("resize",determine_scroll)
determine_scroll()