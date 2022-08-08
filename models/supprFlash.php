<?php

require_once "../models/db_login.php";

$nom = $_POST['nom'];

$sql = 'SELECT id_image FROM `image`
        WHERE img = :nom;';
$query = $db->prepare($sql);
$query->bindValue(':nom', $nom, PDO::PARAM_STR);
$query->execute();
$imgFetch = $query->fetch(PDO::FETCH_ASSOC);

$sql = 'SELECT id_tattoo FROM tattoo WHERE id_image = :idImg;';
$query = $db->prepare($sql);
$query->bindValue(':idImg', $imgFetch['id_image'], PDO::PARAM_INT);
$query->execute();
$idTattoo = $query->fetch(PDO::FETCH_ASSOC);

// Delete request
$sql = 'DELETE FROM tattoo WHERE `id_tattoo` = :idTattoo;';
$query = $db->prepare($sql);
$query->bindValue(':idTattoo', $idTattoo['id_tattoo'], PDO::PARAM_INT);
$query->execute();
echo json_encode('');