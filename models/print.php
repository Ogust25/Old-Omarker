<?php

$stmt = $db->prepare('SELECT `image`.img, id_graphisme FROM graphisme
                        INNER JOIN `image` ON `image`.id_image = graphisme.id_image
                        WHERE graphisme.`id_type-graphisme` = 3');
$stmt->execute();
$prints = $stmt->fetchAll(PDO::FETCH_ASSOC);