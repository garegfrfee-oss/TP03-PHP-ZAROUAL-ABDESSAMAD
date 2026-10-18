<?php
/**
 * Auteur : Abdessamad Zaroual
 * Objectif : Destruction de la session et déconnexion
 * Date : 18/10/2026
 */

session_start();

// Détruire toutes les variables de session
$_SESSION = array();

// Détruire la session
session_destroy();

// Rediriger vers la page de connexion
header('Location: login.php');
exit();