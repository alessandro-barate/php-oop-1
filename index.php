<?php
class Movie
{
    public $title;
    public  $country;
    // public $duration = getDuration();

    // function __construct($duration)
    // {
    // }
}

$trainspotting = new Movie();    // tra () quello da passare al costruttore
$trainspotting->title = "Trainspotting";
$trainspotting->country = "Scotland";

$memento = new Movie(); // tra () quello da passare al costruttore
$memento->title = "Memento";
$memento->country = "United States";

var_dump($trainspotting);
var_dump($memento);
