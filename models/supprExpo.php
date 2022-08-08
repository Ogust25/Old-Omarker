<?php

require_once "../models/db_login.php";

$nom = $_POST['nom'];

$sql = 'SELECT id_expo FROM expo WHERE nom = :nom;';
$query = $db->prepare($sql);
$query->bindValue(':nom', $nom, PDO::PARAM_STR);
$query->execute();
$idExpo = $query->fetch(PDO::FETCH_ASSOC);

// Delete request
$sql = 'DELETE FROM expo WHERE `id_expo` = :idExpo;';
$query = $db->prepare($sql);
$query->bindValue(':idExpo', $idExpo['id_expo'], PDO::PARAM_INT);
$query->execute();
echo json_encode('');