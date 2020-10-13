<?php

        $nome = array("Ana ", "Maria ", "João ");
        //e posssivel declarar arrays somente com couchetes 
        $nomes = ["Maria ", "João ", "Ana "];
       // echo $nomes[0];
    //cout usa para contar o tamanho do array 
        // for ($i=0; $i < count($nomes); $i++) { 
        //     echo $nomes[$i];
        // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array </title>
</head>
<body>
    <select name="slProfessores" id="slProfessores">
        <?php
            for ($i=0; $i < count($nomes); $i++) { 
        ?>
        <option value="<?= $i;?>"><?= $nomes[$i]; ?></option>
        <?php
            }
        ?>
        
    </select>
    <button onclick="alert(document.getElementById('slProfessores').value);">Selecionar</button>
</body>
</html>