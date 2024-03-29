<!DOCTYPE html>
<html class="scroll-smooth" lang="fr">
  <head>
    <!-- Primary Meta Tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Omarker | Tattoo</title>
    <meta name="title" content="Omarker | Tattoo" />
    <meta
      name="description"
      content="Site web de l'artiste Omarker, peintre et tatoueur."
    />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://omarker.fr/" />
    <meta property="og:title" content="Omarker | Tattoo" />
    <meta
      property="og:description"
      content="Site web de l'artiste Omarker, peintre et tatoueur."
    />
    <meta property="og:image" content="./assets/images/blaze.png" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://omarker.fr/" />
    <meta property="twitter:title" content="Omarker | Tattoo" />
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
    <div class="h-full" id="page">
      <!-- Nav du site -->
      <nav
        class="fixed top-0 left-1/2 transform -translate-x-1/2 z-50"
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
      <main class="w-screen relative">
        <!-- Nav de la page -->
        <nav
          class="-bottom-50% duration-500 bg-black md:bg-transparent text-white md:text-black w-screen md:w-auto md:top-1/3 md:left-5 z-50 fixed md:visible"
          id="navMenu"
        >
          <ul class="font-bebas text-2xl tracking-widest p-8 md:p-0">
            <li class="active">
              <a class="linkMenu hover:font-bold" href="#tatouage">TATTOO</a>
            </li>
            <li>
              <a class="linkMenu hover:font-bold" href="#flash">FLASH</a>
            </li>
            <li id='spyTarget'>
              <a class="hover:font-bold" href="#contact">CONTACT</a>
            </li>
            <li>
              <a
                class="linkMenu hover:font-bold"
                href="https://www.instagram.com/omarkertattoo/?hl=fr"
                target="_blank"
                >INSTAGRAM</a
              >
            </li>
          </ul>
        </nav>
        <button
          class="md:hidden fixed bottom-0 z-50 bg-black px-2 font-G-Bold text-white left-1/2 transform -translate-x-1/2"
          id="menuPeinture"
          data-open="false"
        >
          MENU
        </button>
        <!-- Galerie Tattoo -->
        <section
          id="tatouage"
          class="scrollSpy relative top-28 flex flex-wrap md:block md:h-1000 lg:h-1900 mb-20 md:mb-96"
        >
          <img
            src="<?php echo htmlspecialchars($tattoos[0]['img']); ?>"
            class="tattoo hover:invert hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-6% md:left-16%"
            alt="Tatouage de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($tattoos[1]['img']); ?>"
            class="tattoo hover:invert hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-8% md:left-40%"
            alt="Tatouage de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($tattoos[2]['img']); ?>"
            class="tattoo hover:invert hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:right-14% md:top-0"
            alt="Tatouage de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($tattoos[3]['img']); ?>"
            class="tattoo hover:invert hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-15% md:absolute md:right-3% md:top-13%"
            alt="Tatouage de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($tattoos[4]['img']); ?>"
            class="tattoo hover:invert hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-25% md:absolute md:top-35% md:left-13% lg:left-10%"
            alt="Tatouage de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($tattoos[5]['img']); ?>"
            class="tattoo hover:invert hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-35% md:absolute md:top-33% lg:top-28% md:right-20%"
            alt="Tatouage de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($tattoos[6]['img']); ?>"
            class="tattoo hover:invert hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-65% lg:top-53% md:left-2%"
            alt="Tatouage de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($tattoos[7]['img']); ?>"
            class="tattoo hover:invert hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-14% md:absolute md:top-47% lg:top-48% md:right-2%"
            alt="Tatouage de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($tattoos[8]['img']); ?>"
            class="tattoo hover:invert hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% lg:w-18% md:absolute md:top-70% lg:top-65% md:left-23%"
            alt="Tatouage de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($tattoos[9]['img']); ?>"
            class="tattoo hover:invert hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-75% lg:top-75% md:right-34% lg:right-40%"
            alt="Tatouage de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($tattoos[10]['img']); ?>"
            class="tattoo hover:invert hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-70% lg:top-70% md:right-9%"
            alt="Tatouage de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($tattoos[11]['img']); ?>"
            class="tattoo hover:invert hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-95% lg:top-80% md:left-3%"
            alt="Tatouage de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($tattoos[12]['img']); ?>"
            class="tattoo hover:invert hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-100% lg:top-88% md:left-22% lg:left-19%"
            alt="Tatouage de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($tattoos[13]['img']); ?>"
            class="tattoo hover:invert hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-95% lg:top-90% md:right-25%"
            alt="Tatouage de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($tattoos[14]['img']); ?>"
            class="tattoo hover:invert hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-15% md:absolute md:top-90% lg:top-94% md:right-5%"
            alt="Tatouage de Omarker"
          />
        </section>

        <!-- Flash -->
        <section class="scrollSpy flex justify-center" id="flash">
          <div
            class="md:w-80% flex flex-wrap justify-evenly mb-10 mt-20 md:mt-0"
          >
            <?php foreach ($flashs as $flash) { ?>
              <div
                class="cursor-pointer w-1/3 sm:w-1/4 md:w-20% lg:w-15% md:mx-2 lg:mx-5 mb-5 flex flex-col items-center font-G-Bold"
              >
                <img
                  class="flash object-cover hover:invert duration-1000 ease-in-out"
                  src="<?php echo htmlspecialchars($flash['img']); ?>"
                  alt="Flash de Omarker"
                />
                <p><?php echo htmlspecialchars($flash['prix']); ?>€</p>
              </div>
            <?php } ?>
          </div>
        </section>

        <!-- Formulaire tattoo -->
        <section
          class="scrollSpy h-full bg-black relative flex flex-col items-center pb-20"
          id="contact"
        >
          <h2
            class="text-white font-G-Ultra text-7xl md:text-9xl scale-x-105 scale-y-150 relative -top-5 md:-top-7 left-0"
          >
            CONTACT
          </h2>
          <form
            enctype="multipart/form-data"
            class="flex flex-col font-G-Bold w-11/12 sm:w-8/12 lg:w-1/2 mt-5"
            method="post"
            id="formTattoo"
          >
            <!-- Tattoo choisis -->
            <div class="flex flex-col-reverse items-center my-10">
              <label
                class="bg-white p-2 rounded-full cursor-pointer hover:text-Jblue"
                for="flashChoisi"
                >Ajouter</label
              >
              <img
                class="w-50% mb-5 cursor-default"
                src="./assets/images/empty.png"
                alt="Aperçu du flash voulu"
                id="previewFlash"
              />
              <input
                class="hidden"
                type="file"
                name="flashImporte"
                id="flashChoisi"
              />
            </div>

            <!-- Nom et Prénom -->
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

            <!-- Email -->
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

            <!-- Description du projet -->
            <textarea
              class="border-b border-white bg-transparent placeholder:text-white placeholder:text-xl lg:placeholder:text-2xl text-xl lg:text-2xl text-white pb-2 focus:border-Jblue focus:border-b-2 focus:outline-none"
              placeholder="Description du projet"
              rows="1"
              id="projetFlash"
              name="projetFlash"
              required
            ></textarea>
            <p
              class="invisible pt-2 pb-2 text-sm text-gray-400 text-right font-G-Light"
              id="erreurProjet"
            >
              Veuillez retirer les caractères spéciaux.
            </p>

            <!-- Emplacement du flash -->
            <input
              class="border-b border-white bg-transparent placeholder:text-white placeholder:text-xl lg:placeholder:text-2xl text-xl lg:text-2xl text-white pb-2 focus:border-Jblue focus:border-b-2 focus:outline-none"
              placeholder="Emplacement"
              id="emplacmentFlash"
              name="emplacementFlash"
              type="text"
              pattern="[a-zA-Z0-9àáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+"
              required
            />
            <p
              class="invisible pt-2 pb-2 lg:pb-5 text-sm text-gray-400 text-right font-G-Light"
              id="erreurEmplacment"
            >
              Veuillez retirer les caractères spéciaux.
            </p>

            <!-- Taille du flash -->
            <input
              class="border-b border-white bg-transparent placeholder:text-white placeholder:text-xl lg:placeholder:text-2xl text-xl lg:text-2xl text-white pb-2 focus:border-Jblue focus:border-b-2 focus:outline-none"
              placeholder="Taille"
              id="tailleFlash"
              name="tailleFlash"
              type="text"
              pattern="[a-zA-Z0-9àáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+"
              required
            />
            <p
              class="invisible pt-2 pb-2 lg:pb-5 text-sm text-gray-400 text-right font-G-Light"
              id="erreurTaille"
            >
              Veuillez retirer les caractères spéciaux.
            </p>

            <!-- Budget -->
            <input
              class="border-b border-white bg-transparent placeholder:text-white placeholder:text-xl lg:placeholder:text-2xl text-xl lg:text-2xl text-white pb-2 focus:border-Jblue focus:border-b-2 focus:outline-none"
              placeholder="Budget"
              id="budgetFlash"
              name="budgetFlash"
              type="text"
              pattern="[a-zA-Z0-9àáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+"
              required
            />
            <p
              class="invisible pt-2 pb-2 lg:pb-5 text-sm text-gray-400 text-right font-G-Light"
              id="erreurBudget"
            >
              Veuillez retirer les caractères spéciaux.
            </p>
            <!-- 1er tattoo ? -->
            <div
              class="flex justify-evenly mb-5 border-b border-white pb-10 pt-2"
            >
              <p class="text-white text-xl">Premier tattoo ?</p>
              <div class="flex">
                <label
                  class="cursor-pointer text-white text-xl mr-1"
                  for="ouiFirstTattoo"
                  >Oui</label
                >
                <input
                  class="mr-3 cursor-pointer"
                  type="radio"
                  name="firstTattoo"
                  id="ouiFirstTattoo"
                  value="Oui"
                  required
                />
                <label
                  class="cursor-pointer text-white text-xl mr-1"
                  for="nonFirstTattoo"
                  >Non</label
                >
                <input
                  class="cursor-pointer"
                  type="radio"
                  name="firstTattoo"
                  id="nonFirstTattoo"
                  value="Non"
                />
              </div>
            </div>

            <!-- Btn envoyer -->
            <input
              class="text-white hover:text-Jblue font-G-Ultra text-6xl sm:text-8xl lg:text-9xl scale-y-50 text-left cursor-pointer"
              type="submit"
              value="ENVOYER"
              id="btnFormTattoo"
            />
            <p
              class="invisible pt-5 pb-2 lg:pb-5 text-xl text-white text-center"
              id="validationForm"
            >
              Merci !
            </p>
          </form>
        </section>
      </main>
      <footer
        class="w-screen flex flex-col items-center justify-center pt-4 pb-2 relative bottom-0 left-1/2 transform -translate-x-1/2 bg-black"
      >
        <img
          class="w-50% pt-10 sm:pt-0 md:w-30% lg:w-1/5 invert"
          src="./assets/images/blaze.png"
          alt="logo Omarker"
        />
        <p class="font-G-Light text-sm whitespace-nowrap text-white">
          OMARKER | Tout droit réservé.
        </p>
      </footer>
    </div>

    <!-- Boite modal pour les tattoo -->
    <div
      class="hidden w-screen h-screen bg-black bg-opacity-90 z-50 fixed top-0 left-0 justify-center items-center"
      id="peintureModal"
      data-modal="off"
    >
      <button
        class="text-white absolute top-5 left-5 text-6xl font-G-Black"
        id="btnCloseModalFlash"
      >
        X
      </button>
      <img
        class="w-80% md:h-60% lg:h-5/6 md:w-auto"
        src=""
        alt="Tatouage d'Omarker"
        id="imgModal"
      />
    </div>

    <!-- Boite modal pour les flash -->
    <div
      class="hidden w-screen h-screen bg-black bg-opacity-90 z-50 fixed top-0 left-0 flex-col justify-center items-center"
      id="flashModal"
      data-modal="off"
    >
      <button
        class="text-white absolute top-5 left-5 text-6xl font-G-Black"
        id="btnCloseModal"
      >
        X
      </button>
      <img
        class="w-70% md:h-60% lg:h-5/6 md:w-auto"
        src=""
        alt="Flash d'Omarker"
        id="imgModalFlash"
      />
      <button
        class="bg-white p-2 rounded-full cursor-pointer hover:text-Jblue mt-5 font-G-Bold"
        id="btnFlash"
      >
        Choisir ce flash
      </button>
    </div>
    <script src="./js/tattoo_page.js"></script>
  </body>
</html>
