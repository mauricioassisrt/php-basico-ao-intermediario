<?php
// não é necessário criar variaveis, para efetuar calculos 
//
//echo 1 + 1;

$adicao = 2 + 5;
$subtração = 5 - 2;
$multipicacao = 5 * 2;
$divisao = 5 / 2;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adição e subtração </title>
</head>

<body>

    asdasda
    <p>
        2 + 5 <?= $adicao ?>
    </p>

    <p>
        5 - 2
        <?= $subtração ?>
    </p>

    <p>
        5 * 2
        <?= $multipicacao ?>
    </p>

    <p>
        5 / 2
        <?= $divisao ?>
    </p>

    <p>
        <?= ($adicao * $divisao) ?>
    </p>

    <p></p>

</body>

</html>