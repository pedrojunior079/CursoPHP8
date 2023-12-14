<?php

# ARRAYS ASSOCIATIVOS

# ao contrario dos arrays numericos, as chaves são do tipo string

$dados = [
    'A' => 20,
    'B' => 30,
    'C' => 40,
    'D' => 50,
    'E' => 60
];

# ou

$dados = [
    'nome' => 'carlos',
    'email' => 'carlos@gmail.com',
    'nacionalidade' => 'Brasil',
    'telefone' => '99999999'
];

# Da mesma forma que nos arrays numericos não devem existir duas chaves iguais,
# nos associativos também não
# na apresentação não é gerado nenhum erro. O valor a ser definido é sempre o último.
$dados = [
    'nome' => 'joao',
    'nome' => 'carlos'
];

echo $dados['nome'];








    



