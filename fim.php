<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akumu</title>
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/fim.css">
</head>

<body>
    <div id="cards_container" class="cards_container_do_fim">
    <?php 
        session_start();

        foreach ($_SESSION["cards_escolhidos"] as $card) {
            echo '<div class="cards cards_do_fim"><button type="submit" class="img" style="background-image: url(' . $_SESSION["cards"][$card] . '); background-size: cover;"></button></div>';
        };
    ?>
    </div>
    <button id="btn_resetar"><a href="./">Acordar</a></button>
</body>
</html>