<?php
$titulo = " Criptografia";

$s = sha1("Olá Mundo ");
echo $s;

echo "<br/>";

$m = md5("Php Intermediario ");
echo $m;

echo "<br/>";

$b = base64_encode("criptografias");
echo $b;

echo "<br/>";
echo base64_decode($b);

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
        /*
            sha1 gera uma chave sem volta até 40 caracteres
            ele recebe um valor passa pelo algoritimo criptografa, 
            ao usuario autenticar no sistema é enviado para o sistema a senha é criptografada 
            e comparada com a senha salva no banco 

            md5
            gera uma chave de 32 caracteres porém independente da quantidade ele gerá 32 caracteres
            é raro as chaves gerar iguais apesar de tentar-se a mesma chave diversas vezes a mesma é 
            submetida e gerada uma hash nova a cada vez que é criptografada, 

            chave do tipo base64 é possivel encripitar e decriptar, 
        
        */
    ?>
</body>
</html>