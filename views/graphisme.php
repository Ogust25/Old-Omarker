<!DOCTYPE html>
<html class="scroll-smooth" lang="fr">
  <head>
    <!-- Primary Meta Tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Omarker | Graphisme</title>
    <meta name="title" content="Omarker | Graphisme" />
    <meta
      name="description"
      content="Site web de l'artiste Omarker, peintre et tatoueur."
    />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://omarker.fr/" />
    <meta property="og:title" content="Omarker | Graphisme" />
    <meta
      property="og:description"
      content="Site web de l'artiste Omarker, peintre et tatoueur."
    />
    <meta property="og:image" content="./assets/images/blaze.png" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://omarker.fr/" />
    <meta property="twitter:title" content="Omarker | Graphisme" />
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
          class="-bottom-50% duration-500 bg-black md:bg-transparent w-screen md:w-auto md:top-1/3 md:left-5 z-50 fixed md:visible"
          id="navMenu"
        >
          <ul
            class="font-bebas text-2xl tracking-widest text-white md:text-black p-8 md:p-0"
          >
            <li class='active'>
              <a class="linkMenu hover:font-bold" href="#dirArt">DIRECTION ARTISTIQUE</a>
            </li>
            <li>
              <a class="linkMenu hover:font-bold" href="#idVisuelle">IDENTITE VISUELLE</a>
            </li>
            <li>
              <a class="linkMenu hover:font-bold" href="#print">PRINT</a>
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
        <!-- Galerie Direction Artistique -->
        <section
          id="dirArt"
          class="scrollSpy relative top-28 flex flex-wrap md:block md:h-1000 lg:h-1900 mb-20 md:mb-96"
        >
          <img
            src="<?php echo htmlspecialchars($dirArts[0]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-6% md:left-16%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($dirArts[1]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-8% md:left-40%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($dirArts[2]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:right-14% md:top-0"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($dirArts[3]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-15% md:absolute md:right-3% md:top-13%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($dirArts[4]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-25% md:absolute md:top-35% md:left-13% lg:left-10%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($dirArts[5]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-35% md:absolute md:top-33% lg:top-28% md:right-20%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($dirArts[6]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-65% lg:top-53% md:left-2%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($dirArts[7]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-14% md:absolute md:top-47% lg:top-48% md:right-2%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($dirArts[8]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% lg:w-18% md:absolute md:top-70% lg:top-65% md:left-23%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($dirArts[9]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-75% lg:top-75% md:right-34% lg:right-40%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($dirArts[10]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-70% lg:top-70% md:right-9%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($dirArts[11]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-95% lg:top-80% md:left-3%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($dirArts[12]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-100% lg:top-88% md:left-22% lg:left-19%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($dirArts[13]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-95% lg:top-90% md:right-25%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($dirArts[14]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-15% md:absolute md:top-90% lg:top-94% md:right-5%"
            alt="graphisme de Omarker"
          />
        </section>
        <!-- Galerie identité visuelle -->
        <section
          id="idVisuelle"
          class="scrollSpy relative top-28 flex flex-wrap md:block md:h-1000 lg:h-1900 mb-20 md:mb-96"
        >
          <img
            src="<?php echo htmlspecialchars($idVisus[0]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-6% md:left-16%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($idVisus[1]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-8% md:left-40%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($idVisus[2]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:right-14% md:top-0"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($idVisus[3]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-15% md:absolute md:right-3% md:top-13%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($idVisus[4]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-25% md:absolute md:top-35% md:left-13% lg:left-10%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($idVisus[5]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-35% md:absolute md:top-33% lg:top-28% md:right-20%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($idVisus[6]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-65% lg:top-53% md:left-2%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($idVisus[7]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-14% md:absolute md:top-47% lg:top-48% md:right-2%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($idVisus[8]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% lg:w-18% md:absolute md:top-70% lg:top-65% md:left-23%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($idVisus[9]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-75% lg:top-75% md:right-34% lg:right-40%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($idVisus[10]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-70% lg:top-70% md:right-9%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($idVisus[11]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-95% lg:top-80% md:left-3%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($idVisus[12]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-100% lg:top-88% md:left-22% lg:left-19%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($idVisus[13]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-95% lg:top-90% md:right-25%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($idVisus[14]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-15% md:absolute md:top-90% lg:top-94% md:right-5%"
            alt="graphisme de Omarker"
          />
        </section>

        <!-- Print -->
        <section
          id="print"
          class="scrollSpy relative top-28 flex flex-wrap md:block md:h-800 lg:h-1000 mb-20"
        >
          <img
            src="<?php echo htmlspecialchars($prints[0]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-6% md:left-16%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($prints[1]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:bottom-1% md:left-18%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($prints[2]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:bottom-3% md:right-16%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($prints[3]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-10% md:left-40%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($prints[4]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:right-14% md:top-0"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($prints[5]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-15% md:absolute md:right-3% md:top-18%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($prints[6]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-25% md:absolute md:top-28% md:left-13% lg:left-10%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($prints[7]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-35% md:absolute md:top-33% lg:top-32% md:right-20%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($prints[8]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-65% lg:top-53% md:left-2%"
            alt="graphisme de Omarker"
          />
          <img
            src="<?php echo htmlspecialchars($prints[9]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-14% md:absolute md:top-47% lg:top-48% md:right-2%"
            alt="graphisme de Omarker"
          />
        </section>
      </main>
      <footer
        class="flex flex-col items-center justify-center pt-4 pb-2 relative bottom-0 left-1/2 transform -translate-x-1/2"
      >
        <img
          class="w-50% pt-10 sm:pt-0 md:w-30% lg:w-1/5"
          src="./assets/images/blaze.png"
          alt="logo Omarker"
        />
        <p class="font-G-Light text-sm whitespace-nowrap">
          OMARKER | Tout droit réservé.
        </p>
      </footer>
    </div>
    <!-- Boite modal pour les images -->
    <div
      class="hidden w-screen h-screen bg-black bg-opacity-90 z-50 fixed top-0 left-0 justify-center items-center"
      id="peintureModal"
      data-modal="off"
    >
      <button
        class="text-white absolute top-5 left-5 text-6xl font-G-Black"
        id="btnCloseModal"
      >
        X
      </button>
      <img
        class="w-80% md:h-60% lg:h-5/6 md:w-auto"
        src="./assets/#"
        alt="Post instagram d'Omarker"
        id="imgModal"
      />
      <div
        class="absolute bottom-5% lg:top-40% left-5% text-xl lg:text-2xl font-G-Black text-white z-40"
      >
        <p class="font-G-Black text-1xl lg:text-4xl" id="nomModal">Nom</p>
        <p class="font-G-Medium" id="tailleModal">Taille</p>
        <p class="font-G-Medium" id="techModal">Technique</p>
        <p class="font-G-Bold" id="dateModal">Date</p>
      </div>
    </div>
    <script src="./js/graphisme_page.js"></script>
  </body>
</html>
