// Menu

const menu = document.querySelector(".menu");
const xmark = document.querySelector(".xmark");
const linksParent = document.querySelector(".links");
const links = document.querySelectorAll(".links a");
const body = document.body;

menu.addEventListener("click", () => {
    linksParent.classList.toggle("hidden");
    body.classList.toggle("overflow-hidden");
});
xmark.addEventListener("click", () => {
    linksParent.classList.toggle("hidden");
    body.classList.toggle("overflow-hidden");
});
links.forEach((link) => {
    link.addEventListener("click", () => {
        linksParent.classList.toggle("hidden");
        body.classList.toggle("overflow-hidden");
    });
});

// Slider

let currentSlide = 1;
const slideData = [
    {
        title: "Espagne",
        paragraph:
            "L'Espagne est une destination de choix pour les étudiants internationaux en quête d'une éducation de qualité dans un cadre exceptionnel. Avec des universités de renom et un environnement propice à l'apprentissage, l'Espagne offre une myriade d'opportunités académiques.",
        imageSrc: "storage/pays/spain.png",
    },
    {
        title: "France",
        paragraph:
            "La France est depuis longtemps reconnue pour son système éducatif de classe mondiale, offrant une variété de programmes académiques prestigieux. En tant qu'étudiant international, choisir la France comme destination d'études vous ouvre les portes vers une éducation d'excellence, une riche culture et des opportunités professionnelles passionnantes.",
        imageSrc: "storage/pays/france.png",
    },
    {
        title: "Belgique",
        paragraph:
            "La Belgique est une destination éducative exceptionnelle qui séduit de nombreux étudiants internationaux grâce à son système d'enseignement diversifié et de haute qualité. Cette nation européenne accueille non seulement des universités de renom, mais aussi des hautes écoles renforcées par une approche pragmatique de l'apprentissage.",
        imageSrc: "storage/pays/belgium.png",
    },
    {
        title: "Turquie",
        paragraph:
            "La Turquie se distingue comme une destination éducative de choix, offrant une combinaison unique d'histoire, de culture et d'éducation de qualité. L'une des caractéristiques les plus attrayantes pour les étudiants internationaux est la garantie d'admission offerte par de nombreuses institutions éducatives turques.",
        imageSrc: "storage/pays/turkie.png",
    },
    {
        title: "Allemagne ",
        paragraph:
            "L'Allemagne est un choix privilégié pour les étudiants internationaux en quête d'une éducation de haute qualité au cœur de l'Europe. Ce pays se distingue par son excellence académique, sa recherche de pointe et sa diversité culturelle.",
        imageSrc: "storage/pays/germany.png",
    },
    {
        title: "Italie",
        paragraph:
            "L'Italie est bien plus qu'une destination touristique de renom. C'est également un lieu privilégié pour les étudiants internationaux à la recherche d'une éducation de qualité, d'une culture riche et d'un coût abordable pour leurs études.",
        imageSrc: "storage/pays/italie.png",
    },
];

const sliderContainer = document.getElementById("sliderContainer");
const imageElement = document.querySelector(".slider-img");
const paragraphElement = document.querySelector(".slider-p");
const titleElement = document.querySelector(".slider-title");
const rightArrow = document.querySelector(".right-arrow");
const leftArrow = document.querySelector(".left-arrow");

function updateContent(slideIndex) {
    const currentSlide = slideData[slideIndex];
    imageElement.src = currentSlide.imageSrc;
    titleElement.textContent = currentSlide.title;
    paragraphElement.textContent = currentSlide.paragraph;
}

function startInterval() {
    intervalId = setInterval(() => {
        if (currentSlide == slideData.length) {
            currentSlide = 0;
        }
        updateContent(currentSlide);
        currentSlide++;
    }, 5000);
}

startInterval();

rightArrow.addEventListener("click", () => {
    clearInterval(intervalId);
    if (currentSlide == slideData.length) {
        currentSlide = 0;
        updateContent(currentSlide);
    } else {
        updateContent(currentSlide);
        currentSlide++;
    }
    startInterval();
});

leftArrow.addEventListener("click", () => {
    clearInterval(intervalId);
    if (currentSlide == 0) {
        currentSlide = slideData.length - 1;
        updateContent(currentSlide);
    } else {
        currentSlide--;
        updateContent(currentSlide);
    }
    startInterval();
});
