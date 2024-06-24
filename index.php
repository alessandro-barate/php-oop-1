<?php
class Movie
{
    public $title;
    public  $countryOfOrigin;

    // public $duration = getDuration();

    public function __construct($_title, $_countryOfOrigin)
    {
        echo 'ciao';
        $this->title = $_title;
        $this->countryOfOrigin = $_countryOfOrigin;
    }



    // Setter e Getter dell'attributo title

    public function setTitle($movieTitle)
    {
        $this->title = $movieTitle;
    }

    public function getTitle()
    {
        return $this->title;
    }


    // Setter e Getter dell'attributo countryOfOrigin

    public function setCountryOfOrigin($movieCountryOfOrigin)
    {
        $this->countryOfOrigin = $movieCountryOfOrigin;
    }

    public function getCountryOfOrigin()
    {
        return $this->countryOfOrigin;
    }
}

$trainspotting = new Movie('Trainspotting', 'Scotland');    // tra () quello da passare al costruttore
// $trainspotting->setTitle('Trainspotting');
// $trainspotting->setCountryOfOrigin('Scotland');


$memento = new Movie('Memento', 'United States'); // tra () quello da passare al costruttore
// $memento->setTitle('Memento');
// $memento->setCountryOfOrigin('United States');

var_dump($trainspotting);
var_dump($memento);
