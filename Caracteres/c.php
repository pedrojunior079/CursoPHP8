<?php

# No PHP 7 foi introduzido o caractere do escape Unicode.
# Permite apresentar caracteres a partir do seu código hexodecimal
# https://www.utf8-chartable.de/

echo "\u{A9}"; # copyright
echo "\u{BC}"; # 1/4
echo "\u{AE}"; # registered trademark

# com HTML entities
# https://dev.w3.org/html5/html5/html-author/charref
echo '<br>';
echo '&copy;';
echo '&frac14';
echo '&reg';












