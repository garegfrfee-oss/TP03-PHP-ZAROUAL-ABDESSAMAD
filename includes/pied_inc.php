<?php
/**
 * Auteur : Abdessamad Zaroual
 * Objectif : Pied de page commun avec date du jour et calcul de jours restants
 * Date : 18/10/2026
 */

$dateDuJour = date("d/m/Y");

// Calcul des jours restants avant la fin du semestre
$aujourdhui = new DateTime();
$finSemestre = new DateTime('2027-01-31');
$intervalle = $aujourdhui->diff($finSemestre);
?>
<footer>
    <p>Date du jour : <strong><?= $dateDuJour ?></strong></p>
    <p>Nombre de jours restants avant la fin du semestre (31/01/2027) : <strong><?= $intervalle->days ?> jours</strong>.</p>
    <p>&copy; <?= date('Y') ?> - Tous droits réservés.</p>
</footer>
</body>
</html>