<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akumu</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/general.css">
</head>

<?php
    if(session_status() == PHP_SESSION_ACTIVE){
        session_destroy();
    }
    
    session_start();

    $_SESSION["cards"] = [
        1=>"./assets/inicio.png", 2=>"./assets/comer.png",3=>"./assets/drogas.png", 
        4=>"./assets/banho.png", 5=>"./assets/gritar.png", 6=>"./assets/dormir.png", 
        7=>"./assets/assalto.png", 8=>"https://placehold.co/270x480", 9=>"./assets/mijar.png",
        10=>"./assets/desculpa.png", 11=>"./assets/agredir.png", 12=>"./assets/racao.png",
        13=>"./assets/sucidio.png", 14=>"./assets/correr.png", 15=>"./assets/latrocinio.png", 
        16=>"./assets/bomba.png"
    ];

    $_SESSION["secao_atual"] = 1;

    $_SESSION["cards_atuais"] = [1=>1, 2=>2];

    $_SESSION["card_clicado"] = 1;

    $_SESSION["cards_escolhidos"] = [];
?>

<body>
    <article>
        <h1>Akumu</h1>
        <button id="btn_comecar"><a href="jogo.php">Iniciar</a></button>
    </article>
</body>

</html>