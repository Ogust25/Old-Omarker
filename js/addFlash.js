const btnAddFlash = document.querySelector("#btnAddFlash");
const btnAnnuler = document.querySelector("#btnAnnuler");
const btnSuppr = document.querySelector("#btnSuppr");
const btnMAnnuler = document.querySelector("#btnMAnnuler");
const main = document.querySelector("#main");
const modal = document.querySelector("#modal");
const modalModif = document.querySelector("#modalModif");
const form = document.querySelector("#formAdd");
const preview = document.querySelector("#preview");
const previewM = document.querySelector("#previewM");
const inputFiles = document.querySelector("#expoImg");
const inputFilesM = document.querySelector("#expoMImg");

btnAddFlash.addEventListener("click", () => {
  modal.classList.add("flex");
  modal.classList.remove("hidden");
  main.classList.add("hidden");
  main.classList.remove("flex");
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
  modalModif.classList.add("hidden");
  modalModif.classList.remove("flex");
});

inputFiles.addEventListener('change', () => {
  preview.src = window.URL.createObjectURL(inputFiles.files[0]);
})

inputFilesM.addEventListener('change', () => {
  previewM.src = window.URL.createObjectURL(inputFilesM.files[0]);
})

form.addEventListener("submit", (e) => {
  e.preventDefault();

  let formData = new FormData(form);

  fetch("./models/addFlash.php", {
    method: "POST",
    body: formData,
  }).then((response) => {
    return response.json();
  }).then((data) => {
    //console.log(data);
    location.reload();
  });
});

const flashs = document.querySelectorAll('.boxFlash');
const inputPrix = document.querySelector('#expoMPrix');
let nom = "";
let idFlash = "";

flashs.forEach(flash => {
  flash.addEventListener('click', () => {

    idFlash = flash.dataset.id;
    nom = flash.childNodes[1].src;
    modalModif.classList.add("flex");
    modalModif.classList.remove("hidden");
    main.classList.add("hidden");
    main.classList.remove("flex");

    let formData = new FormData();
    formData.append("nom", nom);

    fetch("./models/fetchFlash.php", {
      method: "POST",
      body: formData,
    }).then((response) => {
      return response.json();
    }).then((data) => {
      //console.log(data);
      previewM.src = data.img;
      inputPrix.value = data.prix;
    });
  })
});

btnSuppr.addEventListener('click', () => {
  let formData = new FormData();
  formData.append("nom", nom);

  fetch("./models/supprFlash.php", {
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
  formData.append("id", idFlash);

  fetch("./models/modifFlash.php", {
    method: "POST",
    body: formData,
  }).then((response) => {
    return response.json();
  }).then((data) => {
    //console.log(data);
    location.reload();
  });
});