<?php
$titulo = " Ler TXT ";

function Gravar(string $texto, $arquivo)
{
    $fp = fopen($arquivo, "a+");
    fwrite($fp, "{$texto} <br/> \r\n");
    fclose($fp);
}

Gravar(date('d-m-Y H:i:s'), "arquivo.txt");

function Leitura(String $arquivo)
{
  $fp = fopen($arquivo, "r");
  $texto = fread($fp, filesize($arquivo));
  fclose($fp);
  return $texto;
}

echo Leitura("arquivo.txt");

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