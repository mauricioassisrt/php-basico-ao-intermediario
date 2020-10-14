<?php
$titulo = " Requisicao de arquivos ";
include("gravar.php");
//include once inclui uma unica vez 
include_once("ler.php");
Gravar("Include ", "file.txt");
$texto = Leitura("file.txt");
echo $texto;
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