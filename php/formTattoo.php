<?php

$regleNomPrenom = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u";
$regleEmail = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/";
$regleProjet = "/^[a-zA-Z0-9àáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'()\r\n-]+$/u";
$regleEmplacement = "/^[a-zA-Z0-9àáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'()-]+$/u";
$regleTaille = "/^[a-zA-Z0-9àáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'()-]+$/u";
$regleBudget = "/^[a-zA-Z0-9àáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'()-]+$/u";

if((isset($_POST['nomPrenom']))&&(preg_match($regleNomPrenom, $_POST['nomPrenom']))){
    $nomPrenom = $_POST['nomPrenom'];
}
if((isset($_POST['email']))&&(preg_match($regleEmail, $_POST['email']))){
    $email = $_POST['email'];
}
if((isset($_POST['projetFlash']))&&(preg_match($regleProjet, $_POST['projetFlash']))){
    $projet = $_POST['projetFlash'];
}
if((isset($_POST['emplacementFlash']))&&(preg_match($regleEmplacement, $_POST['emplacementFlash']))){
    $emplacement = $_POST['emplacementFlash'];
}
if((isset($_POST['tailleFlash']))&&(preg_match($regleTaille, $_POST['tailleFlash']))){
    $taille = $_POST['tailleFlash'];
}
if((isset($_POST['budgetFlash']))&&(preg_match($regleBudget, $_POST['budgetFlash']))){
    $budget = $_POST['budgetFlash'];
}
$firstTattoo = $_POST['firstTattoo'];
$flashImporte = $_FILES['flashImporte']['name'];
$flashChoisi = strstr($_POST['flashChoisi'], 'flashs/');

if ($_FILES['flashImporte']['name']) {
    $source = true;
} else {
    $source = false;
}


if(($nomPrenom)&&($email)&&($projet)&&($emplacement)&&($taille)&&($budget)&&($firstTattoo)){
    $res = array('validation' => "Merci !");
    
    if ($source) {
        /* Upload l'image */
        $target_dir = "../assets/upload/";
        $target_file = $target_dir . basename($_FILES["flashImporte"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["flashImporte"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["flashImporte"]["size"] > 500000) {
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
            if (move_uploaded_file($_FILES["flashImporte"]["tmp_name"], $target_file)) {
                //echo "Good job img uploaded";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
    echo json_encode($res);
    
    
    /* Envoi du mail */
    $mail = 'wcpdduddstfm@midiharmonica.com'; // Déclaration de l'adresse de destination.
    if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
    {
        $passage_ligne = "\r\n";
    }
    else
    {
        $passage_ligne = "\n";
    }
    //=====Déclaration des messages au format texte et au format HTML.
    $message_txt = "Son projet : ".$projet." Emplacment : ".$emplacement." Taille : ".$taille." Budget : ".$budget." 1er Tattoo ? ".$firstTattoo;
    if ($source) {
        $message_html = "<html><head></head><body><strong>Son projet :</strong><br>".$projet."<br><strong>Emplacement :</strong><br>".$emplacement."<br><strong>Taille :</strong><br>".$taille."<br><strong>Budget :</strong><br>".$budget."<br><strong>Premier tattoo ?</strong><br>".$firstTattoo."<br><strong>Le flash choisi :</strong><br><img style='width:300px; height:300px;' src='https://augustg.promo-106.codeur.online/omarker/assets/upload/".$flashImporte."' alt='un flash'></body></html>";
    } else {
        $message_html = "<html><head></head><body><strong>Son projet :</strong><br>".$projet."<br><strong>Emplacement :</strong><br>".$emplacement."<br><strong>Taille :</strong><br>".$taille."<br><strong>Budget :</strong><br>".$budget."<br><strong>Premier tattoo ?</strong><br>".$firstTattoo."<br><strong>Le flash choisi :</strong><br><img style='width:300px; height:300px;' src='https://augustg.promo-106.codeur.online/omarker/assets/images/".$flashChoisi."' alt='un flash'></body></html>";
    }
    
    //==========
    
    //=====Création de la boundary
    $boundary = "-----=".md5(rand());
    //==========
    
    //=====Définition du sujet.
    $sujet = "Demande de tattoo de ". $nomPrenom;
    //=========
    
    //=====Création du header de l'e-mail.
    $header = "From: \"".$nomPrenom."\"<".$email.">".$passage_ligne;
    $header.= "Reply-to: \"".$nomPrenom."\" <".$email.">".$passage_ligne;
    $header.= "MIME-Version: 1.0".$passage_ligne;
    $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
    //==========
    
    //=====Création du message.
    $message = $passage_ligne."--".$boundary.$passage_ligne;
    //=====Ajout du message au format texte.
    $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
    $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
    $message.= $passage_ligne.$message_txt.$passage_ligne;
    //==========
    $message.= $passage_ligne."--".$boundary.$passage_ligne;
    //=====Ajout du message au format HTML
    $message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
    $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
    $message.= $passage_ligne.$message_html.$passage_ligne;
    //==========
    $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
    $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
    //==========
    
    //=====Envoi de l'e-mail.
    mail($mail,$sujet,$message,$header);
    //==========
}

?>