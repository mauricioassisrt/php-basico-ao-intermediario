<?php
function Leitura(String $arquivo)
{
  $fp = fopen($arquivo, "r");
  $texto = fread($fp, filesize($arquivo));
  fclose($fp);
  return $texto;
}