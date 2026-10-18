<?php
/**
 * Auteur : Abdessamad Zaroual
 * Objectif : En-tête HTML commun avec nom de l'établissement
 * Date : 18/10/2026
 */
require_once __DIR__ . '/../config.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Suivi des notes - <?= ETABLISSEMENT ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; line-height: 1.6; }
        table { border-collapse: collapse; width: 80%; margin-top: 15px; }
        th, td { border: 1px solid #ccc; padding: 8px 12px; text-align: left; }
        th { background-color: #f4f4f4; }
        .erreur { color: red; font-weight: bold; }
        .succes { color: green; font-weight: bold; }
        .ajourne { background-color: #ffe6e6; color: #cc0000; }
        nav a { margin-right: 15px; text-decoration: none; color: #0066cc; font-weight: bold; }
        footer { margin-top: 30px; border-top: 1px solid #ccc; padding-top: 10px; font-size: 0.9em; color: #555; }
    </style>
</head>
<body>
    <h1><?= ETABLISSEMENT ?></h1>
    <h2>Application de suivi des notes des apprenants</h2>