<?php
if( isset($_POST['pseudo']) && isset($_POST['mdp']) ){
    # On vient de cliquer sur Me Connecter

    session_start();
    $_SESSION['pseudo'] = $_POST['pseudo'];
    $_SESSION['role'] = 'ADMIN';
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label>Pseudo</label>
    <input name="pseudo">
    <label>M-d-p</label>
    <input name="mdp" type="password">
    <button type="submit">Me connecter</button>
</form>
</body>
</html>