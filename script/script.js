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
    } else if (window.pageYOffset < 400) {
        toTopEle.style.transform = "scale(0)";
        toTopEle.style.opacity = "0";
        toTopEle.style.pointerEvents = "none";
    }
})

//Parallax Scroll
const determine_scroll = () => {
    const scrollafstand = window.scrollY;
    const hoogte_pagina = document.querySelector("section").clientHeight;
    const hoogte = document.querySelector("section:nth-of-type(1)").offsetTop;
    document.querySelectorAll("section>div").forEach((pagina, index) => {
        const start_rect_clip = (((index * hoogte_pagina) - scrollafstand) + hoogte) + "px";
        const end_rect_clip = (((index + 1) * hoogte_pagina) - scrollafstand + hoogte) + "px";
        pagina.style.setProperty("clip", "rect(" + start_rect_clip + ",auto," + end_rect_clip + ",0)")
    })
}

document.addEventListener("scroll", determine_scroll)
window.addEventListener("resize", determine_scroll)
determine_scroll()

//Leeftijd en Copyrightjaar automatisch updaten

let copyrightEle = document.getElementById("copyright");
let heroDescription = document.getElementById("description");
let profileDescription = document.getElementById("description2");

let current = new Date();
let birthday = new Date("05/02/2003");
currentYear = current.getFullYear();

const calculateAge = () => {
    const ageDifMs = Date.now() - new Date(birthday).getTime();
    const ageDate = new Date(ageDifMs);
    return Math.abs(ageDate.getUTCFullYear() - 1970);
}

heroDescription.innerHTML = "An " + calculateAge() + " year old junior web developer.<br>\n" + "Want to learn more about me?"
profileDescription.innerHTML = "  My name is Mette. I am " + calculateAge() + " years old and I am a junior web developer.\n" +
    "                                <br>\n" +
    "                                Welcome to my portfolio website!\n" +
    "                                <br><br>\n" +
    "                                I am currently studying IT & Media Design at\n" +
    "                                Fontys University of Applied Sciences in Eindhoven 🇳🇱.\n" +
    "                                I am learning new things every day, so I am constantly improving my skills.\n" +
    "                                Feel free to have a look around."
copyrightEle.innerHTML = "Mette Ghijsen © " + currentYear + " - Update 1.0";