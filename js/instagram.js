fetch("./php/token-insta.php").then((response) =>
  response.json().then((data) => {
    console.log(data);

    let instaContainer = document.querySelector("#insta-container");

    for (let i = 0; i < 10; i++) {
      let imgInsta = newElem("img", {
        src: data.data[i].media_url,
        id: `imgInsta${i}`,
        class:
          "w-1/6 mx-3 my-3 hover:grayscale hover:invert hover:scale-150 ease-in-out duration-1000",
      });
      instaContainer.insertBefore(imgInsta, instaContainer.lastChild);
    }
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
