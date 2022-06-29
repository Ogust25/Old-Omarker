const page = document.querySelector("#page");
const nav = document.querySelector("#nav");
const bio = document.querySelector("#bio");

const formHome = document.querySelector("#formHome");
const btnFormHome = document.querySelector("#btnFormHome");
const inputNomPrenom = document.querySelector("#inputNomPrenom");
const inputEmail = document.querySelector("#inputEmail");
const inputMessage = document.querySelector("#inputMessage");
const validation = document.querySelector("#validationForm");
const erreurNomPrenom = document.querySelector("#erreurNomPrenom");
const erreurEmail = document.querySelector("#erreurEmail");
const erreurMessage = document.querySelector("#erreurMessage");

const regleNomPrenom =
  /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u;
const regleEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
const regleMessage =
  /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'()-]+$/u;

/* Formulaire Home*/
btnFormHome.addEventListener("click", () => {
  let resultatNomPrenom = regleNomPrenom.test(inputNomPrenom.value);
  let resultatEmail = regleEmail.test(inputEmail.value);
  let resultatMessage = regleMessage.test(inputMessage.value);
  if (
    resultatNomPrenom === true &&
    resultatEmail === true &&
    resultatMessage === true
  ) {
    formHome.addEventListener("submit", function (e) {
      e.preventDefault();
      let formData = new FormData(formHome);
      let url = "./php/formHome.php";
      fetch(url, {
        method: "POST",
        body: formData,
      })
        .then((response) => {
          return response.json();
        })
        .then((data) => {
          // console.log(data);
          validation.firstChild.nodeValue = data.validation;
          validation.classList.remove("invisible");
          return formHome.reset();
        });
    });
    erreurNomPrenom.classList.add("invisible");
    erreurEmail.classList.add("invisible");
    erreurMessage.classList.add("invisible");
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
  if (resultatMessage === false) {
    erreurMessage.classList.remove("invisible");
  } else {
    erreurMessage.classList.add("invisible");
  }
});

/* Evenement au scroll */
window.addEventListener("scroll", () => {
  let scrollY = this.scrollY;
  if (scrollY >= 775) {
    bio.classList.remove("invert");
    nav.classList.add("text-white");
  } else {
    bio.classList.add("invert");
    nav.classList.remove("text-white");
  }
});
