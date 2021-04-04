<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tarefa.css">
    <title>Document</title>
</head>
<body>
    
<?php

$str = $_POST['numero'];
$arr = explode(',', $str);

$soma = array_sum($arr);
echo $soma;


?>
</body>
</html>