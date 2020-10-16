<?php
$titulo = " Try Catch";
require_once 'conecta.php';

try {
    abrirConexao();
   
} catch (Exception $th) {
    echo $th->getMessage()."<br/>";
    echo $th->getLine()."<br/>";
    echo $th->getFile()."<br/>";
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