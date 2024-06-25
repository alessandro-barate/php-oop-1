<?php

class Actor
{
    private string $name;
    private int $age;
    private string $dateOfBirth;
    private string $placeOfBirth;
    private string $nationality;

    // Funzione costruttore
    public function __construct(string $_name, int $_age, string $_dateOfBirth, string $_placeOfBirth, string $_nationality)
    {
        $this->name = $_name;
        $this->age = $_age;
        $this->dateOfBirth = $_dateOfBirth;
        $this->placeOfBirth = $_placeOfBirth;
        $this->nationality = $_nationality;
    }

    // Setter e Getter dell'attributo $name

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }


    // Setter e Getter dell'attributo $age

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getAge(): int
    {
        return $this->age;
    }


    // Setter e Getter dell'attributo $dateOfBirth

    public function setDateOfBirth(string $dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getDateOfBirth(): string
    {
        return $this->dateOfBirth;
    }


    // Setter e Getter dell'attributo $placeOfBirth

    public function setPlaceOfBirth(string $placeOfBirth): void
    {
        $this->placeOfBirth = $placeOfBirth;
    }

    public function getPlaceOfBirth(): string
    {
        return $this->placeOfBirth;
    }


    // Setter e Getter dell'attributo $nationality

    public function setNationality(string $nationality): void
    {
        $this->nationality = $nationality;
    }

    public function getNationality(): string
    {
        return $this->nationality;
    }
}

try {
    $actor1 = new Actor('Ewan Gordon McGregor', 53, '31 March 1971', 'Perth', 'British');
    $actor2 = new Actor('Guy Pearce', 57, '5 October 1967', 'Ely', 'Australian');
    $actor3 = new Actor('Carrie-Anne Moss', 57, '21 August 1967', 'Burnaby', 'Canadian');
    $actor4 = new Actor('Elijah Wood', 43, '28 January 1981', 'Cedar Rapids', 'American');
    $actor5 = new Actor('Matthew McConaughey', 55, '4 November 1969', 'Uvalde', 'American');
    $actor6 = new Actor('Alberto Tomba', 58, '19 December 1969', 'San Lazzaro di Savena', 'Italian');
    $actor7 = new Actor('Nigel John Dermot Neill', 77, '14 September 1947', 'Omagh', 'Irish');
} catch (Exception $error) {
    $error = $error->getMessage();
}
