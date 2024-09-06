<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<?php
    if(session_status() == PHP_SESSION_NONE || session_status() == PHP_SESSION_DISABLED){
        session_start();
    }
?>
<body>

</body>
</html>

