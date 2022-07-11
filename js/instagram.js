fetch("./php/token-insta.php").then((response) =>
  response.json().then((data) => {
    //console.log(data);

    let instaContainer = document.querySelector("#insta-container");

    for (let i = 0; i < 10; i++) {
      let imgInsta = newElem("img", {
        src: data.data[i].media_url,
        id: `imgInsta${i}`,
        class:
          "arrInsta sm:w-1/6 w-32 object-cover mx-3 my-3 hover:grayscale hover:invert hover:scale-150 ease-in-out duration-1000",
        "data-link": data.data[i].permalink,
      });
      instaContainer.insertBefore(imgInsta, instaContainer.lastChild);
    }

    const frames = document.querySelectorAll(".arrInsta");
    const instaModal = document.querySelector("#instaModal");
    const btnCloseModal = document.querySelector("#btnCloseModal");
    const imgModal = document.querySelector("#imgModal");
    const linkModal = document.querySelector("#linkModal");

    frames.forEach((frame) => {
      frame.addEventListener("click", () => {
        imgModal.src = frame.src;
        instaModal.classList.remove("hidden");
        instaModal.classList.add("flex");
        instaModal.dataset.modal = "on";
        linkModal.href = frame.dataset.link;
      });
    });

    btnCloseModal.addEventListener("click", () => {
      instaModal.classList.add("hidden");
      instaModal.classList.remove("flex");
      instaModal.dataset.modal = "off";
    });

    instaModal.addEventListener("click", () => {
      instaModal.classList.add("hidden");
      instaModal.classList.remove("flex");
      instaModal.dataset.modal = "off";
    });
  })
);

/* Fonction pour créer des elements */
function newElem(el, attribut, content = "") {
  const newElem = document.createElement(el);
  const newContent = document.createTextNode(content);
  newElem.appendChild(newContent);
  for (let key in attribut) {
    newElem.setAttribute(key, attribut[key]);
  }
  return newElem;
}
