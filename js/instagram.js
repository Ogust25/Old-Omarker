fetch("./php/token-insta.php").then((response) =>
  response.json().then((data) => {
    const user = data.user;
    const token = data.token;

    fetch(
      `https://graph.instagram.com/me/media?fields=caption,media_url&access_token=${token}`
    ).then((response) =>
      response.json().then((data) => {
        //console.log(data);
        let instaContainer = document.querySelector("#insta-container");

        for (let i = 0; i < 5; i++) {
          let imgInsta = newElem("img", {
            src: data.data[i].media_url,
            id: `imgInsta${i}`,
            class: "w-1/6",
          });
          instaContainer.insertBefore(imgInsta, instaContainer.lastChild);
        }
      })
    );
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

/* AQCaSyljcPlaHwhCt_Z-tot6Fjw2h-mviFT-KFMNYO8VoeNFQlHBY1-tF5WQNTZvEgvySVkejPgMuOxacWRmZ_2cCx2s8HVMB_HIxfUgGPonU1PkkfpVo-aYolTHb1MQBBZMqwQEbqr13PzwcQe34Jsuh5XcSHDbO6C4HPknOS-zKy28vOPSuEtnCFN35uqFG6v2S7wsogK-6Mav2aq2_AYx04XeuwpmGVT13tNH2oIYgg */
