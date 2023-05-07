<?php
// Récupérer les données du formulaire
$nom = $_POST['nom'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$allergies = $_POST['allergies'];
$date = $_POST['date'];
$heure = $_POST['heure'];

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Quai_Antique";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

// Préparer et exécuter la requête d'insertion
$stmt = $conn->prepare("INSERT INTO reservations (nom, email, phone, allergies, date, heure) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $nom, $email, $phone, $allergies, $date, $heure);

if ($stmt->execute()) {
    echo "La réservation a été enregistrée avec succès.";
} else {
    echo "Une erreur s'est produite lors de l'enregistrement de la réservation : " . $stmt->error;
}

// Fermer la connexion et libérer les ressources
$stmt->close();
$conn->close();
?>
