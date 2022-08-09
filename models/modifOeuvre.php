<?php

require_once "../models/db_login.php";

// Verifying form fields
if(isset($_POST['expoNom']) && !empty($_POST['expoNom'])
&& isset($_POST['expoTaille']) && !empty($_POST['expoTaille'])
&& isset($_POST['expoTech']) && !empty($_POST['expoTech'])
&& isset($_POST['expoDate']) && !empty($_POST['expoDate'])){

    // Data cleaning & storing in variables
    $nom = strip_tags($_POST['expoNom']);
    $taille = strip_tags($_POST['expoTaille']);
    $tech = strip_tags($_POST['expoTech']);
    $date = strip_tags($_POST['expoDate']);
    $id = strip_tags($_POST['id']);

    // Test if taille already exist
    $sql = "SELECT taille FROM taille WHERE taille = '".$taille."' LIMIT 1";
    $queryTaille = $db->prepare($sql);
    $queryTaille->execute();
    $testTaille = $queryTaille->fetch(PDO::FETCH_ASSOC);

    if ($testTaille == 0) {
        $sql = 'INSERT INTO taille (taille) VALUES (:taille);';
        $query = $db->prepare($sql);
        $query->bindValue(':taille', $taille, PDO::PARAM_STR);
        $query->execute();

        $sql = "SELECT id_taille FROM taille WHERE taille = '".$taille."'";
        $query = $db->prepare($sql);
        $query->execute();
        $tailleValide = $query->fetch(PDO::FETCH_ASSOC);
    }else{
        $sql = "SELECT id_taille FROM taille WHERE taille = '".$taille."'";
        $query = $db->prepare($sql);
        $query->execute();
        $tailleValide = $query->fetch(PDO::FETCH_ASSOC);
    }

    // Test if technique already exist
    $sql = "SELECT technique FROM technique WHERE technique = '".$tech."' LIMIT 1";
    $queryTechnique = $db->prepare($sql);
    $queryTechnique->execute();
    $testTechnique = $queryTechnique->fetch(PDO::FETCH_ASSOC);

    if ($testTechnique == 0) {
        $sql = 'INSERT INTO technique (technique) VALUES (:technique);';
        $query = $db->prepare($sql);
        $query->bindValue(':technique', $tech, PDO::PARAM_STR);
        $query->execute();

        $sql = "SELECT id_technique FROM technique WHERE technique = '".$tech."'";
        $query = $db->prepare($sql);
        $query->execute();
        $techValide = $query->fetch(PDO::FETCH_ASSOC);
    }else{
        $sql = "SELECT id_technique FROM technique WHERE technique = '".$tech."'";
        $query = $db->prepare($sql);
        $query->execute();
        $techValide = $query->fetch(PDO::FETCH_ASSOC);
    }

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

        $sql = "SELECT id_year FROM `year` WHERE `year` = '".$date."'";
        $query = $db->prepare($sql);
        $query->execute();
        $dateValide = $query->fetch(PDO::FETCH_ASSOC);
    }else{
        $sql = "SELECT id_year FROM `year` WHERE `year` = '".$date."'";
        $query = $db->prepare($sql);
        $query->execute();
        $dateValide = $query->fetch(PDO::FETCH_ASSOC);
    }

    // Test if img change
    if($_FILES['expoImg']['name'] != ''){
        // Add img
        $target_dir = "../assets/images/oeuvresOmarker/";
        $target_file = $target_dir . basename($_FILES["expoImg"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["expoImg"]["tmp_name"]);
        if($check !== false) {
          //echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
        } else {
          echo "File is not an image.";
          $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["expoImg"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
          // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["expoImg"]["tmp_name"], $target_file)) {
                $linkImg = 'https://augustg.promo-106.codeur.online/omarker/assets/images/oeuvresOmarker/'.$_FILES["expoImg"]["name"];

                $sql = "SELECT img FROM `image` WHERE img = '".$linkImg."' LIMIT 1";
                $queryImg = $db->prepare($sql);
                $queryImg->execute();
                $testImg = $queryImg->fetch(PDO::FETCH_ASSOC);
    
                if ($testImg == 0) {
                    $sql = 'INSERT INTO `image` (img) VALUES (:img);';
                    $query = $db->prepare($sql);
                    $query->bindValue(':img', $linkImg, PDO::PARAM_STR);
                    $query->execute();
    
                    $sql = "SELECT id_image FROM `image` WHERE img = '".$linkImg."'";
                    $query = $db->prepare($sql);
                    $query->execute();
                    $imgValide = $query->fetch(PDO::FETCH_ASSOC);
                }else{
                    $sql = "SELECT id_image FROM `image` WHERE img = '".$linkImg."'";
                    $query = $db->prepare($sql);
                    $query->execute();
                    $imgValide = $query->fetch(PDO::FETCH_ASSOC);
                }
            }
        }

    }

    if($_FILES['expoImg']['name'] != ''){
        // Data insertion into the database
        $sql = 'UPDATE peinture SET `id_image`=:idImg, `nom`=:nom, `id_year`=:idYear, `id_technique`=:idTech, `id_taille`=:idTaille WHERE `id_peinture`=:idPeinture;';
        $query = $db->prepare($sql);
        $query->bindValue(':idPeinture', $id, PDO::PARAM_INT);
        $query->bindValue(':idImg', $imgValide['id_image'], PDO::PARAM_INT);
        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':idYear', $dateValide['id_year'], PDO::PARAM_INT);
        $query->bindValue(':idTech', $techValide['id_technique'], PDO::PARAM_INT);
        $query->bindValue(':idTaille', $tailleValide['id_taille'], PDO::PARAM_INT);
        $query->execute();
        echo json_encode('ok image');
    }else{
        // Data insertion into the database
        $sql = 'UPDATE peinture SET `nom`=:nom, `id_year`=:idYear, `id_technique`=:idTech, `id_taille`=:idTaille WHERE `id_peinture`=:idPeinture;';
        $query = $db->prepare($sql);
        $query->bindValue(':idPeinture', $id, PDO::PARAM_INT);
        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':idYear', $dateValide['id_year'], PDO::PARAM_INT);
        $query->bindValue(':idTech', $techValide['id_technique'], PDO::PARAM_INT);
        $query->bindValue(':idTaille', $tailleValide['id_taille'], PDO::PARAM_INT);
        $query->execute();
        echo json_encode('ok');
    }
}