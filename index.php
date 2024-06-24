<?php
class Movie
{
    private string $title;
    private string $countryOfOrigin;

    // public $duration = getDuration();

    public function __construct(string $_title, string $_countryOfOrigin)
    {
        // echo 'ciao';
        $this->title = $_title;
        $this->countryOfOrigin = $_countryOfOrigin;
    }

    // Esiste anche public function __destruct(), serve ad eliminare le variabili che, una volta usate, non ci servono più. Non è pratica comune usarlo, lo mettiamo solo all'occasione



    // Setter e Getter dell'attributo title

    public function setTitle(string $movieTitle): void
    {
        $this->title = $movieTitle;
    }

    public function getTitle(): string
    {
        return $this->title;
    }


    // Setter e Getter dell'attributo countryOfOrigin

    public function setCountryOfOrigin(string $movieCountryOfOrigin): void
    {
        $this->countryOfOrigin = $movieCountryOfOrigin;
    }

    public function getCountryOfOrigin(): string
    {
        return $this->countryOfOrigin;
    }
}

$trainspotting = new Movie('Trainspotting', 'Scotland');    // tra () quello da passare al costruttore
// $trainspotting->setTitle('Trainspotting');
// $trainspotting->setCountryOfOrigin('Scotland');
// Questi 2 sopra prima della scrittura del costruttore


$memento = new Movie('Memento', 'United States');   // tra () quello da passare al costruttore
// $memento->setTitle('Memento');
// $memento->setCountryOfOrigin('United States');
// Questi 2 sopra prima della scrittura del costruttore

var_dump($trainspotting);
var_dump($memento);
