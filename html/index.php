<?php
$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$dbname = getenv('DB_NAME');
$password = getenv('DB_PASSWORD'); 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

$stmt = $pdo->query("SELECT * FROM utilisateur");
// Récupérer les résultats dans un tableau associatif
$utilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Afficher les informations des utilisateurs avec une boucle foreach
foreach ($utilisateurs as $utilisateur) {
    echo "ID: " . $utilisateur['id'] . "<br>";
    echo "Nom: " . $utilisateur['nom'] . "<br>";
    echo "Email: " . $utilisateur['email'] . "<br>";
    // Ajoutez d'autres champs selon votre structure de base de données
    echo "<hr>";
}