<?php
/**
 * Auteur : Abdessamad Zaroual
 * Objectif : Partie 1 - Variables, constantes, types, conversions et chaînes de caractères
 * Date : 18/10/2026
 */

require_once 'config.php';

// Exercice 1.1 : Noms de variables
// $x       : VALIDE (commence par une lettre)
// $_x      : VALIDE (commence par un underscore)
// $2x      : INVALIDE (ne peut pas commencer par un chiffre)
// $x-y     : INVALIDE (le tiret - est interprété comme un opérateur de soustraction)
// $Prix_HT  : VALIDE (contient des lettres et un underscore)
// $prix ht : INVALIDE (contient un espace)
// $état    : VALIDE en PHP 7/8 (caractères UTF-8), mais déconseillé pour la portabilité

$x = 10;
$_x = 20;
$Prix_HT = 50;

// Sensibilité à la casse (Case sensitivity)
$a = "Valeur minuscule";
$A = "Valeur MAJUSCULE";
echo "Exo 1.1 : \$a = $a / \$A = $A <br><br>";

// Exercice 1.2 : Constantes
echo "Établissement : " . ETABLISSEMENT . "<br>";
echo "Note min/max : " . NOTE_MIN . " à " . NOTE_MAX . "<br>";
echo "Seuil : " . SEUIL . "<br>";

echo "Test defined('SEUIL') : " . (defined('SEUIL') ? 'Existe' : 'N\'existe pas') . "<br>";
echo "Test defined('INCONNUE') : " . (defined('INCONNUE') ? 'Existe' : 'N\'existe pas') . "<br><br>";

/* Réponses aux questions Exo 1.2 :
 - Afficher une constante non définie génère une erreur Warning / Error (Error fatal en PHP 8).
 - Différence entre const et define() :
   * const est évalué à la compilation (ne peut pas être placé dans un bloc conditionnel if/function).
   * define() est évalué à l'exécution et peut être utilisé de manière dynamique.
*/

// Exercice 1.3 : Calcul
$prix_ht = 60;
$tva = 20;
$prix_ttc = $prix_ht * (1 + $tva / 100);
echo "Le prix TTC du produit est de $prix_ttc €.<br><br>";

// Exercice 1.4 : Types et conversions
$test = 42;
$test = (string) $test;
var_dump($test);
echo "<br><br>";

// Notations numériques :
$dec = 255;
$hex = 0xFF;
$oct = 0377;
$bin = 0b11111111;
echo "Décimal: $dec, Hexa: $hex, Octal: $oct, Binaire: $bin <br><br>";

// Exercice 1.5 : Chaînes de caractères
$traitees = "égales à";
$ici = 2;

echo "1. " . 'Ahmed a dit : "J\'ai réussi"' . "<br>";
echo '2. Voulez-vous supprimer C:\*.*?' . "<br>";
echo '3. Ceci n\'affichera pas \n de nouvelle ligne' . "<br>";
echo '4. Les variables ne seront pas $traitees $ici' . "<br>";
echo "5. Les variables seront $traitees $ici<br><br>";

$chaine = "*Bonjour les développeurs*";
$clean = trim($chaine, "*");
echo "Trim : $clean <br>";

echo "Affichage lettre par lettre :<br>";
for ($i = 0; $i < strlen($clean); $i++) {
    echo $clean[$i] . "<br>";
}