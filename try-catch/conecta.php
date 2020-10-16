<?php
    function abrirConexao()
    {
        $conection = new PDO("mysql: host=localhost; dbname=test; charset=utf8", 'root', '');
        return $conection;
    }