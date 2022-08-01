<main>
    <div class="flex flex-wrap justify-evenly">
        <!-- Contenu a afficher -->
        <?php foreach ($murs as $mur) { ?>
            <div class="w-20% mx-10 my-5 hover:invert">
                <img src="<?php echo htmlspecialchars($mur['img']); ?>" alt="osef" />
            </div>
        <?php } ?>
    </div>
</main>
<script src="./js/backoffice.js"></script>
</body>
</html>
