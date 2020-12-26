<?php
function retornar_situacao() : array {
    $VALOR = array(        
        0 => 'CONCLUÍDO',
        1 => 'NÃO CONCLUÍDO',
        2 => 'EM ANDAMENTO'
    );
    return $VALOR;
}
$array_situacao = retornar_situacao();