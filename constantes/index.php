<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>
</head>

<body>
    <?php
    define('min', 17);
    define('max', 20);

    $idade = 25;

    echo "Min " . min . "<br/>";

    echo "Min " . max . "<br/>";

    echo "Idade " . $idade . "<br/>";

    if ($idade >= min && $idade <= max) {
        echo 'Acesso Liberado';
    } else {
        echo "Acesso bloqueado ";
    }

    echo PHP_VERSION;



    ?>
</body>

</html>