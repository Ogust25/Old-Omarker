const frames = document.querySelectorAll(".peinture");
const flashs = document.querySelectorAll(".flash");
const peintureModal = document.querySelector("#peintureModal");
const btnCloseModal = document.querySelector("#btnCloseModal");
const imgModal = document.querySelector("#imgModal");
const nomModal = document.querySelector("#nomModal");
const tailleModal = document.querySelector("#tailleModal");
const dateModal = document.querySelector("#dateModal");
const techModal = document.querySelector("#techModal");
const menu = document.querySelector("#menuPeinture");
const navMenu = document.querySelector("#navMenu");
const nav = document.querySelector("#nav");
const linkMenu = document.querySelectorAll(".linkMenu");
const btnFlash = document.querySelector("#btnFlash");
const flashModal = document.querySelector("#flashModal");
const flashChoisi = document.querySelector("#flashChoisi");
const btnCloseModalFlash = document.querySelector("#btnCloseModalFlash");
const previewFlash = document.querySelector("#previewFlash");

/* Event pour ouvrir les boites modale pour tattoo*/
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

/* Event pour ouvrir les boites modale pour flash */
flashs.forEach((flash) => {
  flash.addEventListener("click", () => {
    imgModal.src = flash.src;
    flashModal.classList.remove("hidden");
    flashModal.classList.add("flex");
    flashModal.dataset.modal = "on";
  });

  btnFlash.addEventListener("click", () => {
    previewFlash.src = flash.src;
    window.location.href = "#contact";
  });
});

previewFlash.addEventListener("click", (event) => {
  event.preventDefault();
});

/* Croix pour fermer la boite modal pour tattoo */
btnCloseModal.addEventListener("click", () => {
  peintureModal.classList.add("hidden");
  peintureModal.classList.remove("flex");
  peintureModal.dataset.modal = "off";
});

/* Cliquer dans le vide pour fermer la boite modal pour tattoo */
peintureModal.addEventListener("click", () => {
  peintureModal.classList.add("hidden");
  peintureModal.classList.remove("flex");
  peintureModal.dataset.modal = "off";
});

/* Croix pour fermer la boite modal pour flash */
btnCloseModalFlash.addEventListener("click", () => {
  flashModal.classList.add("hidden");
  flashModal.classList.remove("flex");
  flashModal.dataset.modal = "off";
});

/* Cliquer dans le vide pour fermer la boite modal pour flash */
flashModal.addEventListener("click", () => {
  flashModal.classList.add("hidden");
  flashModal.classList.remove("flex");
  flashModal.dataset.modal = "off";
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
  link.addEventListener("click", () => {
    toggleMenu();
  });
});

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
};

/* Scrpit pour que le textarea resize auto */
const tx = document.getElementsByTagName("textarea");
for (let i = 0; i < tx.length; i++) {
  tx[i].setAttribute(
    "style",
    "height:" + tx[i].scrollHeight + "px;overflow-y:hidden;"
  );
  tx[i].addEventListener("input", OnInput, false);
}

function OnInput() {
  this.style.height = "auto";
  this.style.height = this.scrollHeight + "px";
}

/* Preview pour le flash choisis */
const output = document.getElementById("previewFlash");
const flashFile = document.querySelector("#flashChoisi");

flashFile.addEventListener("change", (event) => {
  output.src = URL.createObjectURL(event.target.files[0]);
  output.onload = function () {
    URL.revokeObjectURL(output.src); // free memory
  };
});

/* Evenement au scroll */
window.addEventListener("scroll", () => {
  let scrollY = this.scrollY;
  if (scrollY >= 2600) {
    nav.classList.add("text-white");
    navMenu.classList.add("md:text-white");
    navMenu.classList.remove("md:text-black");
  } else {
    nav.classList.remove("text-white");
    navMenu.classList.remove("md:text-white");
    navMenu.classList.add("md:text-black");
  }
});
