<?php
if(isset($_POST['nom'])==true){
    # C'est du post et mes mes données ont été envoyées

    # INSERTION D'UN NOUVEAU GENRE AVEC PDO
    $sql = "INSERT INTO genre (nom) VALUES (:NOM)";
    $pdo = new PDO('sqlite:streaming.sqlite');
    $stm = $pdo->prepare($sql);
    $stm->bindValue('NOM', $_POST['nom']);
    $stm->execute();

    # Redition vers liste
    header('Location:web-db-lister-genres.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Ajouter un nouveau genre</h1>
<form method="post">
    <label>Nom du genre</label>
    <input name="nom">
    <button type="submit">Valider</button>
</form>
</body>
</html>