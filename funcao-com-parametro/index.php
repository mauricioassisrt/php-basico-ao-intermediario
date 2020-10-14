<?php

$salario = 1500.00;
$ajuste=0;

function AjusteSalario($sal, &$ajuste)
{
    $ajuste = 300.00;
    return ($sal+$ajuste);   
    
    
}
$valorFinal = AjusteSalario($salario, $ajuste);

echo " O valor ajustado é de : <b> R$ {$valorFinal} </b>, com aumento de : R$ {$ajuste}";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcação com parametro por referencia </title>
</head>
<body>
    
</body>
</html>