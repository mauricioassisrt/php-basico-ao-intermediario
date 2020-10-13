<?php
$dia = 1;
$msg = "";
switch ($dia) {
    case '5':
        $msg = 'Dia do pagamento';
        break;
    case '4':
        $msg =  'Dia 4';
        break;
    case '3':
        $msg =  'Dia 3';
        break;
    case '2':
        $msg =  'Dia 2';
        break;
    case '1':
        $msg =  'Dia 1';
        break;
    default:
        $msg =  ' Não é o dia de pagamento ';
        break;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>

<body>
    <h1>Olá hoje é o dia <?= $msg; ?> </h1>
</body>

</html>