<?php

require_once "../models/db_login.php";

// Verifying form fields
if(isset($_POST['expoMPrix']) && !empty($_POST['expoMPrix'])){

    // Data cleaning & storing in variables
    $prix = strip_tags($_POST['expoMPrix']);
    $id = strip_tags($_POST['id']);

    // Test if prix already exist
    $sql = "SELECT prix FROM prix WHERE prix = $prix LIMIT 1";
    $queryPrix = $db->prepare($sql);
    $queryPrix->execute();
    $testPrix = $queryPrix->fetch(PDO::FETCH_ASSOC);

    if ($testPrix == 0) {
        $sql = 'INSERT INTO prix (prix) VALUES (:prix);';
        $query = $db->prepare($sql);
        $query->bindValue(':prix', $prix, PDO::PARAM_INT);
        $query->execute();

        $sql = "SELECT id_prix FROM prix WHERE prix = $prix";
        $query = $db->prepare($sql);
        $query->execute();
        $prixValide = $query->fetch(PDO::FETCH_ASSOC);
    }else{
        $sql = "SELECT id_prix FROM prix WHERE prix = $prix";
        $query = $db->prepare($sql);
        $query->execute();
        $prixValide = $query->fetch(PDO::FETCH_ASSOC);
    }

    // Test if img change
    if($_FILES['expoMImg']['name'] != ''){
        // Add img
        $target_dir = "../assets/images/flashs/";
        $target_file = $target_dir . basename($_FILES["expoMImg"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["expoMImg"]["tmp_name"]);
        if($check !== false) {
          //echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
        } else {
          echo "File is not an image.";
          $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["expoMImg"]["size"] > 500000) {
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
            if (move_uploaded_file($_FILES["expoMImg"]["tmp_name"], $target_file)) {
                $linkImg = 'https://augustg.promo-106.codeur.online/omarker/assets/images/flashs/'.$_FILES["expoMImg"]["name"];

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

    if($_FILES['expoMImg']['name'] != ''){
        // Data insertion into the database
        $sql = 'UPDATE tattoo SET `id_image`=:idImg, `id_prix`=:idPrix WHERE `id_tattoo`=:idTattoo;';
        $query = $db->prepare($sql);
        $query->bindValue(':idTattoo', $id, PDO::PARAM_INT);
        $query->bindValue(':idImg', $imgValide['id_image'], PDO::PARAM_INT);
        $query->bindValue(':idPrix', $prixValide['id_prix'], PDO::PARAM_INT);
        $query->execute();
        echo json_encode('ok image');
    }else{
        // Data insertion into the database
        $sql = 'UPDATE tattoo SET `id_prix`=:idPrix WHERE `id_tattoo`=:idTattoo;';
        $query = $db->prepare($sql);
        $query->bindValue(':idTattoo', $id, PDO::PARAM_INT);
        $query->bindValue(':idPrix', $prixValide['id_prix'], PDO::PARAM_INT);
        $query->execute();
        echo json_encode('ok');
    }
}