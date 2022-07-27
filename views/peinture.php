<!DOCTYPE html>
<html class="scroll-smooth" lang="fr">
  <head>
    <!-- Primary Meta Tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Omarker | Peinture</title>
    <meta name="title" content="Omarker | Peinture" />
    <meta
      name="description"
      content="Site web de l'artiste Omarker, peintre et tatoueur."
    />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://omarker.fr/" />
    <meta property="og:title" content="Omarker | Peinture" />
    <meta
      property="og:description"
      content="Site web de l'artiste Omarker, peintre et tatoueur."
    />
    <meta property="og:image" content="./assets/images/blaze.png" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://omarker.fr/" />
    <meta property="twitter:title" content="Omarker | Peinture" />
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
              <a class="linkMenu hover:font-bold" href="#mur">MUR</a>
            </li>
            <li>
              <a class="linkMenu hover:font-bold" href="#oeuvres">OEUVRES</a>
            </li>
            <li>
              <a class="linkMenu hover:font-bold" href="#exposition"
                >EXPOSITION</a
              >
            </li>
            <li>
              <a class="linkMenu hover:font-bold" href="#workshop">WORKSHOP</a>
            </li>
            <li>
              <a class="hover:font-bold" href="./#contact">CONTACT</a>
            </li>
            <li>
              <a
                class="linkMenu hover:font-bold"
                href="https://www.instagram.com/julien.omarker/?hl=fr"
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
        <!-- Galerie Mur -->
        <section
          id="mur"
          class="scrollSpy relative top-20 md:top-28 flex flex-wrap md:block md:h-1900 mb-20 md:mb-96"
        >
          <img
            src="assets/images/bg_insta.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-50% md:w-25% md:absolute md:top-8% md:left-40%"
            alt="Mur peint par Omarker"
          />
          <img
            src="assets/images/bg_insta.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-50% md:w-20% md:absolute md:right-14% md:top-0 invert"
            alt="Mur peint par Omarker"
          />
          <img
            src="assets/images/bg_insta.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-50% md:w-20% md:absolute md:right-3% md:top-13% invert"
            alt="Mur peint par Omarker"
          />
          <img
            src="assets/images/bg_insta.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-50% md:w-21% md:absolute md:top-6% md:left-16%"
            alt="Mur peint par Omarker"
          />
          <img
            src="assets/images/bg_insta.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-50% md:w-40% md:absolute md:top-28% md:right-20%"
            alt="Mur peint par Omarker"
          />
          <img
            src="assets/images/bg_insta.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-50% md:w-30% md:absolute md:top-23% md:left-12% invert"
            alt="Mur peint par Omarker"
          />
          <img
            src="assets/images/bg_insta.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-50% md:w-21% md:absolute md:top-53% md:left-2% invert"
            alt="Mur peint par Omarker"
          />
          <img
            src="assets/images/bg_insta.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-50% md:w-19% md:absolute md:top-48% md:right-2%"
            alt="Mur peint par Omarker"
          />
          <img
            src="assets/images/bg_insta.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-50% md:w-23% md:absolute md:top-65% md:left-23%"
            alt="Mur peint par Omarker"
          />
          <img
            src="assets/images/bg_insta.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-50% md:w-25% md:absolute md:top-70% md:right-9% invert"
            alt="Mur peint par Omarker"
          />
          <img
            src="assets/images/bg_insta.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-50% md:w-20% md:absolute md:top-75% md:right-40% invert"
            alt="Mur peint par Omarker"
          />
          <img
            src="assets/images/bg_insta.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-50% md:w-20% md:absolute md:top-80% md:left-3%"
            alt="Mur peint par Omarker"
          />
          <img
            src="assets/images/bg_insta.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-50% md:w-20% md:absolute md:top-88% md:left-19%"
            alt="Mur peint par Omarker"
          />
          <img
            src="assets/images/bg_insta.jpg"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-50% md:w-25% md:absolute md:top-90% md:right-25% invert"
            alt="Mur peint par Omarker"
          />
        </section>
        <!-- Galerie Oeuvres -->
        <section
          id="oeuvres"
          class="scrollSpy relative top-28 flex flex-wrap md:block md:h-1000 lg:h-1900 mb-20 md:mb-96"
        >
          <img
            src="<?php echo htmlspecialchars($oeuvres[0]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-6% md:left-16%"
            alt="Oeuvre intitulée <?php echo htmlspecialchars($oeuvres[0]['nom']); ?>"
            data-nom="<?php echo htmlspecialchars($oeuvres[0]['nom']); ?>"
            data-taille="<?php echo htmlspecialchars($oeuvres[0]['taille']); ?>"
            data-tech="<?php echo htmlspecialchars($oeuvres[0]['technique']); ?>"
            data-date="<?php echo htmlspecialchars($oeuvres[0]['year']); ?>"
          />
          <img
            src="<?php echo htmlspecialchars($oeuvres[1]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-8% md:left-40%"
            alt="Oeuvre intitulée <?php echo htmlspecialchars($oeuvres[1]['nom']); ?>"
            data-nom="<?php echo htmlspecialchars($oeuvres[1]['nom']); ?>"
            data-taille="<?php echo htmlspecialchars($oeuvres[1]['taille']); ?>"
            data-tech="<?php echo htmlspecialchars($oeuvres[1]['technique']); ?>"
            data-date="<?php echo htmlspecialchars($oeuvres[1]['year']); ?>"
          />
          <img
            src="<?php echo htmlspecialchars($oeuvres[2]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:right-14% md:top-0"
            alt="Oeuvre intitulée <?php echo htmlspecialchars($oeuvres[2]['nom']); ?>"
            data-nom="<?php echo htmlspecialchars($oeuvres[2]['nom']); ?>"
            data-taille="<?php echo htmlspecialchars($oeuvres[2]['taille']); ?>"
            data-tech="<?php echo htmlspecialchars($oeuvres[2]['technique']); ?>"
            data-date="<?php echo htmlspecialchars($oeuvres[2]['year']); ?>"
          />
          <img
            src="<?php echo htmlspecialchars($oeuvres[3]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-15% md:absolute md:right-3% md:top-13%"
            alt="Oeuvre intitulée <?php echo htmlspecialchars($oeuvres[3]['nom']); ?>"
            data-nom="<?php echo htmlspecialchars($oeuvres[3]['nom']); ?>"
            data-taille="<?php echo htmlspecialchars($oeuvres[3]['taille']); ?>"
            data-tech="<?php echo htmlspecialchars($oeuvres[3]['technique']); ?>"
            data-date="<?php echo htmlspecialchars($oeuvres[3]['year']); ?>"
          />
          <img
            src="<?php echo htmlspecialchars($oeuvres[4]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-25% md:absolute md:top-35% md:left-13% lg:left-10%"
            alt="Oeuvre intitulée <?php echo htmlspecialchars($oeuvres[4]['nom']); ?>"
            data-nom="<?php echo htmlspecialchars($oeuvres[4]['nom']); ?>"
            data-taille="<?php echo htmlspecialchars($oeuvres[4]['taille']); ?>"
            data-tech="<?php echo htmlspecialchars($oeuvres[4]['technique']); ?>"
            data-date="<?php echo htmlspecialchars($oeuvres[4]['year']); ?>"
          />
          <img
            src="<?php echo htmlspecialchars($oeuvres[5]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-35% md:absolute md:top-33% lg:top-28% md:right-20%"
            alt="Oeuvre intitulée <?php echo htmlspecialchars($oeuvres[5]['nom']); ?>"
            data-nom="<?php echo htmlspecialchars($oeuvres[5]['nom']); ?>"
            data-taille="<?php echo htmlspecialchars($oeuvres[5]['taille']); ?>"
            data-tech="<?php echo htmlspecialchars($oeuvres[5]['technique']); ?>"
            data-date="<?php echo htmlspecialchars($oeuvres[5]['year']); ?>"
          />
          <img
            src="<?php echo htmlspecialchars($oeuvres[6]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-65% lg:top-53% md:left-2%"
            alt="Oeuvre intitulée <?php echo htmlspecialchars($oeuvres[6]['nom']); ?>"
            data-nom="<?php echo htmlspecialchars($oeuvres[6]['nom']); ?>"
            data-taille="<?php echo htmlspecialchars($oeuvres[6]['taille']); ?>"
            data-tech="<?php echo htmlspecialchars($oeuvres[6]['technique']); ?>"
            data-date="<?php echo htmlspecialchars($oeuvres[6]['year']); ?>"
          />
          <img
            src="<?php echo htmlspecialchars($oeuvres[7]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-14% md:absolute md:top-47% lg:top-48% md:right-2%"
            alt="Oeuvre intitulée <?php echo htmlspecialchars($oeuvres[7]['nom']); ?>"
            data-nom="<?php echo htmlspecialchars($oeuvres[7]['nom']); ?>"
            data-taille="<?php echo htmlspecialchars($oeuvres[7]['taille']); ?>"
            data-tech="<?php echo htmlspecialchars($oeuvres[7]['technique']); ?>"
            data-date="<?php echo htmlspecialchars($oeuvres[7]['year']); ?>"
          />
          <img
            src="<?php echo htmlspecialchars($oeuvres[8]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% lg:w-18% md:absolute md:top-70% lg:top-65% md:left-23%"
            alt="Oeuvre intitulée <?php echo htmlspecialchars($oeuvres[8]['nom']); ?>"
            data-nom="<?php echo htmlspecialchars($oeuvres[8]['nom']); ?>"
            data-taille="<?php echo htmlspecialchars($oeuvres[8]['taille']); ?>"
            data-tech="<?php echo htmlspecialchars($oeuvres[8]['technique']); ?>"
            data-date="<?php echo htmlspecialchars($oeuvres[8]['year']); ?>"
          />
          <img
            src="<?php echo htmlspecialchars($oeuvres[9]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-75% lg:top-75% md:right-34% lg:right-40%"
            alt="Oeuvre intitulée <?php echo htmlspecialchars($oeuvres[9]['nom']); ?>"
            data-nom="<?php echo htmlspecialchars($oeuvres[9]['nom']); ?>"
            data-taille="<?php echo htmlspecialchars($oeuvres[9]['taille']); ?>"
            data-tech="<?php echo htmlspecialchars($oeuvres[9]['technique']); ?>"
            data-date="<?php echo htmlspecialchars($oeuvres[9]['year']); ?>"
          />
          <img
            src="<?php echo htmlspecialchars($oeuvres[10]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-70% lg:top-70% md:right-9%"
            alt="Oeuvre intitulée <?php echo htmlspecialchars($oeuvres[10]['nom']); ?>"
            data-nom="<?php echo htmlspecialchars($oeuvres[10]['nom']); ?>"
            data-taille="<?php echo htmlspecialchars($oeuvres[10]['taille']); ?>"
            data-tech="<?php echo htmlspecialchars($oeuvres[10]['technique']); ?>"
            data-date="<?php echo htmlspecialchars($oeuvres[10]['year']); ?>"
          />
          <img
            src="<?php echo htmlspecialchars($oeuvres[11]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-95% lg:top-80% md:left-3%"
            alt="Oeuvre intitulée <?php echo htmlspecialchars($oeuvres[11]['nom']); ?>"
            data-nom="<?php echo htmlspecialchars($oeuvres[11]['nom']); ?>"
            data-taille="<?php echo htmlspecialchars($oeuvres[11]['taille']); ?>"
            data-tech="<?php echo htmlspecialchars($oeuvres[11]['technique']); ?>"
            data-date="<?php echo htmlspecialchars($oeuvres[11]['year']); ?>"
          />
          <img
            src="<?php echo htmlspecialchars($oeuvres[12]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-100% lg:top-88% md:left-22% lg:left-19%"
            alt="Oeuvre intitulée <?php echo htmlspecialchars($oeuvres[12]['nom']); ?>"
            data-nom="<?php echo htmlspecialchars($oeuvres[12]['nom']); ?>"
            data-taille="<?php echo htmlspecialchars($oeuvres[12]['taille']); ?>"
            data-tech="<?php echo htmlspecialchars($oeuvres[12]['technique']); ?>"
            data-date="<?php echo htmlspecialchars($oeuvres[12]['year']); ?>"
          />
          <img
            src="<?php echo htmlspecialchars($oeuvres[13]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-20% md:absolute md:top-95% lg:top-90% md:right-25%"
            alt="Oeuvre intitulée <?php echo htmlspecialchars($oeuvres[13]['nom']); ?>"
            data-nom="<?php echo htmlspecialchars($oeuvres[13]['nom']); ?>"
            data-taille="<?php echo htmlspecialchars($oeuvres[13]['taille']); ?>"
            data-tech="<?php echo htmlspecialchars($oeuvres[13]['technique']); ?>"
            data-date="<?php echo htmlspecialchars($oeuvres[13]['year']); ?>"
          />
          <img
            src="<?php echo htmlspecialchars($oeuvres[14]['img']); ?>"
            class="peinture hover:invert hover hover:grayscale cursor-pointer duration-1000 ease-in-out object-cover w-1/3 md:w-15% md:absolute md:top-90% lg:top-94% md:right-5%"
            alt="Oeuvre intitulée <?php echo htmlspecialchars($oeuvres[14]['nom']); ?>"
            data-nom="<?php echo htmlspecialchars($oeuvres[14]['nom']); ?>"
            data-taille="<?php echo htmlspecialchars($oeuvres[14]['taille']); ?>"
            data-tech="<?php echo htmlspecialchars($oeuvres[14]['technique']); ?>"
            data-date="<?php echo htmlspecialchars($oeuvres[14]['year']); ?>"
          />
        </section>

        <!-- Exposition -->
        <section
          id="exposition"
          class="scrollSpy md:h-screen bg-bg-main bg-cover bg-fixed pt-20 font-G-Black text-sm md:text-md flex justify-center lg:items-center"
        >
          <div
            class="md:pl-10% w-95% md:w-full flex flex-col md:flex-row md:justify-center md:items-start h-80% flex-wrap"
          >
            <div class="lg:mr-28 pb-10 md:w-70% md:pb-20 lg:w-40%">
              <h2 class="text-2xl pb-5">EXPOSITIONS</h2>
              <div
                class="flex flex-wrap overflow-scroll overflow-x-hidden h-96 scrollbar-thin scrollbar-track-slate-300 hover:scrollbar-thumb-zinc-900"
              >
                <?php foreach ($exposPasse as $expoPasse) { ?>
                  <div class="mb-5 mr-5 w-45%">
                    <p class="font-G-Black"><?php echo htmlspecialchars($expoPasse['year']); ?></p>
                    <p class="font-G-Medium"><?php echo htmlspecialchars($expoPasse['nom']); ?></p>
                    <p class="font-G-Bold"><?php echo htmlspecialchars($expoPasse['lieu']); ?></p>
                  </div>
                <?php } ?>
              </div>
            </div>
            <div class="pb-10 md:40% lg:w-15% md:mr-20">
              <h2 class="text-2xl pb-5">RESIDENCES</h2>
              <div>
                <?php foreach ($exposResidence as $expoResidence) { ?>
                  <div class="mb-5 mr-5 w-45%">
                    <p class="font-G-Black"><?php echo htmlspecialchars($expoResidence['year']); ?></p>
                    <p class="font-G-Medium"><?php echo htmlspecialchars($expoResidence['nom']); ?></p>
                    <p class="font-G-Bold"><?php echo htmlspecialchars($expoResidence['lieu']); ?></p>
                  </div>
                <?php } ?>
              </div>
            </div>
            <div class="pb-10 md:40% lg:w-15%">
              <h2 class="text-2xl pb-5">EXPOSITION A VENIR</h2>
              <?php if (count($exposFutur) >= 1) { ?>
                <div>
                  <?php foreach ($exposFutur as $expoFutur) { ?>
                    <div class="mb-5 mr-5 w-45%">
                      <p class="font-G-Black"><?php echo htmlspecialchars($expoFutur['year']); ?></p>
                      <p class="font-G-Medium"><?php echo htmlspecialchars($expoFutur['nom']); ?></p>
                      <p class="font-G-Bold"><?php echo htmlspecialchars($expoFutur['lieu']); ?></p>
                    </div>
                  <?php } ?>
                </div>
              <?php } else { ?>
                <p>Actuellement aucune exposition n'est à venir.</p>
              <?php } ?>
            </div>
          </div>
        </section>
        <!-- Galerie Workshop -->
        <section
          id="workshop"
          class="scrollSpy relative top-28 flex flex-wrap md:block md:h-1000 lg:h-1900 mb-20 md:mb-96"
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
