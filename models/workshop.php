<?php

$stmt = $db->prepare('SELECT `image`.img FROM peinture
                        INNER JOIN `image` ON `image`.id_image = peinture.id_image
                        WHERE peinture.`id_type-peinture` = 3');
$stmt->execute();
$workshops = $stmt->fetchAll(PDO::FETCH_ASSOC);