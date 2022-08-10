<?php

require_once "../models/db_login.php";

$id = $_POST['id'];

$sql = 'SELECT * FROM graphisme
        INNER JOIN `image` ON `image`.id_image = graphisme.id_image
        WHERE id_graphisme = :id;';
$query = $db->prepare($sql);
$query->bindValue(':id', $id, PDO::PARAM_INT);
$query->execute();
$dataExpo = $query->fetch(PDO::FETCH_ASSOC);
echo json_encode($dataExpo);