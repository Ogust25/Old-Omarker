const btnPeinture = document.querySelector("#btnPeinture");
const btnTattoo = document.querySelector("#btnTattoo");
const btnGraphisme = document.querySelector("#btnGraphisme");
const menuPeinture = document.querySelector("#menuPeinture");
const menuTattoo = document.querySelector("#menuTattoo");
const menuGraphisme = document.querySelector("#menuGraphisme");

btnPeinture.addEventListener("click", () => {
  menuPeinture.classList.add("flex");
  menuPeinture.classList.remove("hidden");
  menuTattoo.classList.add("hidden");
  menuTattoo.classList.remove("flex");
  menuGraphisme.classList.add("hidden");
  menuGraphisme.classList.remove("flex");
});

btnTattoo.addEventListener("click", () => {
  menuTattoo.classList.add("flex");
  menuTattoo.classList.remove("hidden");
  menuPeinture.classList.add("hidden");
  menuPeinture.classList.remove("flex");
  menuGraphisme.classList.add("hidden");
  menuGraphisme.classList.remove("flex");
});

btnGraphisme.addEventListener("click", () => {
  menuGraphisme.classList.add("flex");
  menuGraphisme.classList.remove("hidden");
  menuTattoo.classList.add("hidden");
  menuTattoo.classList.remove("flex");
  menuPeinture.classList.add("hidden");
  menuPeinture.classList.remove("flex");
});

const contentDiv = document.querySelector("#content");
const btnMur = document.querySelector("#btnMur");
btnMur.addEventListener("click", () => {
  callController("galerie");
});

const btnOeuvre = document.querySelector("#btnOeuvre");
btnOeuvre.addEventListener("click", () => {
  callController("oeuvre");
});

const btnExpo = document.querySelector("#btnExpo");
btnExpo.addEventListener("click", () => {
  callController("expo");
});

const btnWorkshop = document.querySelector("#btnWorkshop");
btnWorkshop.addEventListener("click", () => {
  callController("galerie");
});

function callController(nom) {
  let url = `./controllers/backoffice_${nom}.php`;
  fetch(url, {
    method: "POST",
  })
    .then((response) => {
      return response.text();
    })
    .then((data) => {
      contentDiv.innerHTML = data;
    });
}