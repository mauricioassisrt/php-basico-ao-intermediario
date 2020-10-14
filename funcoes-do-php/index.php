<?php
$titulo = " Funções do PHP ";

$nome = "Mauricio ";
//echo substr($nome, 0, 3);//mostra a quantidade de caracteres 
/////
// echo strtolower("ola como vai VOCE");

// echo strtoupper("ola como vai VOCE");
//$msg = strip_tags("<h1>Bem-vindo</h1> acesse o <a href=''> link </a>", '<a>');
// $comida = "banana, Pera, Uva, Maça";
// //$alterado = str_replace("Banana", "Morango", $comida);// pega só case sensitive
// $alterado = str_ireplace("Banana", "Morango", $comida);// pega só case sensitive

// echo $alterado;
$nome ="Mauricio de assis";
//cpmverte a variavel em array para print é necessário printar a posição
// $ex = explode(" ", $nome);

// echo $ex[0]; 

//echo strlen($nome);

if(strlen($nome)<=10){
    echo 'valido';
}else{
    echo 'invalido ';
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