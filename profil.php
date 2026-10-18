<?php
/**
 * Auteur : Abdessamad Zaroual
 * Objectif : Page profil protégée par session
 * Date : 18/10/2026
 */

session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

require_once 'config.php';
require_once 'includes/entete_inc.php';
require_once 'includes/menu_inc.php';
?>

<h3>Bienvenue sur votre profil, <strong><?= htmlspecialchars($_SESSION['user']) ?></strong> !</h3>
<p class='succes'>Vous êtes connecté avec succès à l'espace sécurisé.</p>

<br>
<a href="deconnexion.php">Se déconnecter</a>

<?php
require_once 'includes/pied_inc.php';
?>