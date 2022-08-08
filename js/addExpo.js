const btnAddExpo = document.querySelectorAll(".btnAddExpo");
const btnAnnuler = document.querySelector("#btnAnnuler");
const btnMAnnuler = document.querySelector("#btnMAnnuler");
const btnSuppr = document.querySelector("#btnSuppr");
const main = document.querySelector("#main");
const modal = document.querySelector("#modal");
const modalSuppr = document.querySelector("#modalSuppr");
const form = document.querySelector("#formAdd");
const formModif = document.querySelector("#formModif");
let type = "";

btnAddExpo.forEach((btn) => {
  btn.addEventListener("click", () => {
    modal.classList.add("flex");
    modal.classList.remove("hidden");
    main.classList.add("hidden");
    main.classList.remove("flex");
    type = btn.dataset.type;
  });
});

btnAnnuler.addEventListener("click", () => {
  main.classList.add("flex");
  main.classList.remove("hidden");
  modal.classList.add("hidden");
  modal.classList.remove("flex");
});

btnMAnnuler.addEventListener("click", () => {
  main.classList.add("flex");
  main.classList.remove("hidden");
  modalSuppr.classList.add("hidden");
  modalSuppr.classList.remove("flex");
});

form.addEventListener("submit", (e) => {
  e.preventDefault();

  let formData = new FormData(form);
  formData.append("type", type);

  fetch("./models/addExpo.php", {
    method: "POST",
    body: formData,
  }).then((response) => {
    return response.json();
  }).then((data) => {
    //console.log(data);
    location.reload();
  });
});

const expos = document.querySelectorAll(".boxExpo");
const inputNom = document.querySelector('#expoMNom');
const inputLieu = document.querySelector('#expoMLieu');
const inputDate = document.querySelector('#expoMDate');
let nom = "";
let idExpo = "";

expos.forEach((expo) => {
  expo.addEventListener("click", () => {
    
    idExpo = expo.dataset.idexpo;
    type = expo.dataset.type;
    nom = expo.childNodes[3].firstChild.nodeValue;
    modalSuppr.classList.add("flex");
    modalSuppr.classList.remove("hidden");
    main.classList.add("hidden");
    main.classList.remove("flex");

    let formData = new FormData();
    formData.append("nom", nom);

    fetch("./models/fetchExpo.php", {
      method: "POST",
      body: formData,
    }).then((response) => {
        return response.json();
    }).then((data) => {
        //console.log(data);
        inputNom.value = data.nom;
        inputLieu.value = data.lieu;
        inputDate.value = data.year;
    });
  }); 
});

btnSuppr.addEventListener('click', () => {
  let formData = new FormData();
  formData.append("nom", nom);

  fetch("./models/supprExpo.php", {
    method: "POST",
    body: formData,
  }).then((response) => {
    return response.json();
  }).then((data) => {
    //console.log(data);
    location.reload();
  });
})

formModif.addEventListener("submit", (e) => {
  e.preventDefault();

  let formData = new FormData(formModif);
  formData.append("type", type);
  formData.append("id", idExpo);

  fetch("./models/modifExpo.php", {
    method: "POST",
    body: formData,
  }).then((response) => {
    return response.json();
  }).then((data) => {
    //console.log(data);
    location.reload();
  });
});