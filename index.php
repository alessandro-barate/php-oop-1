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
        $this->vote = $_vote;
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
        if ($movieVote < 0) {
            throw new Exception('Voto non valido');
        }
        $this->vote = $movieVote;
    }

    public function getVote(): int
    {
        return $this->vote;
    }
}

try {
    $trainspotting = new Movie('Trainspotting', 'Scotland', 8);
    $memento = new Movie('Memento', 'United States', -1);
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
                <ul>
                    <li><?php echo $trainspotting->getTitle() ?>
                        <ul>
                            <li><?php echo $trainspotting->getCountryOfOrigin() ?></li>
                            <li><?php echo $trainspotting->getVote() ?></li>
                        </ul>
                    </li>
                    <li><?php echo $memento->getTitle() ?>
                        <ul>
                            <li><?php echo $memento->getCountryOfOrigin() ?></li>
                            <li><?php echo $memento->getVote() ?></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>