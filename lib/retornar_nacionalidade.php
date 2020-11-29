<?php
function retornar_nacionalidade() : array{
    $VALOR = array(
        0 => 'TODAS',
        1 => 'BRASILEIRO(A) NATO (A)',
        2 => 'BRASILEIRO(A) NATURALIZADO (A)',
        3 => 'ESTRANGEIRO'
    );
    return $VALOR;
}
$array_nacionalidade = retornar_nacionalidade();