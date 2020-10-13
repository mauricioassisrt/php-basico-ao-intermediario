<?php
//$cont = 0;
//ccontador soma até o maximo que é 10 
// while ($cont <= 10) {
//     echo 'Contador : ' . $cont . '<br/>';
//     $cont++;
// }
//decrescente 
// $cont = 10;
// while ($cont > 0) {
//     echo 'Contador : ' . $cont . '<br/>';
//     $cont--;
// }

$cont = 0;
//ccontador soma até o maximo que é 10 
while ($cont <= 10) {
    echo 'Contador : ' . $cont . '<br/>';
    //pode ser feito destas maneiras 
    // $cont += 1;
    // $cont = $cont + 1;
    $cont++;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>

<body>
    <ul>
        <?php
        $cont = 0;
        //ccontador soma até o maximo que é 10 
        while ($cont < 30) {
            if ($cont > 5 && $cont <= 20) {
        ?>
        <li>
            <?= $cont; ?>
        </li>
        <?php
            }
            $cont++;
        }
        ?>
    </ul>
</body>

</html>