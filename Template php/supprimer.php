<?php
  //connexion a la base de données

  
  $server = "localhost";
  $user = "root"; // Id connexion à phpadmin.
  $pass = "root"; // Mdp connexion à phpadmin.
  $database = "partiel"; //Nom de la base de données.
  
  $conn = mysqli_connect($server, $user, $pass, $database);
  
  if (!$conn) { // Si la connexion à la base de données ne s'effectue pas alors on display un message d'erreur.
        die("erreur");
  
  }

    //récupération de l'id dans le lien

//Supprimer un utilisateur - DELETE
//$supprimer = $bdd->exec('DELETE FROM inscription WHERE prenom = "Maxime"');


  //redirection vers la page index.php             TOUT EST ECRIT EN COMMENTAIRE POUR MONTRER QUE JE CONNAIS LA MANIPULATION MAIS RIEN NE SE DISPLAY
  //header('Location: index.php');
  //exit();
  ?>


 