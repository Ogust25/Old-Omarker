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
      <div class="flex flex-wrap justify-evenly" id="main">
        <!-- Contenu a afficher -->
        <button class="w-10% mx-10 my-5 hover:text-slate-500 hover:border-slate-500 font-bebas text-2xl flex justify-center items-center border rounded-md border-black cursor-pointer" id="btnAddFlash">
          Ajouter
        </button>
        <?php foreach ($flashs as $flash) { ?>
          <div class="w-10% mx-10 my-5 cursor-pointer boxFlash" data-id="<?php echo htmlspecialchars($flash['id_tattoo']); ?>">
            <img class="hover:invert" src="<?php echo htmlspecialchars($flash['img']); ?>" alt="osef" />
            <p class="font-bebas text-2xl text-center"><?php echo htmlspecialchars($flash['prix']); ?>€</p>
          </div>
        <?php } ?>
      </div>
      <!-- Modal pour ajouter des flashs -->
      <div class="justify-center items-center mt-20 hidden" id="modal">
        <form method="POST" enctype='multipart/form-data' class="flex flex-col font-bebas text-xl border p-10 w-1/3" id="formAdd">
          <img class="mx-auto w-4/6" src="./assets/images/empty.webp" alt="preview du fichier choisis" id="preview">
          <input class="my-5" type="file" name="expoImg" id="expoImg">
          <label for="expoPrix">PRIX</label>
          <input class="border-b border-b-black" type="text" id="expoPrix" name="expoPrix">
          <input class="mt-10 text-2xl font-bold hover:text-green-500 cursor-pointer" type="submit" value="Valider">
          <button class="mt-5 text-2xl font-bold hover:text-red-500 cursor-pointer" type="button" id="btnAnnuler">Annuler</button>
        </form>
      </div>
      <!-- Modal pour modif/suppr des flashs -->
      <div class="justify-center items-center mt-20 hidden" id="modalModif">
        <form method="POST" enctype='multipart/form-data' class="flex flex-col font-bebas text-xl border p-10 w-1/3" id="formModif">
          <img class="mx-auto w-4/6" src="./assets/images/empty.webp" alt="preview du fichier choisis" id="previewM">
          <input class="my-5" type="file" name="expoMImg" id="expoMImg">
          <label for="expoMPrix">PRIX</label>
          <input class="border-b border-b-black" type="text" id="expoMPrix" name="expoMPrix">
          <input class="mt-10 text-2xl font-bold hover:text-green-500 cursor-pointer" type="submit" value="Valider">
          <button class="mt-5 text-2xl font-bold hover:text-red-500 cursor-pointer" type="button" id="btnMAnnuler">Annuler</button>
          <button class="mt-5 text-2xl font-bold hover:text-red-500 cursor-pointer" type="button" id="btnSuppr">Supprimer</button>
        </form>
      </div>
    </main>
    <script src="./js/backoffice.js"></script>
    <script src="./js/addFlash.js"></script>
  </body>
</html>