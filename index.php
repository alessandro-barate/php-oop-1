<?php
class Movie
{
    public $title;
    public  $countryOfOrigin;

    public function setTitle($movieTitle)
    {
        $this->title = $movieTitle;
    }

    public function setCountryOfOrigin($movieCountryOfOrigin)
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

var_dump($trainspotting);

$memento = new Movie(); // tra () quello da passare al costruttore
$memento->title = "Memento";
$memento->countryOfOrigin = "United States";
