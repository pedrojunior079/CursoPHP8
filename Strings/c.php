<?php
# HEREDOC e NOWDOC (outras formas de delimitação)
# Apesar de não serem muito comuns, podem ser usados para tratamento de maiores blocos de texto.

# HEREDOC - Permite fazer o parse de variaveis   

$cliente = 'Pedro Arns junior';   
$email = 'parnsjr@gmail.com';

$texto = <<<LABEL
Olá, sr. $cliente.
Serve a presente mensagem para informar que se encontra inscrito no proximo concurso
Enviamos o regulamento para o seu email $email
Obrigado pela sua simpatia.
LABEL;

echo $texto;

die();




# NOWDOC - Não Permite parse de variaveis
$texto = <<<'LABEL'
Olá, sr. $cliente.
Serve a presente mensagem para informar que se encontra inscrito no proximo concurso
Enviamos o regulamento para o seu email $email
Obrigado pela sua simpatia.
LABEL;

echo $texto;


