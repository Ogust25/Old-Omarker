<?php

$stmt = $db->prepare('SELECT `image`.img FROM tattoo
                        INNER JOIN `image` ON `image`.id_image = tattoo.id_image
                        WHERE tattoo.`id_type-tattoo` = 1');
$stmt->execute();
$tattoos = $stmt->fetchAll(PDO::FETCH_ASSOC);