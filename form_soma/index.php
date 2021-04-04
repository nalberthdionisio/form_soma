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
    <div id="formulario">
        <div id="title-formulario"> 
            <h1>Calculadora</h1>
        </div>
        <div id="campos">
            <form action="form_soma.php" method="POST">
                <input required="required" type="text" id="numeros" name="numero" placeholder="digite uma sequência">
                <input type="submit" id="botao" value="calcular">
            </form>
        </div>
    </div>
</body>
</html>