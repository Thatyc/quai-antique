<?php
// Connexion à la base de données
$servername = "localhost";
$username = "nom_utilisateur";
$password = "mot_de_passe";
$dbname = "nom_de_la_base_de_données";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier si la connexion a réussi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Récupérer les données du formulaire
  $email = $_POST["email"];
  $id = $_POST["id"];
  $password = $_POST["password"];

  // Préparer et exécuter la requête SQL d'insertion
  $sql = "INSERT INTO utilisateurs (email, id, password) VALUES ('$email', '$id', '$password')";

  if ($conn->query($sql) === TRUE) {
    echo "Nouvel utilisateur créé avec succès";
  } else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
  }
}

// Fermer la connexion à la base de données
$conn->close();
?>


