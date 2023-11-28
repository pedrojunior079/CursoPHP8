<?php

# no PHP 7 foi adicionado um novo operador de comparação
# designado por spaceship operator (Tie Fighter do Star Wars)

#      <=>

$x = 1 <=> 1;    # 0 (1 == 1)
$x = 3 <=> 2;    # 1 (3 > 2)
$x = 1 <=> 2;    # -1 (1 < 2)
