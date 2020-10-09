<?php
$idade = 19;
$senha = 123;
$acesso = true;
// if ($idade > 18) {
//     echo "OKAY";
// } else {
//     echo "idade menor ";
// }
/*
    temos alguns operadores no PHP para comparação

    == IGUALDADE
    === IDENTICO NOME E TIPO
    != DIFERENTE 
    !== NAO IDENTICO TIPO OU VALOR
    <> diferente 
    < menor
    >maior
    >= Maior ou igual
    <=Menor ou igual

*/

// if ($senha == 123) {
//     echo "acesso autorizado nivel 1";
// } else if ($senha == 1234) {
//     echo "Acesso autorizado nivel 2  ";
// } else {
//     echo " Acesso negado ";
// }

//comparação se idade é maior que 18 e senha igual a 1234
// if ($idade >= 18 && $senha == 1234) {
//     echo 'Acesso autorizado ';
// } else {
//     echo 'Acesso negado';
// }

// comparação se idade é maior que 18 OU  senha igual a 1234
// if ($idade >= 18 || $senha == 1234) {
//     echo 'Acesso autorizado ';
// } else {
//     echo 'Acesso negado';
// }
// !! é utilizando na frente da variavel para negação 
// if (!$acesso && $idade >= 18) {
//     echo 'okay';
// } else {
//     echo 'invalid';
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Else IF</title>
</head>

<body>
    <?php

    if ($idade >= 18 && $acesso) {
    ?>
    <h1 style="color: green;"> Autorizado </h1>
    <?php
    } else {
    ?>
    <h1 style='color:red'> Negado </h1>
    <?php
    }

    ?>
</body>

</html>