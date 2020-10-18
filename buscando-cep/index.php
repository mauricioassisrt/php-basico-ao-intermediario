<?php

$cep = "87701-020";

$cep = str_replace("-", "", $cep);
$str = file_get_contents('https://viacep.com.br/ws/' . $cep . '/json/');

$arrayCidade = json_decode($str);

echo "{$arrayCidade->cep} <br/>";
echo $arrayCidade->logradouro;