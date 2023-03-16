<?php

# Récup films / genre
$pdo = new PDO('sqlite:streaming.sqlite');
$stm = $pdo->prepare('
    SELECT      film.* 
    FROM        film 
                JOIN film_genre ON film.id=film_genre.film_id 
    WHERE film_genre.genre_id=:GENRE_ID');
$stm->bindValue('GENRE_ID', $_GET['idDuGenre']);
$stm->execute();
$films = $stm->fetchAll();

# Rendu twig
require_once 'vendor/autoload.php';
# Initialise twig
$loader = new \Twig\Loader\FilesystemLoader('vues');
$twig = new \Twig\Environment( $loader, [] );
echo $twig->render('films-par-genre.html', ['mesFilms'=>$films, 'nomDuGenre'=>$_GET['nomGenre']]);
?>
