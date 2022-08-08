<?php

require_once "../models/db_login.php";

$nom = $_POST['nom'];

$sql = 'SELECT * FROM expo
        INNER JOIN `year` ON `year`.id_year = expo.id_year
        INNER JOIN `lieu` ON `lieu`.id_lieu = expo.id_lieu
        WHERE nom = :nom;';
$query = $db->prepare($sql);
$query->bindValue(':nom', $nom, PDO::PARAM_STR);
$query->execute();
$dataExpo = $query->fetch(PDO::FETCH_ASSOC);
echo json_encode($dataExpo);