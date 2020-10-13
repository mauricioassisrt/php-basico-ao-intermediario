<?php
    // $a=0;
    // do {
    //     //para concatenar dentro do echo é necessario usar aspas " " duplas 
    //    echo "Valor: {$a}<br/>";
    //    $a++;
    // } while ($a <= 10);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoWhile</title>
</head>
<body>
    <ul>
    <?php
            $a=1;
            do {
                    //para concatenar dentro do echo é necessario usar aspas " " duplas 
                
                ?>
                <li>
                    Valor: <?= $a; ?>
                </li>
                <?php
                $a++;
            } while ($a <= 10);
    ?>
    </ul>
</body>
</html>