<?php
session_start();

if ($_SESSION["secao_atual"] < 5) {
    $_SESSION["secao_atual"]++;
};


if (isset($_GET["c1"])) {
    $_SESSION["card_clicado"] = $_GET["c1"];
} else {
    $_SESSION["card_clicado"] = $_GET["c2"];
};


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

$_SESSION["cards_escolhidos"] = [...$_SESSION["cards_escolhidos"], $_SESSION["card_clicado"]];

if($_SESSION["card_clicado"] == 16){
    header("Location: /fim.php");

} else {
    header("Location: /jogo.php");

}
?>