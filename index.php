<?php

// Importazione dati
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Actor.php';


// Logica del programma

$error = '';

// Elenco dei generei dei film
$genre1 = ['Commedia', 'Drammatico'];
$genre2 = ['Thriller', 'Drammatico', 'Noir'];
$genre3 = ['Fantastico', 'Epico', 'Avventura'];
$genre4 = ['Fantascienza', 'Avventura'];
$genre5 = ['Poliziesco', 'Commedia'];
$genre6 = ['Fantascienza', 'Avventura'];


// Elenco degli attori dei film
$cast1 = [$actor1, $actor2, $actor3, $actor4, $actor5, $actor6, $actor7];
// $cast2 = ['Commedia', 'Drammatico'];
// $cast3 = ['Commedia', 'Drammatico'];
// $cast4 = ['Commedia', 'Drammatico'];
// $cast5 = ['Commedia', 'Drammatico'];
// $cast6 = ['Commedia', 'Drammatico'];

try {
    $movie1 = new Movie('Trainspotting', 1996, $genre1, 'Scotland', 7, $cast1);
    $movie2 = new Movie('Memento', 2000, $genre2, 'United States', 8, $cast1);
    $movie3 = new Movie('The Lord of The Rings', 2001, $genre3, 'New Zealand', 10, $cast1);
    $movie4 = new Movie('Interstellar', 2014, $genre4, 'United States', 10, $cast1);
    $movie5 = new Movie("Alex l'Ariete", 2000, $genre5, 'Italia', 1, $cast1);
    $movie6 = new Movie('Jurassic Park', 1993, $genre6, 'United States', 9, $cast1);

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
                                <p>Genre: <?php echo implode(', ', $movie->getGenre()); ?></p>
                                <p>Country of origin: <?php echo $movie->getCountryOfOrigin() ?></p>
                                <?php if (is_null($movie->getVote())) : ?>
                                    <p>Non ci sono ancora voti</p>
                                <?php else : ?>
                                    <p>Vote: <?php echo $movie->getVote() ?></p>
                                <?php endif ?>
                                <?php if (count($movie->getActor())) : ?>
                                    <h3>Actors: </h3>
                                    <ul>
                                        <?php foreach ($movie->getActor() as $actor) : ?>
                                            <li>
                                                <h4><?php echo $actor->getName(); ?></h4>
                                                <p>Age: <?php echo $actor->getAge(); ?></p>
                                                <p>Date of birth: <?php echo $actor->getDateOfBirth(); ?></p>
                                                <p>Place of birth: <?php echo $actor->getPlaceOfBirth(); ?></p>
                                                <p>Nationallity: <?php echo $actor->getNationality(); ?></p>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
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