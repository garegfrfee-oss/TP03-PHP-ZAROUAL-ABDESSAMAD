<?php
/**
 * Auteur : Abdessamad Zaroual
 * Objectif : Lecture et affichage d'une liste de données stockées dans un fichier CSV
 * Date : 18/10/2026
 */

require_once 'config.php';
require_once 'includes/entete_inc.php';
require_once 'includes/menu_inc.php';

echo "<h3>Liste des utilisateurs (depuis fichier CSV)</h3>";

$fichier_csv = 'data/utilisateurs.csv';

// Création d'un fichier CSV exemple s'il n'existe pas
if (!file_exists($fichier_csv)) {
    if (!is_dir('data')) {
        mkdir('data', 0777, true);
    }
    $donnees_defaut = [
        ["Nom", "Prénom", "Email"],
        ["Zaroual", "Abdessamad", "abdessamad@example.com"],
        ["Alami", "Mohammed", "mohammed@example.com"],
        ["Bennani", "Fatima", "fatima@example.com"]
    ];
    $fp = fopen($fichier_csv, 'w');
    foreach ($donnees_defaut as $ligne) {
        fputcsv($fp, $ligne);
    }
    fclose($fp);
}

// Affichage du tableau HTML à partir du CSV
if (($handle = fopen($fichier_csv, "r")) !== FALSE) {
    echo "<table>";
    $ligne_num = 0;
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        echo "<tr>";
        foreach ($data as $cellule) {
            if ($ligne_num === 0) {
                echo "<th>" . htmlspecialchars($cellule) . "</th>";
            } else {
                echo "<td>" . htmlspecialchars($cellule) . "</td>";
            }
        }
        echo "</tr>";
        $ligne_num++;
    }
    echo "</table>";
    fclose($handle);
} else {
    echo "<p class='erreur'>Impossible d'ouvrir le fichier CSV.</p>";
}

require_once 'includes/pied_inc.php';