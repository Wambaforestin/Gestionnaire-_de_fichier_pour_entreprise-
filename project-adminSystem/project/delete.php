<?php
// Définissez le répertoire où les fichiers sont stockés
$directory = "uploads/";

// Obtenez le nom du fichier à supprimer depuis le formulaire
$fileToDelete = $_POST['fileToDelete'];
$filePath = $directory . $fileToDelete;

// Vérifiez si le fichier existe avant de le supprimer
if (file_exists($filePath)) {
    if (unlink($filePath)){
        echo "Le fichier $fileToDelete a été supprimé avec succès.";
    } else {
        echo "Erreur lors de la suppression du ficher.";
    }
} else {
    echo "Le ficher $fileToDelete n'existe pas.";
}

// Redirigez l'utilisateur vers la page index
header("Location: index.php");
?>
