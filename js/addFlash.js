const btnAddFlash = document.querySelector("#btnAddFlash");
const btnAnnuler = document.querySelector("#btnAnnuler");
const main = document.querySelector("#main");
const modal = document.querySelector("#modal");
const form = document.querySelector("#formAdd");
const preview = document.querySelector("#preview");
const inputFiles = document.querySelector("#expoImg");

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

inputFiles.addEventListener('change', () => {
    preview.src = window.URL.createObjectURL(inputFiles.files[0]);
})

form.addEventListener("submit", (e) => {
  e.preventDefault();

  let formData = new FormData(form);

  fetch("./models/addFlash.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => {
      return response.json();
    })
    .then((data) => {
      console.log(data);
    });

  main.classList.add("flex");
  main.classList.remove("hidden");
  modal.classList.add("hidden");
  modal.classList.remove("flex");
});
