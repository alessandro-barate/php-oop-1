<?php
class Movie
{
    public $title;
    public  $countryOfOrigin;

    // Setter e Getter dell'attributo title

    public function setTitle($movieTitle)
    {
        $this->title = $movieTitle;
    }

    public function getTitle($movieTitle)
    {
        $this->title = $movieTitle;
    }


    // Setter e Getter dell'attributo countryOfOrigin

    public function setCountryOfOrigin($movieCountryOfOrigin)
    {
        $this->countryOfOrigin = $movieCountryOfOrigin;
    }

    public function getCountryOfOrigin($movieCountryOfOrigin)
    {
        $this->countryOfOrigin = $movieCountryOfOrigin;
    }



    // public $duration = getDuration();

    // function __construct($duration)
    // {
    // }
}

$trainspotting = new Movie();    // tra () quello da passare al costruttore
$trainspotting->setTitle('Trainspotting');
$trainspotting->setCountryOfOrigin('Scotland');


$memento = new Movie(); // tra () quello da passare al costruttore
$memento->setTitle('Memento');
$memento->setCountryOfOrigin('United States');

var_dump($trainspotting);
var_dump($memento);
