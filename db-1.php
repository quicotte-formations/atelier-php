<?php

$pdo = new PDO("sqlite:streaming.sqlite");

$genreASupprimer = "blabla";

$stm = $pdo->prepare("SELECT id, titre FROM film WHERE titre LIKE '%dracula%'");
$stm->execute();
$donnees = $stm->fetchAll(PDO::FETCH_OBJ);

