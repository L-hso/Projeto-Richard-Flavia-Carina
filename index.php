<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historia</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="general.css">
</head>

<?php
if (session_status() == PHP_SESSION_ACTIVE) {
    session_destroy();
}
?>

<body>
    <article>
        <h1>Akumu</h1>
        <button id="btn_comecar"><a href="jogo.php">Iniciar</a></button>
    </article>
</body>

</html>