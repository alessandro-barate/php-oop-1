<?php

// Importazione dati
require_once __DIR__ . '/Models/Movie.php';


// Logica del programma

$error = '';

try {
    $movie1 = new Movie('Trainspotting', 1996, ['Commedia', 'Drammatico'], 'Scotland', 7, $actor1);
    $movie2 = new Movie('Memento', 2000, ['Thriller', 'Drammatico', 'Noir'], 'United States', 8, $actor1);
    $movie3 = new Movie('The Lord of The Rings', 2001, ['Fantastico', 'Epico', 'Avventura'], 'New Zealand', 10, $actor1);
    $movie4 = new Movie('Interstellar', 2014, ['Fantascienza', 'Avventura'], 'United States', 10, $actor1);
    $movie5 = new Movie("Alex l'Ariete", 2000, ['Poliziesco', 'Commedia'], 'Italia', 1, $actor1);
    $movie6 = new Movie('Jurassic Park', 1993, ['Fantascienza', 'Avventura'], 'United States', 9, $actor1);

    $movies_list = [$movie1, $movie2, $movie3, $movie4, $movie5, $movie6];
} catch (Exception $error) {
    $error = $error->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies PHP</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Movies</h1>
                <?php if ($error) : ?>
                    <p>
                        <?php echo ($error); ?>
                    </p>
                <?php else : ?>
                    <ul>
                        <?php foreach ($movies_list as $movie) : ?>
                            <li>
                                <h2><?php echo $movie->getTitle(); ?></h2>
                                <p>Year: <?php echo $movie->getYear(); ?></p>
                                <?php if (count($movie->getGenre())) : ?>
                                    <?php foreach ($movie->getGenre() as $genre) : ?>
                                        <p>Genre: <?php echo $genre; ?></p>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                <p>Country of origin: <?php echo $movie->getCountryOfOrigin() ?></p>
                                <p>Vote: <?php echo $movie->getVote() ?></p>
                                <p>Actor: <?php echo $movie->getActor()->getName(); ?></p>
                            </li>
                            <hr>
                            <hr>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>