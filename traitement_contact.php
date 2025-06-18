<?php
// filepath: /home/scorpion/Bureau/Web_taff/traitement_contact.php

// Informations de connexion à la base de données
$servername = "localhost";
$username = "root"; // Remplacez par votre nom d'utilisateur
$password = ""; // Remplacez par votre mot de passe
$dbname = "cybertech"; // Remplacez par le nom de votre base de données

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupérer les données du formulaire
$nom = $_POST["nom"];
$email = $_POST["email"];
$message = $_POST["message"];

// Préparer et exécuter la requête SQL
$sql = "INSERT INTO contacts (nom, email, message) VALUES ('$nom', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Message envoyé avec succès!";
} else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
}

// Fermer la connexion
$conn->close();
?>