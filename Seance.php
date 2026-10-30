<?php
class Seance 
{
    private string $date;
    private string $heure;
    private string $film;

    public function __construct(string $film, string $date, string $heure)
    {
        $this->film = $film;
        $this->date = $date;
        $this->heure = $heure;
    }

    public function getFilm(): string
    {
        return $this->film;
    }

    public function getHeure(): string
    {
        return $this->heure;
    }
    
    public function getDate(): string
    {
        return $this->date;
    }

    public function setFilm(string $film): void
    {
        $this->film = $film;
    }

    public function setHeure(string $heure): void
    {
        $this->heure = $heure;
    }

    public function setDate(string $date): void
    {
        $this->date = $date;
    }
}
?>