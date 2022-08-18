<?php

$stmt = $db->prepare('SELECT `image`.img, prix.prix, id_tattoo FROM tattoo
                        INNER JOIN `image` ON `image`.id_image = tattoo.id_image
                        INNER JOIN prix ON prix.id_prix = tattoo.id_prix
                        WHERE tattoo.`id_type-tattoo` = 2
                        ORDER BY prix.prix');
$stmt->execute();
$flashs = $stmt->fetchAll(PDO::FETCH_ASSOC);