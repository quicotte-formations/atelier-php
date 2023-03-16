<?php

    var_dump( $_FILES );

    $nomTmp = $_FILES['fichier']['tmp_name'];
    $ext = explode('.', $_FILES['fichier']['name'])[1];
    $nouveauNom = 'IMG/' . uniqid() . '.' . $ext;
    move_uploaded_file($nomTmp, $nouveauNom);
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
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="fichier">
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>