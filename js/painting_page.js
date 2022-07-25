const frames = document.querySelectorAll(".peinture");
const peintureModal = document.querySelector("#peintureModal");
const btnCloseModal = document.querySelector("#btnCloseModal");
const imgModal = document.querySelector("#imgModal");
const nomModal = document.querySelector("#nomModal");
const tailleModal = document.querySelector("#tailleModal");
const dateModal = document.querySelector("#dateModal");
const techModal = document.querySelector("#techModal");
const menu = document.querySelector("#menuPeinture");
const navMenu = document.querySelector("#navMenu");
const linkMenu = document.querySelectorAll(".linkMenu");

/* Event pour ouvrir/fermer les boites modale */
frames.forEach((frame) => {
  frame.addEventListener("click", () => {
    imgModal.src = frame.src;
    peintureModal.classList.remove("hidden");
    peintureModal.classList.add("flex");
    peintureModal.dataset.modal = "on";
    nomModal.childNodes[0].nodeValue = frame.dataset.nom;
    tailleModal.childNodes[0].nodeValue = frame.dataset.taille;
    dateModal.childNodes[0].nodeValue = frame.dataset.date;
    techModal.childNodes[0].nodeValue = frame.dataset.tech;
  });
});

/* Croix pour fermer la boite modal */
btnCloseModal.addEventListener("click", () => {
  peintureModal.classList.add("hidden");
  peintureModal.classList.remove("flex");
  peintureModal.dataset.modal = "off";
});

/* Cliquer dans le vide pour fermer la boite modal */
peintureModal.addEventListener("click", () => {
  peintureModal.classList.add("hidden");
  peintureModal.classList.remove("flex");
  peintureModal.dataset.modal = "off";
});

/* Fonction pour créer des elements */
function newElem(el, attribut, content = "") {
  const newElem = document.createElement(el);
  const newContent = document.createTextNode(content);
  newElem.appendChild(newContent);
  for (let key in attribut) {
    newElem.setAttribute(key, attribut[key]);
  }
  return newElem;
}

/* Event pour ouvrir/fermer le menu sur telephone */
menu.addEventListener("click", () => {
  toggleMenu();
});

linkMenu.forEach((link) => {
  link.addEventListener('click', () => {
    toggleMenu();
  })
})

/* Fonction pour ouvrir/fermer le menu sur telephone */
const toggleMenu = () => {
  if (menu.dataset.open === "false") {
    menu.dataset.open = true;
    navMenu.classList.add("bottom-0");
    navMenu.classList.remove("-bottom-50%");
    menu.firstChild.nodeValue = "X";
  } else {
    menu.dataset.open = false;
    navMenu.classList.remove("bottom-0");
    navMenu.classList.add("-bottom-50%");
    menu.firstChild.nodeValue = "MENU";
  }
}