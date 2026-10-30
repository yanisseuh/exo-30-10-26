<?php
require_once "Billet.php";

class BilletPleinTarif extends Billet 
{
    public function calculerPrix(): float 
    {
        return $this -> getPrix();
    }

    public function imprimerDetail(): void 
    {
        $seance = $this->getSeance();

        echo "Numero du Billet: " . $this->getNumero() . "<br>";
        echo "Film : " . $seance -> getFilm() . "<br>";
        echo "Date : " . $seance -> getDate() . "<br>";
        echo "Heure : " . $seance -> getHeure() . "<br>";
        echo "Prix : " . $this -> calculerPrix() . " euros<br>";
    }
}
?>