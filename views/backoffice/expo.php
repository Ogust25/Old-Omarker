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
      <div class="flex-col flex" id="main">
        <section class="flex flex-col">
          <h2 class="my-5 ml-5 text-5xl font-bebas font-bold">Expo Passé</h2>
          <div class="flex flex-wrap">
            <button class="w-15% mx-10 my-5 hover:text-slate-500 hover:border-slate-500 font-bebas text-2xl flex justify-center items-center border rounded-md border-black cursor-pointer btnAddExpo" data-type="1">
              Ajouter
            </button>
            <!-- Contenu a afficher -->
            <?php foreach ($exposPasse as $expoPasse) { ?>
              <div class="w-15% mx-10 my-5 hover:text-slate-500 font-bebas text-xl cursor-pointer">
                <p><?php echo htmlspecialchars($expoPasse['year']); ?></p>
                <p><?php echo htmlspecialchars($expoPasse['nom']); ?></p>
                <p><?php echo htmlspecialchars($expoPasse['lieu']); ?></p>
              </div>
            <?php } ?>
          </div>
        </section>

        <section class="flex flex-col">
          <h2 class="my-5 ml-5 text-5xl font-bebas font-bold">Residence</h2>
          <div class="flex flex-wrap">
            <button class="w-15% mx-10 my-5 hover:text-slate-500 hover:border-slate-500 font-bebas text-2xl flex justify-center items-center border rounded-md border-black cursor-pointer btnAddExpo" data-type="2">
              Ajouter
            </button>
            <!-- Contenu a afficher -->
            <?php foreach ($exposResidence as $expoResidence) { ?>
              <div class="w-15% mx-10 my-5 hover:text-slate-500 font-bebas text-xl cursor-pointer">
                <p><?php echo htmlspecialchars($expoResidence['year']); ?></p>
                <p><?php echo htmlspecialchars($expoResidence['nom']); ?></p>
                <p><?php echo htmlspecialchars($expoResidence['lieu']); ?></p>
              </div>
            <?php } ?>
          </div>
        </section>

        <section class="flex flex-col">
          <h2 class="my-5 ml-5 text-5xl font-bebas font-bold">Expo Futur</h2>
          <div class="flex flex-wrap">
            <button class="w-15% mx-10 my-5 hover:text-slate-500 hover:border-slate-500 font-bebas text-2xl flex justify-center items-center border rounded-md border-black cursor-pointer btnAddExpo" data-type="3">
              Ajouter
            </button>
            <!-- Contenu a afficher -->
            <?php foreach ($exposFutur as $expoFutur) { ?>
            <div class="w-15% mx-10 my-5 hover:text-slate-500 font-bebas text-xl cursor-pointer">
              <p><?php echo htmlspecialchars($expoFutur['year']); ?></p>
              <p><?php echo htmlspecialchars($expoFutur['nom']); ?></p>
              <p><?php echo htmlspecialchars($expoFutur['lieu']); ?></p>
            </div>
            <?php } ?>
          </div>
        </section>
      </div>
      <!-- Modal pour ajouter des expos -->
      <div class="justify-center items-center mt-20 w-screen hidden" id="modal">
        <form method="POST" class="flex flex-col font-bebas text-xl border p-10 w-1/3" id="formAdd">
          <label for="expoNom">NOM</label>
          <input class="border-b border-b-black " type="text" id="expoNom" name="expoNom">
          <label class="mt-5" for="expoDate">DATE</label>
          <input class="border-b border-b-black " type="text" id="expoDate" name="expoDate">
          <label class="mt-5" for="expoLieu">LIEU</label>
          <input class="border-b border-b-black " type="text" id="expoLieu" name="expoLieu">
          <input class="mt-10 text-2xl font-bold hover:text-green-500 cursor-pointer" type="submit" value="Valider">
          <button class="mt-5 text-2xl font-bold hover:text-red-500 cursor-pointer" id="btnAnnuler">Annuler</button>
        </form>
      </div>
    </main>
    <script src="./js/backoffice.js"></script>
    <script src="./js/addExpo.js"></script>
  </body>
</html>