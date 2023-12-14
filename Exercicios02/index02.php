<?php
$nome = "Pedro Junior";
$apelido = "Pedrinho";
$nome_completo = "$nome $apelido";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <p><?= $nome_completo ?></p>
   <p><?= "O meu nome tem ". mb_strlen($nome_completo) . " caracteres." ?></p>
</body>
</html>