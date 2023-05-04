<?php
// Informations de connexion à la base de données MySQL
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Quai_Antique";

// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connexion échouée : " . mysqli_connect_error());
}

// Récupération des données du formulaire
$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Insertion des données dans la table 'users'
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
if (mysqli_query($conn, $sql)) {
	echo "Compte créé avec succès !";
} else {
	echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
}

// Fermeture de la connexion à la base de données
mysqli_close($conn);
?>







