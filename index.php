<?php 
require_once __DIR__ . '/models/Movie.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <!-- istanza 1  -->
    <section>
        <h1><?php $movie1->getTitle() ?></h1>
        <address><?= '<strong>Director: </strong>' . $movie1->director ?></address>
        <p><?= '<strong>Plot: </strong>' . $movie1->plot ?></p>
        <p><?= '<strong>Language: </strong>' . $movie1->language ?></p>
        <?= '<strong>Country: </strong>' . $movie1->country ?>
    </section>
    <!-- Istanza 2  -->
    <section>
    <h1><?php $movie1->getTitle() ?></h1>
        <address><?= '<strong>Director: </strong>' . $movie2->director ?></address>
        <p><?= '<strong>Plot: </strong>' . $movie2->plot ?></p>
        <p><?= '<strong>Language: </strong>' . $movie2->language ?></p>
        <?= '<strong>Country: </strong>' . $movie2->country ?>
    </section>
</body>
</html>