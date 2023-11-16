# Gestionnaire-_de_fichier_pour_entreprise-

Projet web : Administrateur système
Ce projet consiste a  système simple pour permettre aux employés  d'une entreprise de télécharger, afficher et supprimer des fichiers stockés sur le serveur

🌐 Projet web 🌐
Ce projet est un site web simple qui utilise le serveur web Apache sur Debian 12. Il contient des pages HTML, des feuilles de style CSS et des scripts PHP. 🚀

🛠 Installation 🛠
Pour installer ce projet, vous devez avoir Apache installé et configuré sur votre machine. Vous pouvez suivre ce tutoriel pour savoir comment faire : youtube: https://www.youtube.com/watch?v=CmO5iFM05wU , website: https://linuxways.net/debian/how-to-install-apache2-web-server-on-debian-12/.

Ensuite, vous devez copier le dossier du projet dans le répertoire /var/www/html. Vous pouvez utiliser la commande suivante :

sudo cp -r /chemin/vers/le/dossier/du/projet /var/www/html

Remplacez /chemin/vers/le/dossier/du/projet par le chemin réel du dossier du projet sur votre machine.

Vous devez également vous assurer que les permissions du dossier et des fichiers sont correctes. Le propriétaire et le groupe doivent être apache (ou www-data selon votre configuration). Vous pouvez utiliser les commandes suivantes :

sudo chown -R apache:apache /var/www/html/projet
sudo chmod -R 775 /var/www/html/projet

💻 Utilisation 💻
Pour accéder au site web, vous devez ouvrir votre navigateur et taper l’adresse suivante :

http://localhost/projet

Si vous avez configuré un nom de domaine ou une adresse IP publique pour votre serveur, vous pouvez les utiliser à la place de localhost.

Vous verrez la page d’accueil du site web, qui contient un menu de navigation vers les autres pages. Vous pouvez explorer le contenu du site web et tester ses fonctionnalités et j'ai aussi mit a votre disposition une documentation détaillée qui explique comment fonction le site web. 😎

👥 Auteur 👥
Ce projet a été réalisé par moi-même ,WAMBA FORESTIN a EPSI Paris la Defense. J’ai appris les bases du langage PHP grâce au tutoriel en ligne de w3schools, qui m’a permis de créer des pages web dynamiques et interactives.
Grâce à w3schools,j’ai pu me former au PHP, un langage de programmation qui permet de manipuler des données, de communiquer avec des bases de données et de générer du contenu HTML. 👏

📄 Licence 📄
Ce projet est sous licence MIT, ce qui signifie que vous pouvez le modifier, le distribuer et l’utiliser à des fins personnelles ou commerciales, à condition de mentionner l’origine du projet et de respecter les conditions de la licence. Vous pouvez trouver le texte complet de la licence dans le fichier LICENSE du projet. 📝

J’espère que ce fichier README vous plaît et qu’il décrit bien le projet. Si vous avez des questions ou des suggestions, n’hésitez pas à me contacter. 😊
