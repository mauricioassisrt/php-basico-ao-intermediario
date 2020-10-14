<?php

function Gravar(string $texto, $arquivo)
{
    $fp = fopen($arquivo, "a+");
    fwrite($fp, "{$texto} <br/> \r\n");
    fclose($fp);
}
