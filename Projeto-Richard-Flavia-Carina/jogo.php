<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akumu</title>
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/jogo.css">
</head>
<?php session_start(); ?>

<body>
    <form action="mudacard.php" method="get" id="cards_container">
        <?php
        echo '<div class="cards"><div class="bambu_esquerda"></div><div class="bambu_direita"></div><div class="bambu_acima"></div><button type="submit" name="c1" value="' .  $_SESSION['cards_atuais'][1] . '" class="card_img" style="background-image: url(' . $_SESSION["cards"][$_SESSION["cards_atuais"][1]] . ');"></button></div>';

        if ($_SESSION["secao_atual"] != 1 && $_SESSION["secao_atual"] != 5) {
            echo '<div class="cards"><div class="bambu_esquerda"></div><div class="bambu_direita"></div><div class="bambu_acima"></div><button type="submit" name="c2" value="' .  $_SESSION['cards_atuais'][2] . '" class="card_img" style="background-image: url(' . $_SESSION["cards"][$_SESSION["cards_atuais"][2]] . ');"></button></div>';
        };
        ?>
    </form>
    <ul id="history_container">
        <?php 
            $_SESSION["cards_escolhidos"] = array_unique($_SESSION["cards_escolhidos"]);

            foreach ($_SESSION["cards_escolhidos"] as $card) {
                echo '<li class="history_blocks"><img src="'.$_SESSION["cards"][$card].'" alt=""></li>';
            };
        ?>
    </ul>
</body>
</html>