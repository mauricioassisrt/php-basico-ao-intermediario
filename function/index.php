<?php

        // function funcacaoTeste($nome, $email)
        // {
        
        //    return 'Olá meu nome é'.$nome.'meu email é '.$email;
        // }
    
        // echo funcacaoTeste('Maurciio', 'Ma@m.com');
    

        function ajuste( $p1, $p2){
            return (($p1*$p2)/4);
        }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function </title>
</head>
<body>
    
    <!-- <h1><?= ajuste(3, 10)?></h1> -->

    <?php

        for ($i=0; $i < 10; $i++) { 
            ?>
            <li> <?= ajuste($i , ($i+6))?></li>
            <?php
        }
    
    ?>
</body>
</html>