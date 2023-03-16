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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Ajouter un nouveau genre</h1>
<form>
    <label>Nom du genre</label>
    <input name="nom">
    <button type="submit">Valider</button>
</form>
</body>
</html>