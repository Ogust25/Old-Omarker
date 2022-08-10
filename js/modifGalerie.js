const galeries = document.querySelectorAll('.boxGalerie');
const btnAnnuler = document.querySelector("#btnAnnuler");
const main = document.querySelector("#main");
const modal = document.querySelector("#modal");
const form = document.querySelector("#form");
const preview = document.querySelector("#preview");
let idGalerie = "";
let fetchType = "";
let modifType = "";
let table = "";
let local = "";

galeries.forEach(galerie => {
    galerie.addEventListener('click', () => {
        modal.classList.add("flex");
        modal.classList.remove("hidden");
        main.classList.add("hidden");
        main.classList.remove("flex");

        fetchType = galerie.dataset.fetch;  
        table = galerie.dataset.table;  
        local = galerie.dataset.local;  
        modifType = galerie.dataset.modif;     
        idGalerie = galerie.dataset.id;
        let id = galerie.dataset.id;
        let formData = new FormData();
        formData.append("id", id);
    
        fetch(`./models/fetch${fetchType}.php`, {
            method: "POST",
            body: formData,
        }).then((response) => {
            return response.json();
        }).then((data) => {
            //console.log(data);
            preview.src = data.img;
        });
    })
});

btnAnnuler.addEventListener("click", () => {
    main.classList.add("flex");
    main.classList.remove("hidden");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
});

form.addEventListener("submit", (e) => {
    e.preventDefault();
  
    let formData = new FormData(form);
    formData.append("id", idGalerie);
    formData.append("local", local);
    formData.append("table", table);
  
    fetch(`./models/modifGalerie.php`, {
      method: "POST",
      body: formData,
    }).then((response) => {
      return response.json();
    }).then((data) => {
      //console.log(data);
      location.reload();
    });
});