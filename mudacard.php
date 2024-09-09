<?php
session_start();

// Anti-Engraçadinhos
if (isset($_GET["c1"]) || isset($_GET["c2"])) {

    //Muda a seção atual do jogo
    if ($_SESSION["secao_atual"] < 5) {
        $_SESSION["secao_atual"]++;
    };

    // Verifica qual card foi clicado
    if (isset($_GET["c1"])) {
        $_SESSION["card_clicado"] = $_GET["c1"];
    } else {
        $_SESSION["card_clicado"] = $_GET["c2"];
    };

    // Altera o número dos próximos cards
    if ($_SESSION["card_clicado"] < 8) {
        $_SESSION["cards_atuais"] = [
            1 => $_SESSION["card_clicado"] * 2,
            2 => $_SESSION["card_clicado"] * 2 + 1
        ];
    } else {
        $_SESSION["cards_atuais"] = [
            1 => 16,
            2 => 0
        ];
    };

    // Salva os cards escolhidos para que eles possam aparecer na timeline
    $_SESSION["cards_escolhidos"] = [...$_SESSION["cards_escolhidos"], $_SESSION["card_clicado"]];

    // Continua ou finaliza o jogo baseado no card clicado por último
    if ($_SESSION["card_clicado"] == 16) {
        header("Location: /fim.php");
    } else {
        header("Location: /jogo.php");
    }
} else {
    header("Location: /");
}
