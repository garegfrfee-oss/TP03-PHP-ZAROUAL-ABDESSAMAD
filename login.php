<?php
/**
 * Auteur : Abdessamad Zaroual
 * Objectif : Gestion de l'authentification et des sessions
 * Date : 18/10/2026
 */

session_start();
require_once 'config.php';

$erreur = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    // Identifiants par défaut pour le test
    if ($username === 'admin' && $password === '1234') {
        $_SESSION['user'] = $username;
        header('Location: profil.php');
        exit();
    } else {
        $erreur = "Identifiant ou mot de passe incorrect !";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <h2>Espace de Connexion</h2>
    <?php if (!empty($erreur)): ?>
        <p style="color: red;"><?= $erreur ?></p>
    <?php endif; ?>
    <form action="login.php" method="POST">
        <label for="username">Utilisateur (admin) :</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Mot de passe (1234) :</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Se connecter">
    </form>
</body>
</html>