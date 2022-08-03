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