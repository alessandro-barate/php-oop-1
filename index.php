<?php
class Movie
{
    private string $title;
    private string $countryOfOrigin;
    private int $vote;

    public function __construct(string $_title, string $_countryOfOrigin, int $_vote)
    {
        // echo 'ciao';
        $this->title = $_title;
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


    // Setter e Getter dell'attributo $countryOfOrigin

    public function setCountryOfOrigin(string $movieCountryOfOrigin): void
    {
        $this->countryOfOrigin = $movieCountryOfOrigin;
    }

    public function getCountryOfOrigin(): string
    {
        return $this->countryOfOrigin;
    }

    public function setVote(int $movieVote): void
    {
        if ($movieVote < 0 || $movieVote > 10) {
            throw new Exception('Voto non valido');
        }
        $this->vote = $movieVote;
    }

    public function getVote(): int
    {
        return $this->vote;
    }
}

$movies_list = [];

try {
    $movie1 = new Movie('Trainspotting', 'Scotland', 7);
    $movie2 = new Movie('Memento', 'United States', 8);
    $movie3 = new Movie('The Lord of The Rings', 'New Zealand', 10);
    $movie4 = new Movie('Interstellar', 'United States', 10);
    $movie5 = new Movie("Alex l'Ariete", 'Italia', 1);
    $movie6 = new Movie('Jurassic Park', 'United States', 9);

    $movies_list = [$movie1, $movie2, $movie3, $movie4, $movie5, $movie6];
} catch (Exception $error) {
    echo $error->getMessage();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie PHP</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <ul>Movies:
                    <?php foreach ($movies_list as $movie) : ?>
                        <li>
                            <h2><?php echo $movie->getTitle() ?></h2>
                        <li>
                            <p>Country of origin: <?php echo $movie->getCountryOfOrigin() ?></p>
                        </li>
                        <li>
                            <p>Vote: <?php echo $movie->getVote() ?></p>
                        </li>
                        <hr>
                        <hr>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>