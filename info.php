<?php
/**
 * Auteur : Abdessamad Zaroual
 * Objectif : Traitement des données reçues par la méthode GET
 * Date : 18/10/2026
 */

require_once 'config.php';
require_once 'includes/entete_inc.php';
require_once 'includes/menu_inc.php';

echo "<h3>Résultat du traitement GET</h3>";

if (isset($_GET['nom']) && isset($_GET['age'])) {
    // Sécurisation basique contre les failles XSS
    $nom = htmlspecialchars($_GET['nom']);
    $age = (int) $_GET['age'];

    echo "<p class='succes'>Bonjour <strong>$nom</strong>, vous avez <strong>$age</strong> ans.</p>";
} else {
    echo "<p class='erreur'>Aucune donnée reçue via GET ! Veuillez remplir le formulaire.</p>";
}

echo '<br><a href="info.html">Retour au formulaire</a>';

require_once 'includes/pied_inc.php';