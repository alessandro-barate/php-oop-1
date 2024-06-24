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
        $this->title = $movieCountryOfOrigin;
    }



    // public $duration = getDuration();

    // function __construct($duration)
    // {
    // }
}

$trainspotting = new Movie();    // tra () quello da passare al costruttore
$trainspotting->title = "Trainspotting";
$trainspotting->countryOfOrigin = "Scotland";

$memento = new Movie(); // tra () quello da passare al costruttore
$memento->title = "Memento";
$memento->countryOfOrigin = "United States";

var_dump($trainspotting);
var_dump($memento);
