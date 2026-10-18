<?php
/**
 * Auteur : Abdessamad Zaroual
 * Objectif : Partie 2 - Structures de contrôle et boucles (if, switch, for, while)
 * Date : 18/10/2026
 */

require_once 'config.php';

// Exercice 2.1 : if / elseif / else
function mention($note) {
    if ($note >= 16) {
        return "Très bien";
    } elseif ($note >= 14) {
        return "Bien";
    } elseif ($note >= 12) {
        return "Assez bien";
    } elseif ($note >= SEUIL) {
        return "Passable";
    } else {
        return "Ajourné";
    }
}

echo "<h3>Exercice 2.1 : Mention</h3>";
echo "Note 17 : " . mention(17) . "<br>";
echo "Note 10 : " . mention(10) . "<br>";
echo "Note 8  : " . mention(8) . "<br>";

// Exercice 2.2 : switch
echo "<h3>Exercice 2.2 : Mois en français</h3>";
$mois_num = date("m");

switch ($mois_num) {
    case '01': $mois = "Janvier"; break;
    case '02': $mois = "Février"; break;
    case '03': $mois = "Mars"; break;
    case '04': $mois = "Avril"; break;
    case '05': $mois = "Mai"; break;
    case '06': $mois = "Juin"; break;
    case '07': $mois = "Juillet"; break;
    case '08': $mois = "Août"; break;
    case '09': $mois = "Septembre"; break;
    case '10': $mois = "Octobre"; break;
    case '11': $mois = "Novembre"; break;
    case '12': $mois = "Décembre"; break;
    default:   $mois = "Mois inconnu"; break;
}
echo "Nous sommes au mois de : <strong>$mois</strong><br>";

// Exercice 2.3 : Boucles
echo "<h3>Exercice 2.3.1 : Triangle d'étoiles</h3>";
for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<h3>Exercice 2.3.2 : Boucle while</h3>";
$valeur = 0;
while ($valeur <= 20) {
    if ($valeur === 10) {
        echo "<strong>10</strong> ";
    } else {
        echo "$valeur ";
    }
    $valeur += 2;
}
echo "<br>";

echo "<h3>Exercice 2.3.3 : Pairs avec continue</h3>";
for ($n = 0; $n <= 10; $n++) {
    if ($n % 2 !== 0) continue;
    echo "$n ";
}
echo "<br>";