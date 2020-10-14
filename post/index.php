<?php
$titulo = " POST";
$arrayNome = array("valentina", "maria", "joão", "jose ");
$nome = filter_input(INPUT_POST, "txtNome", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "txtEmail", FILTER_SANITIZE_STRING);
$funcionarioCod =  filter_input(INPUT_POST, "slFuncionario", FILTER_SANITIZE_NUMBER_INT);
$funcionario = "";

if($funcionarioCod){
    $funcionario = $arrayNome[$funcionarioCod];
}
// if(isset($_POST["txtNome"])){
//     $nome = $_POST["txtNome"];
// }if (isset($_POST["txtEmail"])) {
//     $email = $_POST["txtEmail"];    
// }if (isset($_POST["slFuncionario"])) {
//   $funcionario = $arrayNome[$_POST["slFuncionario"]];
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo?></title>
</head>
<body>
    <form action="" method="post">
    <ul>
        <li>
            Nome: <input type="text" name="txtNome">
        </li>
        <li>
            E-mail <input type="text" name="txtEmail">
        </li>
        <li>
            Funcionário:
            <select name="slFuncionario" >
                <?php
                    for ($i=0; $i < count($arrayNome); $i++) { 
                ?>
                        <option value="<?= $i ?>"> <?= $arrayNome[$i] ?></option>
                <?php
                    }
                ?>
            </select>
        </li>
        <li>
            <input type="submit" value="Cadastrar" name="btnSubmit">
        </li>
    </ul>
    </form>


   <p>Nome :<?= $nome;?></p>
   <p>Email :<?= $email;?></p>
   <p>Funcionário:<?= $funcionario;?></p>
   
</body>
</html>