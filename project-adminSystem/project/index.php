<?php
$directory = "uploads/";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>\\---- Interface Web ----//</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="main">
        <header>
            <h1>logo</h1>
            <a href="#"><img src="" class="logo"></a>
            <div class="toggle"></div>
            <ul class="navigation">
                <li><a href="#">Home</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">About</a></li>
                <li><a href="documentation" target="_blank">Documentation</a></li>
            </ul>
        </header>
        <div class="content">
            <div class="text">
                <h2>Bienvenue sur notre Plateforme de<span> Gestion de Fichiers.</span></h2>
                <p>Simplifiez vos tâches en téléchargeant, visualisant et supprimant facilement les fichiers du serveur
                    interne. Un outil convivial basé sur Apache et PHP pour faciliter la gestion des données de
                    l'entreprise.</p>
                <a href="#" class="btn">Contact Us</a>
            </div>
            <div class="form-container">
                <h2 class="form-title">Téléchargez votre fichier</h2>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    Sélectionnez un fichier à télécharger :
                    <!-- Styled label for file input -->
                    <label for="file" class="file-label">Choisir un fichier</label>
                    <input type="file" name="file" id="file" class="file-input">
                    <input type="submit" value="Télécharger le Fichier" name="submit" class="submit-btn">
                </form>
                <h2>Supprimer des fichiers</h2>
                <form action="delete.php" method="post">
                    <label for="fileToDelete">Sélectionnez un fichier à supprimer : </label>
                    <select name="fileToDelete" id="fileToDelete">
                        <?php
                        // Affiche la liste des fichiers pour la suppression
                        $files = scandir($directory);
                        $files = array_slice($files, 2); //supprimez les deux premieres entrees du tableau
                        foreach ($files as $file) {
                            if ($file != "." && $file != "..") {
                                echo '<option value="' . $file . '">' . $file . '</option>';
                            }
                        }
                        ?>
                    </select>
                    <button type="submit" name="delete">Supprimer</button>
                </form>
            </div>

    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        //toggle 
        const menutoggle = document.querySelector('.toggle');
        const navigation = document.querySelector('.navigation');
        menutoggle.onclick = function () {
            menutoggle.classList.toggle('active')
            navigation.classList.toggle('active')
        }
    </script>
</body>

</html>