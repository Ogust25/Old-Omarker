const frames = document.querySelectorAll(".tattoo");
const flashs = document.querySelectorAll(".flash");
const peintureModal = document.querySelector("#peintureModal");
const btnCloseModal = document.querySelector("#btnCloseModal");
const imgModal = document.querySelector("#imgModal");
const imgModalFlash = document.querySelector("#imgModalFlash");
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
  });
});

/* Event pour ouvrir les boites modale pour flash */
let flashSrc = "";
flashs.forEach((flash) => {
  flash.addEventListener("click", () => {
    imgModalFlash.src = flash.src;
    flashModal.classList.remove("hidden");
    flashModal.classList.add("flex");
    flashModal.dataset.modal = "on";
    flashSrc = flash.src;
  });

  btnFlash.addEventListener("click", () => {
    previewFlash.src = flashSrc;
    window.location.href = "#contact";
  });
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

/* Formulaire pour tattoo */
const formTattoo = document.querySelector("#formTattoo");
const btnFormTattoo = document.querySelector("#btnFormTattoo");
/* Tattoo Choisi */
const inputNomPrenom = document.querySelector("#inputNomPrenom");
const inputEmail = document.querySelector("#inputEmail");
const projetFlash = document.querySelector("#projetFlash");
const emplacmentFlash = document.querySelector("#emplacmentFlash");
const tailleFlash = document.querySelector("#tailleFlash");
const budgetFlash = document.querySelector("#budgetFlash");
const validation = document.querySelector("#validationForm");
const erreurNomPrenom = document.querySelector("#erreurNomPrenom");
const erreurEmail = document.querySelector("#erreurEmail");
const erreurProjet = document.querySelector("#erreurProjet");
const erreurEmplacement = document.querySelector("#erreurEmplacment");
const erreurTaille = document.querySelector("#erreurTaille");
const erreurBudget = document.querySelector("#erreurBudget");

const regleNomPrenom =
  /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u;
const regleEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
const regleProjet =
  /^[a-zA-Z0-9àáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'()\r\n-]+$/u;
const regleEmplacement =
  /^[a-zA-Z0-9àáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'()-]+$/u;
const regleTaille =
  /^[a-zA-Z0-9àáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'()-]+$/u;
const regleBudget =
  /^[a-zA-Z0-9àáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'()-]+$/u;

formTattoo.addEventListener("submit", function (e) {
  e.preventDefault();
  let resultatNomPrenom = regleNomPrenom.test(inputNomPrenom.value);
  let resultatEmail = regleEmail.test(inputEmail.value);
  let resultatProjet = regleProjet.test(projetFlash.value);
  let resultatEmplacement = regleEmplacement.test(emplacmentFlash.value);
  let resultatTaille = regleTaille.test(tailleFlash.value);
  let resultatBudget = regleBudget.test(budgetFlash.value);
  let flashChoisi = previewFlash.src;

  if (
    resultatNomPrenom === true &&
    resultatEmail === true &&
    resultatProjet === true &&
    resultatEmplacement === true &&
    resultatTaille === true &&
    resultatBudget === true
  ) {
    let formData = new FormData(formTattoo);
    formData.append("flashChoisi", flashChoisi);
    let url = "./php/formTattoo.php";
    fetch(url, {
      method: "POST",
      body: formData,
    })
      .then((response) => {
        return response.json();
      })
      .then((data) => {
        console.log(data);
        validation.firstChild.nodeValue = data.validation;
        validation.classList.remove("invisible");
        return formTattoo.reset();
      });

    erreurNomPrenom.classList.add("invisible");
    erreurEmail.classList.add("invisible");
    erreurProjet.classList.add("invisible");
    erreurEmplacement.classList.add("invisible");
    erreurTaille.classList.add("invisible");
    erreurBudget.classList.add("invisible");
  }
  if (resultatNomPrenom === false) {
    erreurNomPrenom.classList.remove("invisible");
  } else {
    erreurNomPrenom.classList.add("invisible");
  }
  if (resultatEmail === false) {
    erreurEmail.classList.remove("invisible");
  } else {
    erreurEmail.classList.add("invisible");
  }
  if (resultatProjet === false) {
    erreurProjet.classList.remove("invisible");
  } else {
    erreurProjet.classList.add("invisible");
  }

  if (resultatEmplacement === false) {
    erreurEmplacement.classList.remove("invisible");
  } else {
    erreurEmplacement.classList.add("invisible");
  }
  if (resultatTaille === false) {
    erreurTaille.classList.remove("invisible");
  } else {
    erreurTaille.classList.add("invisible");
  }
  if (resultatBudget === false) {
    erreurBudget.classList.remove("invisible");
  } else {
    erreurBudget.classList.add("invisible");
  }
});


/* Spy Scroll */
const spyScrolling = () => {
  const sections = document.querySelectorAll( '.scrollSpy' );

  window.onscroll = () => {
    const scrollPos = document.documentElement.scrollTop || document.body.scrollTop;

    for ( let s in sections )
      if ( sections.hasOwnProperty( s ) && sections[ s ].offsetTop <= scrollPos ) {
        const id = sections[ s ].id;
        document.querySelector( '.active' ).classList.remove( 'active' );
        document.querySelector( `a[href*=${ id }]` ).parentNode.classList.add( 'active' );
      }
  } 
}

spyScrolling();


/* Evenement au scroll */
window.addEventListener("scroll", () => {
  const target = document.querySelector('#spyTarget');
  if (target.classList.contains('active')) {
    nav.classList.add("text-white");
    navMenu.classList.add("md:text-white");
    navMenu.classList.remove("md:text-black");
  } else {
    nav.classList.remove("text-white");
    navMenu.classList.remove("md:text-white");
    navMenu.classList.add("md:text-black");
  }
});