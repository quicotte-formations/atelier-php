<?php
if (isset($_GET['coul'])) {
    setcookie('couleur-pref', $_GET['coul']);
    header('Location:web-cookies.php');
    exit;
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

<body style="background-color: <?php if( isset($_COOKIE['couleur-pref'])){ echo $_COOKIE['couleur-pref']; } ?>">
<a href="web-cookies.php?coul=green">Vert</a><br/>
<a href="web-cookies.php?coul=red">Rouge</a><br/>
<a href="web-cookies.php?coul=Gold">Gold</a>
</body>
</html>