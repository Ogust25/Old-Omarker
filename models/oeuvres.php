<?php

$stmt = $db->prepare('SELECT nom, `year`.`year`, technique.technique, taille.taille, `image`.img FROM peinture
                        INNER JOIN `year` ON `year`.id_year = peinture.id_year
                        INNER JOIN technique ON technique.id_technique = peinture.id_technique
                        INNER JOIN taille ON taille.id_taille = peinture.id_taille
                        INNER JOIN `image` ON `image`.id_image = peinture.id_image
                        WHERE peinture.`id_type-peinture` = 2');
$stmt->execute();
$oeuvres = $stmt->fetchAll(PDO::FETCH_ASSOC);