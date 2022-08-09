const oeuvres = document.querySelectorAll(".boxOeuvre");
const btnAnnuler = document.querySelector("#btnAnnuler");
const main = document.querySelector("#main");
const modal = document.querySelector("#modal");
const form = document.querySelector("#form");

const inputImg = document.querySelector('#expoImg');
const inputNom = document.querySelector('#expoNom');
const inputTaille = document.querySelector('#expoTaille');
const inputTech = document.querySelector('#expoTech');
const inputDate = document.querySelector('#expoDate');
const preview = document.querySelector('#preview');
let idOeuvre = "";

btnAnnuler.addEventListener("click", () => {
  main.classList.add("flex");
  main.classList.remove("hidden");
  modal.classList.add("hidden");
  modal.classList.remove("flex");
});

oeuvres.forEach((oeuvre) => {
  oeuvre.addEventListener("click", () => {
    idOeuvre = oeuvre.dataset.id;
    modal.classList.add("flex");
    modal.classList.remove("hidden");
    main.classList.add("hidden");
    main.classList.remove("flex");

    let id = oeuvre.dataset.id;
    let formData = new FormData();
    formData.append("id", id);

    fetch("./models/fetchOeuvre.php", {
        method: "POST",
        body: formData,
    }).then((response) => {
        return response.json();
    }).then((data) => {
        //console.log(data);
        inputNom.value = data.nom;
        inputTaille.value = data.taille;
        inputTech.value = data.technique;
        inputDate.value = data.year;
        preview.src = data.img;
    });
  });
});

form.addEventListener("submit", (e) => {
    e.preventDefault();
  
    let formData = new FormData(form);
    formData.append("id", idOeuvre);
  
    fetch("./models/modifOeuvre.php", {
      method: "POST",
      body: formData,
    }).then((response) => {
      return response.json();
    }).then((data) => {
      //console.log(data);
      location.reload();
    });
});