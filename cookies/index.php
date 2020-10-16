<?php
$titulo = " Pagina";
$req = filter_input(INPUT_GET, "req", FILTER_SANITIZE_NUMBER_INT);

switch ($req) {
    case 1:
        Criar();
        break;
    case 2:
        Ler();
        break;
    case 3:
        Alterar();
        break;
    case 4:
        Deletar();
        break;

}

function Criar()
{
    echo "Criar ";
    setcookie("nome", "Mauricio", time() +100);
}
function Ler()
{
    echo filter_input(INPUT_COOKIE, "nome", FILTER_SANITIZE_STRING); 
}
function Alterar()
{
    echo "Alterar";
    setcookie("nome", "TESTE");
}
function Deletar()
{
    echo "Deletar";
    setcookie("nome", "Mauricio", time() -1);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo?></title>
</head>
<body>
    <?php
    ?>
</body>
</html>