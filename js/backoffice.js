const btnPeinture = document.querySelector("#btnPeinture");
const btnTattoo = document.querySelector("#btnTattoo");
const btnGraphisme = document.querySelector("#btnGraphisme");
const menuPeinture = document.querySelector("#menuPeinture");
const menuTattoo = document.querySelector("#menuTattoo");
const menuGraphisme = document.querySelector("#menuGraphisme");

/* Les 3 btn pour naviguer dans les trois menus */
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