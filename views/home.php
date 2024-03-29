<!DOCTYPE html>
<html class="scroll-smooth" lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Primary Meta Tags -->
    <title>Omarker | Home</title>
    <meta name="title" content="Omarker | Home" />
    <meta
      name="description"
      content="Site web de l'artiste Omarker, peintre et tatoueur."
    />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://omarker.fr/" />
    <meta property="og:title" content="Omarker | Home" />
    <meta
      property="og:description"
      content="Site web de l'artiste Omarker, peintre et tatoueur."
    />
    <meta property="og:image" content="./assets/images/blaze.png" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://omarker.fr/" />
    <meta property="twitter:title" content="Omarker | Home" />
    <meta
      property="twitter:description"
      content="Site web de l'artiste Omarker, peintre et tatoueur."
    />
    <meta property="twitter:image" content="./assets/images/blaze.png" />

    <!-- Links / Scripts -->
    <link rel="stylesheet" href="./dist/output.css" />
    <link
      rel="shortcut icon"
      href="./assets/images/blaze.png"
      type="image/x-icon"
    />
  </head>
  <body class="overflow-x-hidden">
    <div class="h-full bg-bg-main bg-cover" id="page">
      <nav
        class="fixed top-0 left-1/2 transform -translate-x-1/2 z-30"
        id="nav"
      >
        <ul class="flex font-bebas pt-5 text-xl sm:text-3xl">
          <li class="mr-5 sm:mr-10 lg:mr-20 tracking-widest hover:font-bold">
            <a href="./">HOME</a>
          </li>
          <li class="mr-5 sm:mr-10 lg:mr-20 tracking-widest hover:font-bold">
            <a href="./peinture">PEINTURE</a>
          </li>
          <li class="mr-5 sm:mr-10 lg:mr-20 tracking-widest hover:font-bold">
            <a href="./tattoo">TATTOO</a>
          </li>
          <li class="tracking-widest hover:font-bold">
            <a href="./graphisme">GRAPHISME</a>
          </li>
        </ul>
      </nav>
      <header
        class="h-screen flex flex-col items-center justify-center relative bg-insta bg-cover invert"
      >
        <img
          class="w-11/12 lg:w-8/12 floatAnimation invert"
          src="./assets/images/blaze.png"
          alt="Logo Omarker"
        />
        <img
          class="absolute bottom-0 right-0"
          src="./assets/images/gradient_black.png"
          alt="habillage gradient noir"
        />
      </header>
      <!-- Biographie -->
      <section
        class="h-screen bg-cover bg-bio bg-center relative duration-500 ease-out invert"
        id="bio"
      >
        <div
          class="hidden verticalTxt md:flex text-Jorange font-G-Ultra text-9xl overflow-hidden absolute bottom-0 left-5 h-full rotate-180 scale-x-200"
        >
          <span class="infiniteAnimation whitespace-nowrap">BIOGRAPHIE</span>
          <span class="infiniteAnimation whitespace-nowrap">BIOGRAPHIE</span>
        </div>
        <div
          class="bg-white absolute -bottom-20% sm:-bottom-10% lg:-bottom-1/4 right-0 w-5/6 sm:w-2/3 lg:w-1/4 p-10 font-bebas z-10"
        >
          <p class="mb-5">
            Artiste pluridisciplinaire, Omarker explore les supports et les
            médiums à travers sa pratique de la peinture, du tatouage et du
            design graphique.
          </p>
          <p class="mb-5">
            Son travail, à mi-chemin entre art urbain et design graphique
            contemporain, se caractérise par un ensemble d’éléments graphiques,
            de dynamiques et de lettres fragmentés qui s’oppose et se superpose,
            créant un rythme dans un ensemble abstrait.
          </p>
          <p>
            Omarker tente d’adapter son langage et ses codes au travers des
            supports et des techniques tout en conservant un aspect brut et un
            équilibre des éléments qui composent l’image.
          </p>
        </div>
      </section>
      <!-- Formulaire -->
      <section
        class="h-full bg-neg relative flex flex-col items-center bg-right pt-5 pb-20"
        id="contact"
      >
        <div
          class="hidden verticalTxt lg:flex text-white font-G-Ultra text-9xl overflow-hidden absolute bottom-0 right-0 h-full scale-x-200"
        >
          <span class="infiniteAnimation whitespace-nowrap">CONTACT</span>
          <span class="infiniteAnimation whitespace-nowrap">CONTACT</span>
          <span class="infiniteAnimation whitespace-nowrap">CONTACT</span>
        </div>
        <form
          class="flex flex-col font-G-Bold w-11/12 sm:w-8/12 lg:w-1/2 mt-52 lg:mt-36"
          method="post"
          id="formHome"
        >
          <input
            class="border-b border-white bg-transparent placeholder:text-white placeholder:text-xl lg:placeholder:text-2xl text-xl lg:text-2xl text-white pb-2 focus:border-Jblue focus:border-b-2 focus:outline-none"
            placeholder="Nom Prénom"
            id="inputNomPrenom"
            name="nomPrenom"
            type="text"
            pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+"
            required
          />
          <p
            class="invisible pt-2 pb-2 lg:pb-5 text-sm text-gray-400 text-right font-G-Light"
            id="erreurNomPrenom"
          >
            Veuillez retirer les caractères spéciaux.
          </p>
          <input
            class="border-b border-white bg-transparent placeholder:text-white placeholder:text-xl lg:placeholder:text-2xl text-xl lg:text-2xl text-white pb-2 focus:border-Jblue focus:border-b-2 focus:outline-none"
            placeholder="Email"
            id="inputEmail"
            type="email"
            name="email"
            pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}"
            required
          />
          <p
            class="invisible pt-2 pb-2 lg:pb-5 text-sm text-gray-400 text-right font-G-Light"
            id="erreurEmail"
          >
            Veuillez entrer une adresse mail valide.
          </p>
          <textarea
            class="border-b border-white bg-transparent placeholder:text-white placeholder:text-xl lg:placeholder:text-2xl text-xl lg:text-2xl text-white pb-2 focus:border-Jblue focus:border-b-2 focus:outline-none resize-none"
            placeholder="Message"
            id="inputMessage"
            rows="6"
            name="message"
            required
          ></textarea>
          <p
            class="invisible pt-2 text-sm text-gray-400 text-right font-G-Light"
            id="erreurMessage"
          >
            Veuillez retirer les caractères spéciaux.
          </p>
          <button
            class="text-white hover:text-Jblue font-G-Ultra text-6xl sm:text-8xl lg:text-9xl scale-y-50 text-left"
            type="submit"
            id="btnFormHome"
          >
            ENVOYER
          </button>
          <p
            class="invisible pt-5 pb-2 lg:pb-5 text-xl text-white text-center"
            id="validationForm"
          >
            Merci !
          </p>
        </form>
        <img
          class="hidden md:block absolute top-0 left-0 w-28 z-10"
          src="./assets/images/gradient_white.png"
          alt="habillage gradient blanc"
        />
      </section>
      <!-- Instagram -->
      <section class="bg-transparent bg-cover relative">
        <div class="pb-28 pt-24">
          <div class="flex flex-wrap justify-center" id="insta-container"></div>
        </div>
        <footer
          class="flex flex-col items-center justify-center pt-4 pb-2 absolute bottom-0 left-1/2 transform -translate-x-1/2"
        >
          <img
            class="w-3/4 sm:w-1/2 lg:w-1/5"
            src="./assets/images/blaze.png"
            alt="logo Omarker"
          />
          <p class="font-G-Light text-sm whitespace-nowrap">
            OMARKER | Tout droit réservé.
          </p>
        </footer>
      </section>
    </div>
    <!-- Boite modal pour images instagram -->
    <div
      class="hidden w-screen h-screen bg-black bg-opacity-90 z-50 fixed top-0 left-0 justify-center items-center"
      id="instaModal"
      data-modal="off"
    >
      <button
        class="text-white absolute top-5 left-5 text-6xl font-G-Black"
        id="btnCloseModal"
      >
        X
      </button>
      <a
        class="w-11/12 md:h-5/6 md:w-auto"
        href="#"
        target="blank_"
        id="linkModal"
      >
        <img
          class="h-full"
          src="./assets/#"
          alt="Post instagram d'Omarker"
          id="imgModal"
        />
      </a>
    </div>
    <script src="./js/main_page.js"></script>
    <script src="./js/instagram.js"></script>
  </body>
</html>
