    <div class="flex flex-wrap justify-evenly">
    <!-- Contenu a afficher -->
    <?php foreach ($oeuvres as $oeuvre) { ?>
        <div class="w-20% mx-10 my-5 hover:invert">
        <img src="<?php echo htmlspecialchars($oeuvre['img']); ?>" alt="osef" />
        </div>
        <?php } ?>
        </div>
