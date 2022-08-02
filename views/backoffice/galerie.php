<div class="flex flex-wrap justify-evenly">
    <!-- Contenu a afficher -->
    <?php foreach ($$noms as $frame) { ?>
        <div class="w-20% mx-10 my-5 hover:invert">
            <img src="<?php echo htmlspecialchars($frame['img']); ?>" alt="osef" />
        </div>
    <?php } ?>
</div>