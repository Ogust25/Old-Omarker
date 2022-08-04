<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Primary Meta Tags -->
    <title>Omarker | Back Office</title>
    <meta name="title" content="Omarker | Back Office" />
    <meta
      name="description"
      content="Back Office de l'artiste Omarker, peintre et tatoueur."
    />

    <!-- Links / Scripts -->
    <link rel="stylesheet" href="./dist/output.css" />
    <link
      rel="shortcut icon"
      href="./assets/images/blaze.png"
      type="image/x-icon"
    />
  </head>
  <body class="h-full">
    <header>
      <nav>
        <ul
          class="flex justify-evenly font-bebas text-4xl py-5 border-black border-b-2 border border-t-0 shadow-md"
        >
          <li class="hover:font-bold cursor-pointer" id="btnPeinture">
            PEINTURE
          </li>
          <li class="hover:font-bold cursor-pointer" id="btnTattoo">TATTOO</li>
          <li class="hover:font-bold cursor-pointer" id="btnGraphisme">
            GRAPHISME
          </li>
        </ul>
        <ul
          class="flex justify-center font-bebas text-3xl py-5 border-black border border-b-2 border-t-0 shadow-md"
          id="menuPeinture"
        >
          <li class="hover:font-bold cursor-pointer mr-10" id="btnMur"><a href="./backoffice">MUR</a></li>
          <li class="hover:font-bold cursor-pointer mr-10" id="btnOeuvre"><a href="./backofficeOeuvre">OEUVRE</a></li>
          <li class="hover:font-bold cursor-pointer mr-10" id="btnExpo"><a href="./backofficeExpo">EXPOSITION</a></li>
          <li class="hover:font-bold cursor-pointer" id="btnWorkshop"><a href="./backofficeWorkshop">WORKSHOP</a></li>
        </ul>
        <ul
          class="hidden justify-center font-bebas text-3xl py-5 border-black border border-b-2 border-t-0 shadow-md"
          id="menuTattoo"
        >
          <li class="hover:font-bold cursor-pointer mr-10" id="btnTatouage"><a href="./backofficeTattoo">TATTOO</a></li>
          <li class="hover:font-bold cursor-pointer mr-10" id="btnFlash"><a href="./backofficeFlash">FLASH</a></li>
        </ul>
        <ul
          class="hidden justify-center font-bebas text-3xl py-5 border-black border border-b-2 border-t-0 shadow-md"
          id="menuGraphisme"
        >
          <li class="hover:font-bold cursor-pointer mr-10" id="btnDirArt">
            <a href="./backofficeDirArt">DIRECTION ARTISTIQUE</a>
          </li>
          <li class="hover:font-bold cursor-pointer mr-10" id="btnIdVisu">
            <a href="./backofficeIdVisu">IDENTITE VISUELLE</a>
          </li>
          <li class="hover:font-bold cursor-pointer" id="btnPrint"><a href="./backofficePrint">PRINT</a></li>
        </ul>
      </nav>
    </header>
<main>
    <div class="flex flex-wrap justify-evenly">
        <!-- Contenu a afficher -->
            <button class="w-10% mx-10 my-5 hover:text-slate-500 hover:border-slate-500 font-bebas text-2xl flex justify-center items-center border rounded-md border-black cursor-pointer" id="test">
                Ajouter
            </button>
        <?php foreach ($flashs as $flash) { ?>
            <div class="w-10% mx-10 my-5">
                <img class="hover:invert" src="<?php echo htmlspecialchars($flash['img']); ?>" alt="osef" />
                <p class="font-bebas text-2xl text-center"><?php echo htmlspecialchars($flash['prix']); ?>€</p>
            </div>
        <?php } ?>
    </div>
</main>
<script src="./js/backoffice.js"></script>
</body>
</html>