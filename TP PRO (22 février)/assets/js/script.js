/* :::::::::::::::::::::::::::::::::
MEN NAVIG PLEIN ECRAN
::::::::::::::::::::::::::::::::: */

const button = document.querySelector('button');
const nav = document.querySelector('nav');
const backdrop = document.querySelector('.backdrop');

button.addEventListener('click', () => {
  nav.classList.add('open');
});

backdrop.addEventListener('click', () => {
    nav.classList.remove('open');
    });

/* :::::::::::::::::::::::::::::::::
GENERATEUR DE CITATIONS
::::::::::::::::::::::::::::::::: */
let newCitation   = document.querySelector('#newCitation');
let citation  = document.querySelector('#citations');
let authorCitation    = document.querySelector('#author');

let final   = 0;
let numberAleator = 0;
let citations = [
  [" Le réaliste s'il est un artiste, cherchera, non pas à nous montrer la photographie banale de la vie, mais à nous en donner la vision plus complète, plus saississante, plus probante que la réalité même. ", "Guy de Maupassant"],
  [" La photographie c'est un art; c'est mieux qu'un art, c'est le phénomène solaire où l'artiste collabore avec le soleil. ", "Lamartine"],
  [" La vie est une succession d'instants et de rencontres que seule la photographie a le pouvoir d'immortaliser. ", "Szczepan Yamenski"],
  [" Ce que l'oeil humain ne perçoit pas, la photographie vous le révélera. ", "Monique Moreau"],
  [" Une photographie est tel un médium, elle fige le passé, elle lit le présent et fait l'avenir. ", "Serge Delaune"],
  [" La photographie n'est pas une simple perception visuelle. C'est d'abord de l'émotion ressentie, puis restituée. ", "Richard Dansou"],
  [" Photographier, c'est mettre sur la même ligne de mire la tête, l'oeil et le coeur. ", "H. Cartier Bressoon"],
  [" La photographie existe pour aider les gens à voir. ", "Bérénice Abbott"],
  [" Je ne crois pas les mots, je crois les images. ", "Gille Peress"],
];

// Fonction permettant de générer un nombre aléatoire
function genererNombreEntier(max) {
  return Math.floor(Math.random() * Math.floor(max));
}

newCitation.addEventListener('click', () => {
  do {
    numberAleator = genererNombreEntier(citations.length);
  } while (numberAleator == final)
    
  citation.textContent = citations[numberAleator][0];
  authorCitation.textContent   = citations[numberAleator][1];
  final              = numberAleator;
});

// ANIMATION DES TITRES DE SECTION
$(document).ready(() => {
  let typed = new Typed(".titlePicture", {
  strings: ["Galerie Photos", "Picture Gallery", "Galería de fotos"],
  typeSpeed: 120,
  backSpeed: 100,
  loop: true
});
});

$(document).ready(() => {
  let typed = new Typed(".titleVideo", {
  strings: ["Galerie Vidéos", "Video gallery", "Galeria de video"],
  typeSpeed: 120,
  backSpeed: 100,
  loop: true
});
});


