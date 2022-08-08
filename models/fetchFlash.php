<?php

require_once "../models/db_login.php";

$nom = $_POST['nom'];

$sql = 'SELECT id_image FROM `image`
        WHERE img = :nom;';
$query = $db->prepare($sql);
$query->bindValue(':nom', $nom, PDO::PARAM_STR);
$query->execute();
$imgFetch = $query->fetch(PDO::FETCH_ASSOC);


$sql = 'SELECT * FROM tattoo
        INNER JOIN `image` ON `image`.id_image = tattoo.id_image
        INNER JOIN `prix` ON `prix`.id_prix = tattoo.id_prix
        WHERE tattoo.id_image = :idImg;';
$query = $db->prepare($sql);
$query->bindValue(':idImg', $imgFetch['id_image'], PDO::PARAM_INT);
$query->execute();
$dataExpo = $query->fetch(PDO::FETCH_ASSOC);
echo json_encode($dataExpo);