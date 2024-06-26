<?php

// Importazione dati
require_once __DIR__ . '/Models/Movie.php';


// Logica del programma

$error = '';
$genre1 = ['Commedia', 'Drammatico'];
$genre2 = ['Thriller', 'Drammatico', 'Noir'];
$genre3 = ['Fantastico', 'Epico', 'Avventura'];
$genre4 = ['Fantascienza', 'Avventura'];
$genre5 = ['Poliziesco', 'Commedia'];
$genre6 = ['Fantascienza', 'Avventura'];

try {
    $movie1 = new Movie('Trainspotting', 1996, $genre1, 'Scotland', 7, $actor1);
    $movie2 = new Movie('Memento', 2000, $genre2, 'United States', 8, $actor2, $actor3);
    $movie3 = new Movie('The Lord of The Rings', 2001, $genre3, 'New Zealand', 10, $actor4);
    $movie4 = new Movie('Interstellar', 2014, $genre4, 'United States', 10, $actor5);
    $movie5 = new Movie("Alex l'Ariete", 2000, $genre5, 'Italia', 1, $actor6);
    $movie6 = new Movie('Jurassic Park', 1993, $genre6, 'United States', 9, $actor7);

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
                                    <p>Genre: <?php echo implode(', ', $movie->getGenre()); ?></p>
                                <?php endif; ?>
                                <p>Country of origin: <?php echo $movie->getCountryOfOrigin() ?></p>
                                <?php if (is_null($movie->getVote())) : ?>
                                    <p>Non ci sono ancora voti</p>
                                <?php else : ?>
                                    <p>Vote: <?php echo $movie->getVote() ?></p>
                                <?php endif ?>
                                <p>Actor: <?php echo $movie->getActor()->getName(); ?>
                                <ul>
                                    <li>
                                        <h5>Age: <span><?php echo $movie->getActor()->getAge(); ?></span></h5>
                                    </li>
                                    <li>
                                        <h5>Date of birth: <span><?php echo $movie->getActor()->getDateOfBirth(); ?></span></h5>
                                    </li>
                                    <li>
                                        <h5>Place of birth: <span><?php echo $movie->getActor()->getPlaceOfBirth(); ?></span></h5>
                                    </li>
                                    <li>
                                        <h5>Nationality: <span><?php echo $movie->getActor()->getNationality(); ?></span></h5>
                                    </li>
                                </ul>
                                </p>
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