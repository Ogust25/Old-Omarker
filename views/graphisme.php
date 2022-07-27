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
            <li>
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
          class="relative top-28 flex flex-wrap md:block md:h-1000 lg:h-1900 mb-20 md:mb-96"
        >
          <img
            src="assets/images/oeuvresOmarker/Focus.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-6% md:left-16%"
            alt="Oeuvre intitulée Focus"
            data-nom="Focus"
            data-taille="30x40cm"
            data-tech="Technique mixte sur bois"
            data-date="2022"
          />
          <img
            src="assets/images/oeuvresOmarker/Algorithme.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-8% md:left-40%"
            alt="Oeuvre intitulée Algorithme"
            data-nom="Algorithme"
            data-taille="60x80cm"
            data-tech="Technique mixte sur toile"
            data-date="2021"
          />
          <img
            src="assets/images/oeuvresOmarker/Algorithmique.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:right-14% md:top-0"
            alt="Oeuvre intitulée Algorithmique"
            data-nom="Algorithmique"
            data-taille="50x60cm"
            data-tech="Technique mixte sur toile"
            data-date="2021"
          />
          <img
            src="assets/images/oeuvresOmarker/Concrete2.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-15% md:absolute md:right-3% md:top-13%"
            alt="Oeuvre intitulée Concrete"
            data-nom="Concrete 2"
            data-taille="60x80cm"
            data-tech="Technique mixte sur toile"
            data-date="2021"
          />
          <img
            src="assets/images/oeuvresOmarker/FRAGMENT.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-25% md:absolute md:top-35% md:left-13% lg:left-10%"
            alt="Oeuvre intitulée Fragment"
            data-nom="Fragment"
            data-taille="60x80cm"
            data-tech="Technique mixte sur toile"
            data-date="2021"
          />
          <img
            src="assets/images/oeuvresOmarker/Start.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-35% md:absolute md:top-33% lg:top-28% md:right-20%"
            alt="Oeuvre intitulée Start"
            data-nom="Start"
            data-taille="60x80cm"
            data-tech="Technique mixte sur toile"
            data-date="2021"
          />
          <img
            src="assets/images/oeuvresOmarker/FragmentDeTerrain1.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-65% lg:top-53% md:left-2%"
            alt="Oeuvre intitulée Fragment De Terrain"
            data-nom="Fragment De Terrain"
            data-taille="60x80cm"
            data-tech="Technique mixte sur toile"
            data-date="2021"
          />
          <img
            src="assets/images/oeuvresOmarker/HeureBleue.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-14% md:absolute md:top-47% lg:top-48% md:right-2%"
            alt="Oeuvre intitulée Heure Bleue"
            data-nom="Heure Bleue"
            data-taille="60x80cm"
            data-tech="Technique mixte sur bois"
            data-date="2022"
          />
          <img
            src="assets/images/oeuvresOmarker/NuitD_orage.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% lg:w-18% md:absolute md:top-70% lg:top-65% md:left-23%"
            alt="Oeuvre intitulée Nuit d'orage"
            data-nom="Nuit d'orage"
            data-taille="60x80cm"
            data-tech="Technique mixte sur bois"
            data-date="2022"
          />
          <img
            src="assets/images/oeuvresOmarker/Variable1-2.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-75% lg:top-75% md:right-34% lg:right-40%"
            alt="Oeuvre intitulée Variable"
            data-nom="Variable"
            data-taille="60x80cm"
            data-tech="Technique mixte sur bois"
            data-date="2022"
          />
          <img
            src="assets/images/oeuvresOmarker/Trajectoire1.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-70% lg:top-70% md:right-9%"
            alt="Oeuvre intitulée Trajectoire"
            data-nom="Trajectoire"
            data-taille="60x80cm"
            data-tech="Technique mixte sur toile"
            data-date="2021"
          />
          <img
            src="assets/images/oeuvresOmarker/Variation.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-95% lg:top-80% md:left-3%"
            alt="Oeuvre intitulée Variation"
            data-nom="Variation"
            data-taille="60x80cm"
            data-tech="Technique mixte sur bois"
            data-date="2022"
          />
          <img
            src="assets/images/oeuvresOmarker/VapeurToxique.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-100% lg:top-88% md:left-22% lg:left-19%"
            alt="Oeuvre intitulée Vapeur Toxique"
            data-nom="Vapeur Toxique"
            data-taille="21x29.7cm"
            data-tech="Technique mixte sur papier"
            data-date="2022"
          />
          <img
            src="assets/images/oeuvresOmarker/Beton2.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-95% lg:top-90% md:right-25%"
            alt="Oeuvre intitulée Beton"
            data-nom="Beton"
            data-taille="30x40"
            data-tech="Technique mixte sur beton"
            data-date="2021"
          />
          <img
            src="assets/images/oeuvresOmarker/MecaniqueOrganique.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-15% md:absolute md:top-90% lg:top-94% md:right-5%"
            alt="Oeuvre intitulée Mecanique Organique"
            data-nom="Mecanique Organique"
            data-taille="29,7x42cm"
            data-tech="Technique mixte sur papier"
            data-date="2020"
          />
        </section>
        <!-- Galerie identité visuelle -->
        <section
          id="idVisuelle"
          class="relative top-28 flex flex-wrap md:block md:h-1000 lg:h-1900 mb-20 md:mb-96"
        >
          <img
            src="assets/images/oeuvresOmarker/Focus.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-6% md:left-16%"
            alt="Oeuvre intitulée Focus"
            data-nom="Focus"
            data-taille="30x40cm"
            data-tech="Technique mixte sur bois"
            data-date="2022"
          />
          <img
            src="assets/images/oeuvresOmarker/Algorithme.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-8% md:left-40%"
            alt="Oeuvre intitulée Algorithme"
            data-nom="Algorithme"
            data-taille="60x80cm"
            data-tech="Technique mixte sur toile"
            data-date="2021"
          />
          <img
            src="assets/images/oeuvresOmarker/Algorithmique.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:right-14% md:top-0"
            alt="Oeuvre intitulée Algorithmique"
            data-nom="Algorithmique"
            data-taille="50x60cm"
            data-tech="Technique mixte sur toile"
            data-date="2021"
          />
          <img
            src="assets/images/oeuvresOmarker/Concrete2.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-15% md:absolute md:right-3% md:top-13%"
            alt="Oeuvre intitulée Concrete"
            data-nom="Concrete 2"
            data-taille="60x80cm"
            data-tech="Technique mixte sur toile"
            data-date="2021"
          />
          <img
            src="assets/images/oeuvresOmarker/FRAGMENT.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-25% md:absolute md:top-35% md:left-13% lg:left-10%"
            alt="Oeuvre intitulée Fragment"
            data-nom="Fragment"
            data-taille="60x80cm"
            data-tech="Technique mixte sur toile"
            data-date="2021"
          />
          <img
            src="assets/images/oeuvresOmarker/Start.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-35% md:absolute md:top-33% lg:top-28% md:right-20%"
            alt="Oeuvre intitulée Start"
            data-nom="Start"
            data-taille="60x80cm"
            data-tech="Technique mixte sur toile"
            data-date="2021"
          />
          <img
            src="assets/images/oeuvresOmarker/FragmentDeTerrain1.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-65% lg:top-53% md:left-2%"
            alt="Oeuvre intitulée Fragment De Terrain"
            data-nom="Fragment De Terrain"
            data-taille="60x80cm"
            data-tech="Technique mixte sur toile"
            data-date="2021"
          />
          <img
            src="assets/images/oeuvresOmarker/HeureBleue.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-14% md:absolute md:top-47% lg:top-48% md:right-2%"
            alt="Oeuvre intitulée Heure Bleue"
            data-nom="Heure Bleue"
            data-taille="60x80cm"
            data-tech="Technique mixte sur bois"
            data-date="2022"
          />
          <img
            src="assets/images/oeuvresOmarker/NuitD_orage.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% lg:w-18% md:absolute md:top-70% lg:top-65% md:left-23%"
            alt="Oeuvre intitulée Nuit d'orage"
            data-nom="Nuit d'orage"
            data-taille="60x80cm"
            data-tech="Technique mixte sur bois"
            data-date="2022"
          />
          <img
            src="assets/images/oeuvresOmarker/Variable1-2.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-75% lg:top-75% md:right-34% lg:right-40%"
            alt="Oeuvre intitulée Variable"
            data-nom="Variable"
            data-taille="60x80cm"
            data-tech="Technique mixte sur bois"
            data-date="2022"
          />
          <img
            src="assets/images/oeuvresOmarker/Trajectoire1.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-70% lg:top-70% md:right-9%"
            alt="Oeuvre intitulée Trajectoire"
            data-nom="Trajectoire"
            data-taille="60x80cm"
            data-tech="Technique mixte sur toile"
            data-date="2021"
          />
          <img
            src="assets/images/oeuvresOmarker/Variation.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-95% lg:top-80% md:left-3%"
            alt="Oeuvre intitulée Variation"
            data-nom="Variation"
            data-taille="60x80cm"
            data-tech="Technique mixte sur bois"
            data-date="2022"
          />
          <img
            src="assets/images/oeuvresOmarker/VapeurToxique.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-100% lg:top-88% md:left-22% lg:left-19%"
            alt="Oeuvre intitulée Vapeur Toxique"
            data-nom="Vapeur Toxique"
            data-taille="21x29.7cm"
            data-tech="Technique mixte sur papier"
            data-date="2022"
          />
          <img
            src="assets/images/oeuvresOmarker/Beton2.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-95% lg:top-90% md:right-25%"
            alt="Oeuvre intitulée Beton"
            data-nom="Beton"
            data-taille="30x40"
            data-tech="Technique mixte sur beton"
            data-date="2021"
          />
          <img
            src="assets/images/oeuvresOmarker/MecaniqueOrganique.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-15% md:absolute md:top-90% lg:top-94% md:right-5%"
            alt="Oeuvre intitulée Mecanique Organique"
            data-nom="Mecanique Organique"
            data-taille="29,7x42cm"
            data-tech="Technique mixte sur papier"
            data-date="2020"
          />
        </section>

        <!-- Print -->
        <section
          id="print"
          class="relative top-28 flex flex-wrap md:block md:h-1000 lg:h-1900 mb-20 md:mb-96"
        >
          <img
            src="assets/images/oeuvresOmarker/Focus.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-6% md:left-16%"
            alt="Oeuvre intitulée Focus"
          />
          <img
            src="assets/images/oeuvresOmarker/Algorithme.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-8% md:left-40%"
            alt="Oeuvre intitulée Algorithme"
          />
          <img
            src="assets/images/oeuvresOmarker/Algorithmique.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:right-14% md:top-0"
            alt="Oeuvre intitulée Algorithmique"
          />
          <img
            src="assets/images/oeuvresOmarker/Concrete2.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-15% md:absolute md:right-3% md:top-13%"
            alt="Oeuvre intitulée Concrete"
          />
          <img
            src="assets/images/oeuvresOmarker/FRAGMENT.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-25% md:absolute md:top-35% md:left-13% lg:left-10%"
            alt="Oeuvre intitulée Fragment"
          />
          <img
            src="assets/images/oeuvresOmarker/Start.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-35% md:absolute md:top-33% lg:top-28% md:right-20%"
            alt="Oeuvre intitulée Start"
          />
          <img
            src="assets/images/oeuvresOmarker/FragmentDeTerrain1.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-65% lg:top-53% md:left-2%"
            alt="Oeuvre intitulée FragmentDeTerrain"
          />
          <img
            src="assets/images/oeuvresOmarker/HeureBleue.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-14% md:absolute md:top-47% lg:top-48% md:right-2%"
            alt="Oeuvre intitulée HeureBleue"
          />
          <img
            src="assets/images/oeuvresOmarker/NuitD_orage.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% lg:w-18% md:absolute md:top-70% lg:top-65% md:left-23%"
            alt="Oeuvre intitulée NuitD"
          />
          <img
            src="assets/images/oeuvresOmarker/Variable1-2.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-75% lg:top-75% md:right-34% lg:right-40%"
            alt="Oeuvre intitulée Variable"
          />
          <img
            src="assets/images/oeuvresOmarker/Trajectoire1.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-70% lg:top-70% md:right-9%"
            alt="Oeuvre intitulée Trajectoire"
          />
          <img
            src="assets/images/oeuvresOmarker/Variation.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-95% lg:top-80% md:left-3%"
            alt="Oeuvre intitulée Variation"
          />
          <img
            src="assets/images/oeuvresOmarker/VapeurToxique.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-100% lg:top-88% md:left-22% lg:left-19%"
            alt="Oeuvre intitulée VapeurToxique"
          />
          <img
            src="assets/images/oeuvresOmarker/Beton2.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-95% lg:top-90% md:right-25%"
            alt="Oeuvre intitulée Beton"
          />
          <img
            src="assets/images/oeuvresOmarker/MecaniqueOrganique.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-15% md:absolute md:top-90% lg:top-94% md:right-5%"
            alt="Oeuvre intitulée MecaniqueOrganique"
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
    <script src="./js/painting_page.js"></script>
  </body>
</html>
