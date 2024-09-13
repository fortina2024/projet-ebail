<?php 
$serveur = "localhost"; // Nom du serveur (généralement localhost en local)
$base_de_donnees = "database_ebail"; // Nom de votre base de données
$utilisateur = "root"; // Votre nom d'utilisateur MySQL
$mot_de_passe = ""; // Votre mot de passe MySQL

try {
    // Créez une nouvelle instance PDO
    $connexion = new PDO("mysql:host=$serveur;dbname=$base_de_donnees", $utilisateur, $mot_de_passe);
    
    // Configurez PDO pour qu'il lance des exceptions en cas d'erreur
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo "La connexion a échoué : " . $e->getMessage();
}

?>
