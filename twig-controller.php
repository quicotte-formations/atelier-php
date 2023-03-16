<?php

# cf : https://twig.symfony.com/doc/3.x/api.html



# Liste genres
$pdo = new PDO('sqlite:streaming.sqlite');
$stm = $pdo->query('SELECT * FROM genre ORDER BY nom');
$genres = $stm->fetchAll();

# Initialise twig
require_once 'vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('vues');
$twig = new \Twig\Environment( $loader, [] );
echo $twig->render('ma-vue-twig.html', ['mesGenres'=>$genres]);