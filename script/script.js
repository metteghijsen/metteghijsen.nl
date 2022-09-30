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

//Cursor
const cursor = document.querySelector('#cursor');
const cursorCircle = cursor.querySelector('.cursor__circle');

const mouse = {x: -100, y: -100}; // mouse pointer's coordinates
const pos = {x: 0, y: 0}; // cursor's coordinates
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

    const scale = 'scale(' + (1 + squeeze) + ', ' + (1 - squeeze) + ')';
    const rotate = 'rotate(' + angle + 'deg)';
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
    curosrModifier.addEventListener('mouseenter', function () {
        const className = this.getAttribute('cursor-class');
        cursor.classList.add(className);
    });

    curosrModifier.addEventListener('mouseleave', function () {
        const className = this.getAttribute('cursor-class');
        cursor.classList.remove(className);
    });
});

//Content filter

// const items = document.getElementsByClassName("item");
// let allButton = document.getElementById("allBtn");
// let designButton = document.getElementById("designBtn");
// let webDesignButton = document.getElementById("webDesignBtn");
// let webDevelopmentButton = document.getElementById("webDevelopmentBtn");
// let mobileDevelopmentButton = document.getElementById("mobileDevelopmentBtn");
// let fakeButton = document.getElementById("fakeButton")
// let buttonArray = [allButton, designButton, webDesignButton, webDevelopmentButton, mobileDevelopmentButton, fakeButton];
//
// allButton.addEventListener("click", (event) => showTag(event, 'all'));
// designButton.addEventListener("click", (event) => showTag(event, 'design'));
// webDesignButton.addEventListener("click", (event) => showTag(event, 'webDesign'));
// webDevelopmentButton.addEventListener("click", (event) => showTag(event, 'webDevelopment'));
// mobileDevelopmentButton.addEventListener("click", (event) => showTag(event, 'mobileDevelopment'));
//
// showTag = (event, tag) => {
//     for (let i = 0; i < items.length; i++) {
//         if (items[i].dataset.tags.includes(tag)) {
//             items[i].style.display = "flex";
//         } else {
//             items[i].style.display = "none";
//         }
//     }
// }
//
// buttonArray.forEach(button => {
//     button.addEventListener('click', () => {
//         buttonArray.forEach(selectedButton => {
//                 if (selectedButton.classList.contains('filter-clicked')) {
//                     selectedButton.classList.remove('filter-clicked')
//                 } else {
//                     button.classList.add('filter-clicked')
//                 }
//             }
//         )
//     })
// })