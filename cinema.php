<?php
require_once 'Seance.php';
require_once 'Billet.php';
require_once 'BilletPleinTarif';
require_once 'BilletReduit';
require_once 'BilletEnfant';

$seance = new Seance("Dunesday", "16 Decembre 2026", "20h30");

// Billet adulte :
$billetadulte = new BilletPleinTarif(12, $seance, 5);

// Billet étudiant :
$billetetudiant = new BilletReduit(42, $seance, 23.5);

// Billet Enfant :
$billetEnfant = new BilletEnfant(11, $seance, 5);

echo "<h2>Billet Adulte</h2>";
echo "Prix : " . $billetadulte -> calculerPrix() . "euros <br>";
$billetadulte -> imprimerDetail();

echo "<hr>";

echo "<h2>Billet enfant</h2>";
echo "Prix : " . $billetEnfant->calculerPrix(9) . " euros<br>";
$billetEnfant -> imprimerDetail();

echo "<hr>";

echo "<h2>Billet étudiant</h2>";
echo "Prix : " . $billetetudiant -> calculerPrix("carte étudiante") . " euros<br>";
$billetetudiant -> imprimerDetail();




?>
