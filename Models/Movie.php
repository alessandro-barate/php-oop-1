<?php

class Movie
{
    private string $title;
    private int $year;
    private array $genre = [];
    private string $countryOfOrigin;
    private int $vote;

    // Funzione costruttore
    public function __construct(string $_title, int $_year, array $_genre, string $_countryOfOrigin, int $_vote)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->countryOfOrigin = $_countryOfOrigin;
        $this->setVote($_vote);
    }

    // Esiste anche public function __destruct(), serve ad eliminare le variabili che, una volta usate, non ci servono più. Non è pratica comune usarlo, lo mettiamo solo all'occasione



    // Setter e Getter dell'attributo $title

    public function setTitle(string $movieTitle): void
    {
        $this->title = $movieTitle;
    }

    public function getTitle(): string
    {
        return $this->title;
    }


    // Setter e Getter dell'attributo $year

    public function setYear(int $movieYear): void
    {
        $this->year = $movieYear;
    }

    public function getYear(): int
    {
        return $this->year;
    }


    // Setter e Getter dell'attributo $genre

    public function setGenre(string ...$movieGenre): void
    {
        $this->genre = [...$this->$movieGenre, ...$movieGenre];
    }

    public function getGenre(): array
    {
        return $this->genre;
    }


    // Setter e Getter dell'attributo $countryOfOrigin

    public function setCountryOfOrigin(string $movieCountryOfOrigin): void
    {
        $this->countryOfOrigin = $movieCountryOfOrigin;
    }

    public function getCountryOfOrigin(): string
    {
        return $this->countryOfOrigin;
    }


    // Setter e Getter dell'attributo $vote

    public function setVote(int $movieVote): void
    {
        if ($movieVote < 0 || $movieVote > 10) {
            throw new Exception("Voto non valido: dev'essere commpreso tra 0 e 10");
        }
        $this->vote = $movieVote;
    }

    public function getVote(): int
    {
        return $this->vote;
    }
}
