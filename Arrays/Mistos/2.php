<?php

# ARRAYS MULTIDIMENSIONAIS

# São arrays, numéricos ou associativos, cujos valores são outros arrays.
# exemplo:

$dados = [
    [10, 20, 30, 40],
    [100, 200, 300, 400],
    [1000, 2000, 3000, 4000]
];

# neste caso, para apresentar-mos valores deste array:

echo $dados[1][2];  # 300
echo $dados[0][3];  # 40 

# podemos ter arrays multimensionais associativos:

$cidades = [
    'portugal' => ['Lisboa', 'Porto', 'Coimbra'],
    'brasil' => ['Brasilia', 'São Paulo', 'Rio de Janeiro'],
    'espanha' => ['Madrid', 'Barcelona', 'Sevilha']
];

echo $cidades['brasil'][1]; # São Paulo
echo $cidades['espanha'][0]; # Madrid
echo $cidades['portugal'][2]; # Coimbra

# Os arrays podem ter mais do que duas dimensões.

# Iremos voltar aos arrays mais a frente para ver algumas
# funções relacionadas com esta matéria






