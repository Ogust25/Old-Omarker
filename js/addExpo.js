const btnAddExpo = document.querySelectorAll('.btnAddExpo');
const btnAnnuler = document.querySelector('#btnAnnuler');
const main = document.querySelector('#main');
const modal = document.querySelector('#modal');
const form = document.querySelector('#formAdd');
let type = "";

btnAddExpo.forEach(btn => {
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

form.addEventListener('submit', (e) => {
  e.preventDefault();
  
  let formData = new FormData(form);
  formData.append("type", type)

  fetch('./models/addExpo.php', {
      method: "POST",
      body: formData
  })
  .then((response) => {
      return response.json();   
  }).then((data) => {
    //console.log(data);
  });

  main.classList.add("flex");
  main.classList.remove("hidden");
  modal.classList.add("hidden");
  modal.classList.remove("flex");
})
