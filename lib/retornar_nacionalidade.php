<?php
function retornar_nacionalidade() : array{
    $VALOR = array(        
        'BRASILEIRO (A) NATO (A)',
        'BRASILEIRO (A) NATURALIZADO (A)',
        'ESTRANGEIRO (A)'
    );
    return $VALOR;
}
$array_nacionalidade = retornar_nacionalidade();