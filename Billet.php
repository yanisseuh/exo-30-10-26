<?php
require_once 'Seance.php';

class Billet
{
    private int $numero;
    private Seance $seance;
    private float $prix;

    public function __construct(int $numero, Seance $seance, float $prix)
    {
        $this->numero = $numero;
        $this->prix = $prix;
        $this->seance = $seance;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function getSeance(): Seance
    {
        return $this->seance;
    }

    public function getPrix(): float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): void
    {
        $this->prix = $prix;
    }

    public function imprimerDetail(): void {
    echo "Numéro du billet : " . $this->getNumero() . "<br>";
    echo "Film : " . $this->getSeance()->getFilm() . "<br>";
    echo "Date : " . $this->getSeance()->getDate() . "<br>";
    echo "Heure : " . $this->getSeance()->getHeure() . "<br>";
    }
}
?>