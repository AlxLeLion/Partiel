<?php
// Connexion à la base de données RIEN NE SE DISPLAY SUR L'ECRAN POURTANT JE N'Ai AUCUN MESSAGE D'ERREUR
$host = "localhost";
$username = "root";
$password = "root";
$dbname = "partiel";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Vérification de la connexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
  
