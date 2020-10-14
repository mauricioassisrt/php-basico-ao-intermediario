<?php
$titulo = " Data e hora ";

date_default_timezone_set('America/Sao_Paulo');
//Y exibe 2020 y exibe 20
//D exibe o dia escrito 
// echo date('d/m/y')."<br/>";
// echo date('Y-m-d h:i:s')."<br/>";

// echo date('h:i:s')."<br/>";

$hora = date("H");
//echo $hora;

if($hora >0 && $hora <=5){
    echo "Boa madrugada ";
}else if($hora >5 && $hora <=12){
    echo "Bom dia  ";
}elseif ($hora >12 && $hora <=18) {
    echo "Boa tarde";
}else{
    echo "Boa noite  ";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo?></title>
</head>
<body>
    <?php
    ?>
</body>
</html>