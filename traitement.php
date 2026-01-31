<?php
session_start();
include 'config.php';

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère et sécurise les données
    $nom = htmlspecialchars(trim($_POST['nom']));
    $email = htmlspecialchars(trim($_POST['email']));
    $sujet = htmlspecialchars(trim($_POST['sujet']));
    $message = htmlspecialchars(trim($_POST['message']));

    try {
        // Préparation de la requête avec PDO
        $sql = "INSERT INTO message (nom, email, sujet, message, date_envoi) VALUES (:nom, :email, :sujet, :message, NOW())";
        $stmt = $con_id->prepare($sql);

        // Liaison des paramètres de manière sécurisée
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':sujet', $sujet);
        $stmt->bindParam(':message', $message);

        // Exécution de la requête
        if ($stmt->execute()) {
            $_SESSION['success'] = "Message envoyé avec succès !";
            header("Location: index.php");
            exit();
        }
    } catch(PDOException $e) {
        $_SESSION['error'] = "Erreur lors de l'envoi : " . $e->getMessage();
        header("Location: index.php");
        exit();
    }
} else {
    $_SESSION['error'] = "Formulaire non soumis correctement.";
    header("Location: index.php");
    exit();
}
?>
