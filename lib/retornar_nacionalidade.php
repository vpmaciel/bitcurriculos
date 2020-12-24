<?php
function retornar_nacionalidade() : array{
    $VALOR = array(        
        1 => 'BRASILEIRO (A) NATO (A)',
        2 => 'BRASILEIRO (A) NATURALIZADO (A)',
        3 => 'ESTRANGEIRO (A)'
    );
    return $VALOR;
}
$array_nacionalidade = retornar_nacionalidade();