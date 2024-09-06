<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="jogo.css">
    <link rel="stylesheet" href="general.css">
</head>
<?php
    if(session_status() == PHP_SESSION_NONE || session_status() == PHP_SESSION_DISABLED){
        session_start();
    }
?>
<body>
    <div id="cards_container">
        <article class="cards"><img src="https://placehold.co/500x500" alt=""><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe possimus iusto, ipsam fugit officia incidunt ut quia.</p></article>
        <article class="cards"><img src="https://placehold.co/500x500" alt=""><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa rem maxime molestiae, omnis expedita atque vitaue quia!</p></article>
    </div>
    <ul id="history_container">
        <li class="history_blocks"><img src="#" alt=""></li>
        <li class="history_blocks"><img src="#" alt=""></li>
        <li class="history_blocks"><img src="#" alt=""></li>
        <li class="history_blocks"><img src="#" alt=""></li>
        <li class="history_blocks"><img src="#" alt=""></li>
    </ul>

    <!-- Japones miseravel fica mendigo e sofre bastante (muito) e depois hiroshima e negazap -->
</body>
</html>

