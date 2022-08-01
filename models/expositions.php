<?php

$stmt = $db->prepare('SELECT nom, `year`.`year`, lieu.lieu FROM expo
                        INNER JOIN `year` ON `year`.id_year = expo.id_year
                        INNER JOIN lieu ON lieu.id_lieu = expo.id_lieu
                        WHERE expo.`id_type-expo` = 1');
$stmt->execute();
$exposPasse = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $db->prepare('SELECT nom, `year`.`year`, lieu.lieu FROM expo
                        INNER JOIN `year` ON `year`.id_year = expo.id_year
                        INNER JOIN lieu ON lieu.id_lieu = expo.id_lieu
                        WHERE expo.`id_type-expo` = 2');
$stmt->execute();
$exposResidence = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $db->prepare('SELECT nom, `year`.`year`, lieu.lieu FROM expo
                        INNER JOIN `year` ON `year`.id_year = expo.id_year
                        INNER JOIN lieu ON lieu.id_lieu = expo.id_lieu
                        WHERE expo.`id_type-expo` = 3');
$stmt->execute();
$exposFutur = $stmt->fetchAll(PDO::FETCH_ASSOC);