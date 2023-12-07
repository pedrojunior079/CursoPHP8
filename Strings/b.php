<?php
# CONCATENAÇÃO DE STRINGS
# É o processo que, atraves do codigo, permite juntar várias strings.
# Existe dois operadores de concatenação:

# . 
# .=


$a = 'Pedro' . ' ' . ' Arns Junior';    # o ponto liga as diferentes strings

$b = 'Pedro';
$b .= '' .  ' Arns Junior';             # .= faz uma concatenação com o valor já existente na string
echo $b;
//die();

$nome = 'Pedro';
$apelido = ' Arns Junior';
$nome_completo = $nome . ' ' . $apelido;

echo '<br>';

echo $nome_completo;
die();

# a diferença entre strings delimitadas por ' e por " é que no segundo caso,
# podemos fazer o seguinte:


$nome = 'Pedro';
$apelido = ' Arns Junior';
$nome_completo = "$nome $apelido";

echo $nome_completo;

# ao contrario das ", nas strings ' as variaveis não são interpretadas 
# relativamente ao seu valor (Parse)

