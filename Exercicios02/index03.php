<?php
$nome = "pedrojr";
$apelido = "pedrinho";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <p><?= "O meu nome é ". strtoupper($nome) . " e o meu apelido é " . strtoupper($apelido) ?></p>
   <p><?= "O meu nome é ". mb_strtoupper($nome) . " e o meu apelido é " . mb_strtoupper($apelido) ?></p>
</body>
</html>