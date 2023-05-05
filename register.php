<?
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Quai_Antique";
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Traitement du formulaire de connexion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Vérification des identifiants de connexion dans la base de données
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Connexion réussie
        // Rediriger vers la page d'accueil
        header("Location: index.html");
    } else {
        // Identifiants de connexion invalides
        // Afficher un message d'erreur
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
}

// Traitement du formulaire de création de compte
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["createAccount"])) {
    $newUsername = $_POST["newUsername"];
    $newEmail = $_POST["newEmail"];
    $newPassword = $_POST["newPassword"];

    // Vérification si le nom d'utilisateur ou l'adresse email existe déjà dans la base de données
    $sql = "SELECT * FROM users WHERE username='$newUsername' OR email='$newEmail'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Nom d'utilisateur ou adresse email déjà utilisé
        // Afficher un message d'erreur
        echo "Le nom d'utilisateur ou l'adresse email existe déjà.";
    } else {
        // Ajouter le nouvel utilisateur à la base de données
        $sql = "INSERT INTO users (username, email, password) VALUES ('$newUsername', '$newEmail', '$newPassword')";
        if ($conn->query($sql) === TRUE) {
            // Rediriger vers la page de connexion
            header("Location: login.php");
        } else {
            // Erreur lors de l'ajout de l'utilisateur
            // Afficher un message d'erreur
            echo "Erreur : " . $sql . "<br>" . $conn->error;
        }
    }
}

// Fermer la connexion à la base de données
$conn->close();

?>




