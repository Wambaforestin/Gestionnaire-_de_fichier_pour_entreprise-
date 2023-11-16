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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Ubuntu', sans-serif;
        }

        .main {
            position: relative;
            min-height: 100vh;
            background: radial-gradient(#f0483a, #d10a20);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 30px 100px;
        }

        header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            padding: 30px 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
        }
        header h1 {
            color: #fff;
        }
        .navigation {
            display: flex;
        }

        .navigation li {
            list-style: none;
        }

        .navigation li a {
            position: relative;
            color: #fff;
            text-decoration: none;
            margin-left: 40px;
        }

        .content {
            position: relative;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .content .text {
            width: 100%;
            max-width: 600px;
        }

        .content .text h2 {
            color: #fff;
            font-size: 5em;
            font-weight: 300;
        }

        .content .text h2 span {
            font-weight: 700;
        }

        .content .text p {
            color: #fff;
            font-weight: 400;
            font-size: 1.1em;
            line-height: 1.5em;
            margin: 20px 0;
        }

        .btn {
            position: relative;
            display: inline-block;
            padding: 20px 50px;
            background: #fff;
            color: #333;
            font-size: 1.1em;
            font-weight: 500;
            border-radius: 40px;
            text-decoration: none;
            transition: 0.25s;
        }

        .btn:hover {
            letter-spacing: 2px;
        }

        /* now, make it responsive */
        @media (max-width:991px) {
            .main {
                padding: 40px;
            }

            header {
                padding: 20px 40px;
            }

            .content {
                flex-direction: column;
                margin: 120px 0 40px;
            }

            .content .text {
                max-width: 100%;
            }

            .content .text h2 {
                font-size: 4em;
            }

            .navigation {
                display: none;
            }

            .navigation.active {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: #d10a20;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }

            .navigation li a {
                font-size: 1.5em;
                margin: 10px 0;
                display: inline-block;
            }

            .toggle {
                position: relative;
                width: 32px;
                height: 40px;
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 100000;
                cursor: pointer;
            }

            .toggle.active {
                position: fixed;
                right: 40px;
            }

            .toggle::before {
                content: '';
                position: absolute;
                width: 100%;
                height: 2px;
                background: #fff;
                transform: translateY(-10px);
                box-shadow: 0 10px 0 #fff;
                transition: 0.25s;
            }

            .toggle.active::before {
                transform: translateY(0px) rotate(45deg);
                box-shadow: 0 0 0 #fff;
            }
            .toggle::after {
                content: '';
                position: absolute;
                width: 100%;
                height: 2px;
                background: #fff;
                transform: translateY(10px);
                transition: 0.25s;
            }

            .toggle.active::after {
                transform: translateY(0px) rotate(-45deg);
            }
        }

        /* Style for file input */
        .file-input {
            display: none;
        }

        /* Additional styling for the form */
        .form-container {
            max-width: 600px;
            margin: auto;
            text-align: center;
        }

        .form-title {
            font-size: 2em;
            color: #fff;
            margin-bottom: 20px;
        }

        .file-label {
            position: relative;
            display: inline-block;
            padding: 15px 30px;
            background: #fff;
            color: #333;
            font-size: 1em;
            font-weight: 500;
            border-radius: 8px;
            text-decoration: none;
            cursor: pointer;
            transition: background 0.25s, color 0.25s;
        }

        .file-label:hover {
            background: #333;
            color: #fff;
        }

        .file-input {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

        .submit-btn {
            display: inline-block;
            padding: 15px 30px;
            background: #d10a20;
            color: #fff;
            font-size: 1em;
            font-weight: 500;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.25s;
        }

        .submit-btn:hover {
            background: #333;
        }
        h1, h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            height: 200px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        input[type="file"] {
            margin-bottom: 10px;
            padding: 5px;
        }

        button {
            background-color: #ff4d4d;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        /* Style for displaying the list of files */
        a {
            display: block;
            margin-bottom: 5px;
            color: #007bff;
            text-decoration: none;
        }

        /* Style for the delete form */
        form[name="deleteForm"] {
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form[name="deleteForm"] label {
            display: inline-block;
            margin-bottom: 10px;
            color: #333;
        }

        form[name="deleteForm"] select {
            width: auto;
            margin-bottom: 10px;
        }

        form[name="deleteForm"] button {
            background-color: #ff4d4d;
        }


        @media (max-width:480px) {

            header,
            .main {
                padding: 20px;
            }

            .toggle.active {
                right: 20px;
            }

            .content .text h2 {
                font-size: 3em;
            }

            .btn {
                padding: 15px 30px;
            }

            .footer {
                flex-direction: column-reverse;
                align-items: center;
            }
        }
    </style>
    <section class="main">
        <header>
            <h1>logo</h1>
            <a href="#"><img src="" class="logo"></a>
            <div class="toggle"></div>
            <ul class="navigation">
                <li><a href="#">Home</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
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
                    $files = array_slice($files,2); //supprimez les deux premieres entrees du tableau
                    foreach ($files as $file) {
                        if ($file != "." && $file != ".."){
                            echo '<option value="' .$file . '">' .$file . '</option>';
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