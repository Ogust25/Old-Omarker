<?php

require_once "../models/db_login.php";

// Verifying form fields
if(isset($_POST['expoNom']) && !empty($_POST['expoNom'])
&& isset($_POST['expoDate']) && !empty($_POST['expoDate'])
&& isset($_POST['expoLieu']) && !empty($_POST['expoLieu'])
&& isset($_POST['type']) && !empty($_POST['type'])){

    // Data cleaning & storing in variables
    $nom = strip_tags($_POST['expoNom']);
    $date = strip_tags($_POST['expoDate']);
    $lieu = strip_tags($_POST['expoLieu']);
    $type = strip_tags($_POST['type']);


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
        $dateValide = $query->fetch(PDO::FETCH_ASSOC);
    }else{
        $sql = "SELECT `id_year` FROM `year` WHERE `year` = $date";
        $query = $db->prepare($sql);
        $query->execute();
        $dateValide = $query->fetch(PDO::FETCH_ASSOC);
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
        $lieuValide = $query->fetch(PDO::FETCH_ASSOC);
    }else{
        $sql = "SELECT `id_lieu` FROM `lieu` WHERE `lieu` = '".$lieu."'";
        $query = $db->prepare($sql);
        $query->execute();
        $lieuValide = $query->fetch(PDO::FETCH_ASSOC);
    }

    // Data insertion into the database
    $sql = 'INSERT INTO `expo` (`nom`, `id_year`, `id_lieu`, `id_type-expo`) VALUES (:nom, :id_year, :id_lieu, :typeExpo);';
    $query = $db->prepare($sql);
    $query->bindValue(':nom', $nom, PDO::PARAM_STR);
    $query->bindValue(':id_year', $dateValide['id_year'], PDO::PARAM_INT);
    $query->bindValue(':id_lieu', $lieuValide['id_lieu'], PDO::PARAM_STR);
    $query->bindValue(':typeExpo', $type, PDO::PARAM_INT);
    $query->execute();

}
$res = array('validation' => "good");
echo json_encode($res);