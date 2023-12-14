<?php

# Podemos comparar strings da segunte forma;
$a = 'Joao.';
$b = 'Carlos';

$c = ($a == $b); // false
$d = ($a != $b); // true

# Existe muitas funções nativas no PHP para operar com strings
# Exemplos:

$frase = 'Esta frase tem 29 caracteres.';

# retorna o número de caracteres da string
$numero_caracteres_total = strlen($frase);

# retorna as letras a partir da posição 0 e durante 4 caracteres
$primeira_palavra = substr($frase, 0, 4); # Esta

# converte toda a string em letras maiúsculas
$todas_maiusculas = strtoupper($frase);

# converte em letras minusculas
$todas_minusculas = strtolower($frase);

# substituir uma letra por outra
$nova_frase = str_replace('a', 'x', $frase); # $Estx frxase tem 29 caracteres

# verifica qual é a posição de um caracter dentro da string
$posicao = strpos($frase, 'a'); # 3

// https://www.php.net/pt_BR/ref.strings.php



