<?php
require_once "Billet.php";
class BilletEnfant extends Billet {
    private int $age;

    public function __construct(int $newNumero, Seance $newSeance, float $newPrix){
        parent::__construct($newNumero, $newSeance, $newPrix);
        $this-> age = 0;
    }
    public function getAge(): int {
        return $this -> age;
    }

    public function calculerPrix(int $age): float {
        $this -> age = $age;

        return $this->getPrix();
    }

    public function imprimerDetail(): void {
    parent::imprimerDetail();
    echo "Age : " . $this->age . " ans<br>";
    }
}
?>