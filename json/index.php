<?php

$arrayFilmes = array(
    "nome"=>"Titanic",
    "sinopese "=>" o navio afundou ",
    "ano"=>2007,
    "horario"=>["2019", "2018"],
);

$jsonStr = json_encode($arrayFilmes);
echo $jsonStr;
///var_dump($arrayFilmes);