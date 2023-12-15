<?php

# ARRAYS

# Um Array (é uma matriz) é na realidade uma coleção de valores.
# Funciona como uma variavel, mas que pode conter muitos valores "arrumados"
# cada um com o seu espaço.
# Esse "espaço" é designado por indice do array.

# Resumindo, um array é uma coleção constituida por chaves/indice e valores.
# as chaves/índices podem ser numéricos (array numérico) ou strings (array associativo)
# e pode até coexistir os dois típos de índice no array.
# Os valores podem ser de qualquer tipo, inclusive serem outros arrays

# Exemplos

$valores = array(1,2,3,10,20,30);
$nome = array('joao', 'ana', 'carlos');

# a partir do PHP 5.4, passou a ser possivel escrever os arrays de forma mais simplificada
$valores = [1,2,3,10,20,30];
$nomes = ['joao', 'ana', 'carlos'];

# Estes arrays são de índice numérico.
# para apresentar um dos seus valoeres, procedemos da seguinte forma:
echo $valores[0];
echo $nomes[1];

# NUNCA ESQUECER QUE OS ARRAYS TEM ÍNDICE DE BASE 0

# não tem obrigatoriamente de ter chaves sequenciais
$dados = [
    10 => 1000,
    20 => 2000,
    30 => 3000
];

# se adicionarmos um novo elemento no final da coleção, ele vai assumir o ultimo índice + 1
$dados[] = 4000; # $dados[31];




    



