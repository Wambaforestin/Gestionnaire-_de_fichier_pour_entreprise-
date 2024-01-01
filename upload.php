<?php
// Définissez le répertoire où les fichiers seront sauvegardés
$target_dir = "uploads/";

// Obtenez le nom et le chemin du fichier depuis le formulaire
$target_file = $target_dir . basename($_FILES["file"]["name"]);

// Initialisez une variable pour indiquer si le téléchargement est réussi ou non
$uploadOk = 1;

// Obtenez l'extension du fichier
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Vérifiez si l'utilisateur a soumis le formulaire
if (isset($_POST["submit"])) {

    // Vérifiez si le fichier est un fichier valide ou un faux fichier 
    $type = mime_content_type($_FILES["file"]["tmp_name"]); // obtenez le type MIME du fichier
    if ($type !== false) { // si le type MIME est valide  
        echo "Le fichier est un fichier valide - " . $type . ".<br>"; // affichez le type MIME  
        $uploadOk = 1;
    } else {
        echo "Le fichier n'est pas un fichier valide.<br>";
        $uploadOk = 0;
    }

    // Vérifiez si le fichier existe déjà
    if (file_exists($target_file)) {
        echo "Désolé, le fichier existe déjà.<br>";
        $uploadOk = 0;
    }

    // Vérifiez la taille du fichier
    if ($_FILES["file"]["size"] > 500000) {
        echo "Désolé, votre fichier est trop grand.<br>";
        $uploadOk = 0;
    }

    // Autorisez seulement certaines extensions de fichier
    if ($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif" && $fileType != "pdf" && $fileType != "doc" && $fileType != "docx" && $fileType != "ppt" && $fileType != "pptx" && $fileType != "txt" && $fileType != "css" && $fileType != "py" && $fileType != "php" && $fileType != "js") {
        echo "Désolé, seuls les fichiers JPG, JPEG, PNG, GIF, PDF, DOC, DOCX, PPT, PPTX, TXT, CSS, PY, PHP et JS sont autorisés.<br>";
        $uploadOk = 0;
    }

    // Vérifiez si $uploadOk est mis à 0 par une erreur
    if ($uploadOk == 0) {
        echo "Désolé, votre fichier n'a pas été téléchargé.<br>";
        // Si tout est ok, essayez de télécharger le fichier
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "Le fichier " . htmlspecialchars(basename($_FILES["file"]["name"])) . " a été téléchargé avec success.<br>";
        } else {
            echo "Désolé, il y a eu une erreur lors du téléchargement de votre fichier.<br>";
        }
    }
}
?>