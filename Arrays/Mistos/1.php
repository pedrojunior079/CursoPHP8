<?php

# ARRAYS MISTOS (MIXED ARRAYS)

# É possivel criar um array que combina indices numericos e strings.
# Embora não seja de necessidade muito frequente, é possivel da sguinte forma:

$dados = [
    0 => 10,
    'nome' => 'Antonio',
    'apelido' => 'silva',
    10 => 10000,
    11 => 'Rua de Lisboa',
    12 => 'Portugal'
];

# uma estrutura deste tipo é mais complexa de gerir
# devido a mistura de indice e tipos de dados.

# Para apresentar dados do array, procedemos sempre da mesma forma;

echo $dados[0];         # 10
echo $dados['apelido']; # silva







