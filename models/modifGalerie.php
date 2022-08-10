<?php

require_once "../models/db_login.php";

if(isset($_FILES['expoImg']) && !empty($_FILES['expoImg'])){

    $id = strip_tags($_POST['id']);
    $local = $_POST['local'];
    $table = $_POST['table'];

        // Add img
        $target_dir = "../assets/images/".$local."/";
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
                $linkImg = 'https://augustg.promo-106.codeur.online/omarker/assets/images/'.$local.'/'.$_FILES["expoImg"]["name"];

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

    // Data insertion into the database
    if ($table == 'peinture') {
        $sql = "UPDATE peinture SET `id_image`=:idImg WHERE `id_peinture`=:idType;";
        $query = $db->prepare($sql);
        $query->bindValue(':idType', $id, PDO::PARAM_INT);
        $query->bindValue(':idImg', $imgValide['id_image'], PDO::PARAM_INT);
        $query->execute();
        echo json_encode('ok peinture');
    } elseif ($table == 'tattoo') {
        $sql = "UPDATE tattoo SET `id_image`=:idImg WHERE `id_tattoo`=:idType;";
        $query = $db->prepare($sql);
        $query->bindValue(':idType', $id, PDO::PARAM_INT);
        $query->bindValue(':idImg', $imgValide['id_image'], PDO::PARAM_INT);
        $query->execute();
        echo json_encode('ok tattoo');        
    } elseif ($table == 'graphisme') {
        $sql = "UPDATE graphisme SET `id_image`=:idImg WHERE `id_graphsime`=:idType;";
        $query = $db->prepare($sql);
        $query->bindValue(':idType', $id, PDO::PARAM_INT);
        $query->bindValue(':idImg', $imgValide['id_image'], PDO::PARAM_INT);
        $query->execute();
        echo json_encode('ok graphisme');        
    }
}