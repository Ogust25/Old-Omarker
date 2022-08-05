<?php

$stmt = $db->prepare('SELECT `image`.img FROM peinture
                        INNER JOIN `image` ON `image`.id_image = peinture.id_image
                        WHERE peinture.`id_type-peinture` = 1');
$stmt->execute();
$murs = $stmt->fetchAll(PDO::FETCH_ASSOC);