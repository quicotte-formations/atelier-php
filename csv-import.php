<?php

$pdo = new PDO('sqlite:fichiers/db-eric.sqlite');
$pdo->beginTransaction();

require_once 'vendor/autoload.php';

$csv = \League\Csv\Reader::createFromPath('fichiers/DEFM.csv', 'r');
$csv->setDelimiter(';');
$records = $csv->getRecords();

foreach ($records as $record){

    # Insère ligne en BD
    $stm = $pdo->prepare('INSERT INTO defm VALUES (:ANNEE, :MOIS, :COMRES, :ROME, :AGE, :CATSTA, :NBDEFM)');
    $stm->bindValue('ANNEE', $record[0]);
    $stm->bindValue('MOIS', $record[1]);
    $stm->bindValue('COMRES', $record[2]);
    $stm->bindValue('ROME', $record[3]);
    $stm->bindValue('AGE', $record[4]);
    $stm->bindValue('CATSTA', $record[5]);
    $stm->bindValue('NBDEFM', $record[6]);

    $stm->execute();
}

$pdo->commit();
