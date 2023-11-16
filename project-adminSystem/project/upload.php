<?php
    if(isset($_POST['submit'])){
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);

        if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)){
            echo "Le fichier ". basename( $_FILES["file"]["name"]). " a été téléchargé avec succès.";
        } else{
            echo "Une erreur s'est produite lors du téléchargement du fichier.";
        }
    }
?>