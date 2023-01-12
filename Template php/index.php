<?php
ini_set('display_errors', 1); // pour que php montre les erreurs directement

include 'connexion.php'; // on lie la page connexion.php, pour se connecter à la base de données

error_reporting(0); // on démarre la session
session_start();

    if(isset($_POST['ajouter'])) { // Si quelqu'un appuie sur le bouton "Ajouter", on déclenche l'envoi des données.

       // On stocke alors les valeurs envoyées dans les variables suivantes. 
     $nom = $_POST['nom'];
     $prenom = $_POST['prenom'];
     $age = $_POST['age'];

     $sql = "SELECT * FROM inscription";

      //On envoie les informations à la base de données.
    $sql = "INSERT INTO inscription (nom, prenom, age) VALUES('$nom', '$prenom', '$age')";
    $result = mysqli_query($conn, $sql);
    
    echo "<table>"; //aucune erreur ne s'affiche pour autant la base de données n'est pas actualisée.
   }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Utilisateurs</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <a href="ajouter.php" class="Btn_add"> <img src="images/plus.png"> Ajouter</a>

        <table>
            <tr id="items">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </table>




    </div>
</body>

</html>