<main>
<div class="flex flex-col">
    <section class="flex flex-col">
        <h2 class="my-5 ml-5 text-5xl font-bebas font-bold">Expo Passé</h2>
        <div class="flex flex-wrap">
            <button class="w-15% mx-10 my-5 hover:text-slate-500 hover:border-slate-500 font-bebas text-2xl flex justify-center items-center border rounded-md border-black cursor-pointer" id="btnAddExpo">
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
            <div class="w-15% mx-10 my-5 hover:text-slate-500 hover:border-slate-500 font-bebas text-2xl flex justify-center items-center border rounded-md border-black cursor-pointer">
                <p>Ajouter</p>
            </div>
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
            <div class="w-15% mx-10 my-5 hover:text-slate-500 hover:border-slate-500 font-bebas text-2xl flex justify-center items-center border rounded-md border-black cursor-pointer">
                <p>Ajouter</p>
            </div>
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
</main>
<script src="./js/backoffice.js"></script>