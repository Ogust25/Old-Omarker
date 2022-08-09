<?php

require_once "../models/db_login.php";

$id = $_POST['id'];

$sql = 'SELECT * FROM peinture
        INNER JOIN `image` ON `image`.id_image = peinture.id_image
        INNER JOIN `technique` ON `technique`.id_technique = peinture.id_technique
        INNER JOIN `year` ON `year`.id_year = peinture.id_year
        INNER JOIN `taille` ON `taille`.id_taille = peinture.id_taille
        WHERE id_peinture = :id;';
$query = $db->prepare($sql);
$query->bindValue(':id', $id, PDO::PARAM_INT);
$query->execute();
$dataExpo = $query->fetch(PDO::FETCH_ASSOC);
echo json_encode($dataExpo);