<?php
/**
 * Auteur : Abdessamad Zaroual
 * Objectif : Exportation des données sous format JSON
 * Date : 18/10/2026
 */

require_once 'config.php';

// Données fictives à exporter
$utilisateurs = [
    ["id" => 1, "nom" => "Zaroual", "prenom" => "Abdessamad", "filiere" => "Génie Informatique"],
    ["id" => 2, "nom" => "Alami", "prenom" => "Mohammed", "filiere" => "Génie Civil"],
    ["id" => 3, "nom" => "Bennani", "prenom" => "Fatima", "filiere" => "Systèmes et Réseaux"]
];

// Indiquer au navigateur qu'il s'agit d'un fichier JSON à télécharger
header('Content-Type: application/json; charset=utf-8');
header('Content-Disposition: attachment; filename="export_utilisateurs.json"');

// Encoder et afficher le tableau en JSON joli (pretty print)
echo json_encode($utilisateurs, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
exit;