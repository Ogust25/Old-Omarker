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

/* Les sous btn pour afficher les vue */
const contentDiv = document.querySelector("#content");
const btnOeuvre = document.querySelector("#btnOeuvre");
const btnWorkshop = document.querySelector("#btnWorkshop");
const btnTatouage = document.querySelector("#btnTatouage");
const btnExpo = document.querySelector("#btnExpo");
const btnFlash = document.querySelector("#btnFlash");
const btnDirArt = document.querySelector("#btnDirArt");
const btnIdVisu = document.querySelector("#btnIdVisu");
const btnPrint = document.querySelector("#btnPrint");
const btnMur = document.querySelector("#btnMur");


btnMur.addEventListener("click", () => {
  callGalerie("mur");
});

btnOeuvre.addEventListener("click", () => {
  callController("oeuvre");
});

btnExpo.addEventListener("click", () => {
  callController("expo");
  
  var yourCodeToBeCalled = function(){
    const btnAddExpo = document.querySelector('#btnAddExpo');
    btnAddExpo.addEventListener("click", () => {
      console.log("test");
    });
  }
   loadJS("./js/test.js", yourCodeToBeCalled, document.body);

});

btnWorkshop.addEventListener("click", () => {
  callGalerie("workshop");
});

btnTatouage.addEventListener("click", () => {
  callGalerie("tattoo");
});

btnFlash.addEventListener("click", () => {
  callController("flash");
});

btnDirArt.addEventListener("click", () => {
  callGalerie("dirart");
});

btnIdVisu.addEventListener("click", () => {
  callGalerie("idvisu");
});

btnPrint.addEventListener("click", () => {
  callGalerie("print");
});


/* Fonction pour affichier les vue */
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

/* Fonction pour affichier la galerie souhaitée */
function callGalerie(nom) {
  let formData = new FormData();
  formData.append("nom", nom);
  let url = `./controllers/backoffice_galerie.php`;
  fetch(url, {
    method: "POST",
    body: formData,
  })
    .then((response) => {
      return response.text();
    })
    .then((data) => {
      contentDiv.innerHTML = data;
    });
}

var loadJS = function(url, implementationCode, location){
  //url is URL of external file, implementationCode is the code
  //to be called from the file, location is the location to 
  //insert the <script> element

  var scriptTag = document.createElement('script');
  scriptTag.src = url;

  scriptTag.onload = implementationCode;
  scriptTag.onreadystatechange = implementationCode;

  location.appendChild(scriptTag);
};