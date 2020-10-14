<?php
$titulo = " Requisicao de arquivos ";
// include("gravar.php");
// //include once inclui uma unica vez 
// include_once("ler.php");
// Gravar("Include ", "file.txt");
// $texto = Leitura("file.txt");
// echo $texto;
//require e require once ele para nesta exatamente nesta linha caso de erro
// require("graasdavar.php");
// require('graasdavar.php');
// require 'graasdavar.php';

require_once "gravar.php";
require_once "ler.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
</head>

<body>
    <?php
    echo Leitura("file.txt");
    ?>
</body>

</html>