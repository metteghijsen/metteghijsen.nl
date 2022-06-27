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

heroDescription.innerHTML = "A " + calculateAge() + " year old junior web developer.<br>\n" + "Want to learn more about me?"
profileDescription.innerHTML = "  My name is Mette. I am " + calculateAge() + " years old and I am a junior web developer.\n" +
    "                                <br>\n" +
    "                                Welcome to my portfolio website!\n" +
    "                                <br><br>\n" +
    "                                I am currently studying IT & Media Design at\n" +
    "                                Fontys University of Applied Sciences in Eindhoven 🇳🇱.\n" +
    "                                I am learning new things every day, so I am constantly improving my skills.\n" +
    "                                Feel free to have a look around."
copyrightEle.innerHTML = "Mette Ghijsen © " + currentYear + " - Update 1.0" +
    "                                <br>\n" + "<i>Inspired by " + "<a href=\"https://jordyarntz.com/\">Jordy Arntz</a></i>";

//Cursor
const cursor = document.querySelector('#cursor');
const cursorCircle = cursor.querySelector('.cursor__circle');

const mouse = { x: -100, y: -100 }; // mouse pointer's coordinates
const pos = { x: 0, y: 0 }; // cursor's coordinates
const speed = 0.1; // between 0 and 1

const updateCoordinates = e => {
    mouse.x = e.clientX;
    mouse.y = e.clientY;
}

window.addEventListener('mousemove', updateCoordinates);


function getAngle(diffX, diffY) {
    return Math.atan2(diffY, diffX) * 180 / Math.PI;
}

function getSqueeze(diffX, diffY) {
    const distance = Math.sqrt(
        Math.pow(diffX, 2) + Math.pow(diffY, 2)
    );
    const maxSqueeze = 0.15;
    const accelerator = 1500;
    return Math.min(distance / accelerator, maxSqueeze);
}


const updateCursor = () => {
    const diffX = Math.round(mouse.x - pos.x);
    const diffY = Math.round(mouse.y - pos.y);

    pos.x += diffX * speed;
    pos.y += diffY * speed;

    const angle = getAngle(diffX, diffY);
    const squeeze = getSqueeze(diffX, diffY);

    const scale = 'scale(' + (1 + squeeze) + ', ' + (1 - squeeze) +')';
    const rotate = 'rotate(' + angle +'deg)';
    const translate = 'translate3d(' + pos.x + 'px ,' + pos.y + 'px, 0)';

    cursor.style.transform = translate;
    cursorCircle.style.transform = rotate + scale;
};

function loop() {
    updateCursor();
    requestAnimationFrame(loop);
}

requestAnimationFrame(loop);

const cursorModifiers = document.querySelectorAll('[cursor-class]');

cursorModifiers.forEach(curosrModifier => {
    curosrModifier.addEventListener('mouseenter', function() {
        const className = this.getAttribute('cursor-class');
        cursor.classList.add(className);
    });

    curosrModifier.addEventListener('mouseleave', function() {
        const className = this.getAttribute('cursor-class');
        cursor.classList.remove(className);
    });
});