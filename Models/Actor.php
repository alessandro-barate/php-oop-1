<?php

class Actor
{
    private string $name;
    private int $age;
    private string $dateOfBirth;
    private string $placeOfBirth;
    private string $nationality;

    // Funzione costruttore
    public function __construct(string $_name, int $_age, int $_dateOfBirth, string $_placeOfBirth, string $_nationality)
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
