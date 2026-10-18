<?>
/**
 * Auteur : Abdessamad Zaroual
 * Objectif : Partie 3 - Tableaux (indexés, associatifs, multidimensionnels)
 * Date : 18/10/2026
 */

require_once 'config.php';

// Exercice 3.1 : Tableau indexé
$notes = [12, 15, 9, 14, 18, 11];
echo "<h3>Exercice 3.1 : Tableau indexé des notes</h3>";
echo "Nombre de notes : " . count($notes) . "<br>";

$somme = array_sum($notes);
$moyenne = $somme / count($notes);
echo "Moyenne des notes : " . round($moyenne, 2) . "<br><br>";

// Exercice 3.2 : Tableau associatif
$etudiant = [
    "nom" => "Zaroual",
    "prenom" => "Abdessamad",
    "age" => 21,
    "filiere" => "Génie Informatique"
];
echo "<h3>Exercice 3.2 : Tableau associatif (Étudiant)</h3>";
foreach ($etudiant as $cle => $valeur) {
    echo ucfirst($cle) . " : $valeur<br>";
}
echo "<br>";

// Exercice 3.3 : Tableau multidimensionnel
$modules = [
    ["nom" => "PHP", "coefficient" => 3, "note" => 16],
    ["nom" => "UML", "coefficient" => 2, "note" => 14],
    ["nom" => "Système", "coefficient" => 3, "note" => 12]
];
echo "<h3>Exercice 3.3 : Tableau multidimensionnel (Modules)</h3>";
echo "<ul>";
foreach ($modules as $m) {
    echo "<li>Module : {$m['nom']} | Coef : {$m['coefficient']} | Note : {$m['note']}</li>";
}
echo "</ul>";