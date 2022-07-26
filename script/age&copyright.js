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

heroDescription.innerHTML = "A " + calculateAge() + " year old webdeveloper.<br>\n" + "Want to learn more about me?"
profileDescription.innerHTML = "  My name is Mette. I am " + calculateAge() + " years old and I am a junior web developer.\n" +
    "                                <br>\n" +
    "                                Welcome to my portfolio website!\n" +
    "                                <br><br>\n" +
    "                                I am currently studying IT & Media Design at\n" +
    "                                Fontys University of Applied Sciences in Eindhoven 🇳🇱.\n" +
    " In September 2022, I will begin the second semester of my second year. In this half year I will do the specialization Smart Mobile. I hope this will allow me to learn even more about Mobile and Frontend development. In addition, I would really like to learn more about VueJS. " +
    "                                I am learning new things every day, so I am constantly improving my skills.\n" +
    "                                Feel free to have a look around."
copyrightEle.innerHTML = "Mette Ghijsen © " + currentYear + " - Update 1.0"
// +
// "                                <br>\n" + "<i>Inspired by " + "<a href=\"https://jordyarntz.com/\">Jordy Arntz</a></i>"
;