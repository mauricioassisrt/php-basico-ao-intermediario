<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <?php
    // $arrayFrutas = ["Abacaxi ", "Melão ", "Melancia ", "Morango "];

    // foreach ($arrayFrutas as  $value) {
    //     echo $value;
    // }

    $arrayFrutas = [
        1 => "Abacaxi", 
        2 => "Uva", 
        3 => "jaca"
    ];

    // foreach ($arrayFrutas as  $value) {
    //     echo $value;
    // }

    // foreach ($arrayFrutas as $key => $value) {
    //     echo "A chave é ".$key. " O valor é ". $value." <br/>" ;
    // }


    $arrayNotas = [
        "aluno1"=> [
            "nome"=> "Maicon",
            "nota"=> 7
        ], 
        "aluno2"=>[
            "nome"=> "Maria",
            "nota"=> 2  
        ]
        
    ];

    foreach ($arrayNotas as $aluno) {
        foreach ($aluno as $key => $value) {
            echo "{$key}  = {$value} <br/>";
        }
        echo "<br/>";
    }

    ?>
</body>
</html>