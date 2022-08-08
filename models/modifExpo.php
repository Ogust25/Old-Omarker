<?php

require_once "../models/db_login.php";

// Verifying form fields
if(isset($_POST['expoMNom']) && !empty($_POST['expoMNom'])
&& isset($_POST['expoMLieu']) && !empty($_POST['expoMLieu'])
&& isset($_POST['expoMDate']) && !empty($_POST['expoMDate'])){

    // Data cleaning & storing in variables
    $nom = strip_tags($_POST['expoMNom']);
    $lieu = strip_tags($_POST['expoMLieu']);
    $date = strip_tags($_POST['expoMDate']);
    $type = strip_tags($_POST['type']);
    $id = strip_tags($_POST['id']);

    // Test if date already exist
    $sql = "SELECT `year` FROM `year` WHERE `year` = $date LIMIT 1";
    $queryDate = $db->prepare($sql);
    $queryDate->execute();
    $testDate = $queryDate->fetch(PDO::FETCH_ASSOC);

    if ($testDate == 0) {
        $sql = 'INSERT INTO `year` (`year`) VALUES (:yearr);';
        $query = $db->prepare($sql);
        $query->bindValue(':yearr', $date, PDO::PARAM_INT);
        $query->execute();

        $sql = "SELECT `id_year` FROM `year` WHERE `year` = $date";
        $query = $db->prepare($sql);
        $query->execute();
        $idDate = $query->fetch(PDO::FETCH_ASSOC);
    }else{
        $sql = "SELECT `id_year` FROM `year` WHERE `year` = $date";
        $query = $db->prepare($sql);
        $query->execute();
        $idDate = $query->fetch(PDO::FETCH_ASSOC);
    }

    // Test if lieu already exist
    $sql = "SELECT lieu.lieu FROM lieu WHERE lieu.lieu = '".$lieu."' LIMIT 1";
    $queryLieu = $db->prepare($sql);
    $queryLieu->execute();
    $testLieu = $queryLieu->fetch(PDO::FETCH_ASSOC);

    if ($testLieu == 0) {
        $sql = 'INSERT INTO `lieu` (`lieu`) VALUES (:lieu);';
        $query = $db->prepare($sql);
        $query->bindValue(':lieu', $lieu, PDO::PARAM_STR);
        $query->execute();

        $sql = "SELECT `id_lieu` FROM `lieu` WHERE `lieu` = '".$lieu."'";
        $query = $db->prepare($sql);
        $query->execute();
        $idLieu = $query->fetch(PDO::FETCH_ASSOC);
    }else{
        $sql = "SELECT `id_lieu` FROM `lieu` WHERE `lieu` = '".$lieu."'";
        $query = $db->prepare($sql);
        $query->execute();
        $idLieu = $query->fetch(PDO::FETCH_ASSOC);
    }

    // Data insertion into the database
    $sql = 'UPDATE expo SET `nom`=:nom, `id_year`=:idDate, `id_lieu`=:idLieu WHERE `id_expo`=:id_expo;';
    $query = $db->prepare($sql);
    $query->bindValue(':id_expo', $id, PDO::PARAM_INT);
    $query->bindValue(':nom', $nom, PDO::PARAM_STR);
    $query->bindValue(':idDate', $idDate['id_year'], PDO::PARAM_INT);
    $query->bindValue(':idLieu', $idLieu['id_lieu'], PDO::PARAM_INT);
    $query->execute();
    echo json_encode('ok');
}