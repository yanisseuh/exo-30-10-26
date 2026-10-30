<?php
require_once "Billet.php";

class BilletReduit extends Billet {
    private string $justificatif;

    public function __construct(int $newNumero, Seance $newSeance, float $newPrix) {
        parent::__construct($newNumero, $newSeance, $newPrix);
        $this -> justificatif = "";
    }

    public function getJustificatif(): string {
        return $this -> justificatif;
    }

    public function calculerPrix(string $justificatif): float {
        $this -> justificatif = $justificatif;

        return $this -> getPrix() * 0.30; 
    }

    public function imprimerDetail(): void {
    parent::imprimerDetail();
    echo "Justificatif : " . $this->justificatif . "<br>";
    }
}

?>