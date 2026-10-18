<?php
/**
 * Auteur : Abdessamad Zaroual
 * Objectif : Traitement et validation des données reçues par la méthode POST
 * Date : 18/10/2026
 */

require_once 'config.php';
require_once 'includes/entete_inc.php';
require_once 'includes/menu_inc.php';

echo "<h3>Résultat du traitement POST</h3>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = trim($_POST['login'] ?? '');
    $password = $_POST['password'] ?? '';
    $email = trim($_POST['email'] ?? '');

    // Validation simple
    if (empty($login) || empty($password) || empty($email)) {
        echo "<p class='erreur'>Tous les champs sont obligatoires !</p>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p class='erreur'>L'adresse email n'est pas valide !</p>";
    } else {
        $loginSecure = htmlspecialchars($login);
        $emailSecure = htmlspecialchars($email);
        
        echo "<p class='succes'>Inscription réussie !</p>";
        echo "<ul>";
        echo "<li>Login : <strong>$loginSecure</strong></li>";
        echo "<li>Email : <strong>$emailSecure</strong></li>";
        echo "</ul>";
    }
} else {
    echo "<p class='erreur>Accès non autorisé.</p>";
}

echo '<br><a href="saisie.html">Retour au formulaire de saisie</a>';

require_once 'includes/pied_inc.php';