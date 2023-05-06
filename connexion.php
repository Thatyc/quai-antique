<?php
session_start();
if (isset($_SESSION['username'])) {
  header("Location: index.html"); // Rediriger l'utilisateur s'il est déjà connecté
  exit();
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Connexion à la base de données avec PDO
  $servername = "localhost";
  $dbname = "Quai_Antique";
  $username_db = "root";
  $password_db = "root";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username_db, $password_db);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérifier si les informations d'identification sont correctes
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result !== false) { // Si les informations d'identification sont correctes
      $_SESSION['username'] = $username;
      header("index.html");
      exit();
    } else { // Si les informations d'identification sont incorrectes
      $error_message = "Nom d'utilisateur ou mot de passe incorrect";
    }
  } catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
  }
  $conn = null;
}
?>

