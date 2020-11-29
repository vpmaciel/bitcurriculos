<?php
function retornar_situacao() : array {
    $VALOR = array(
        0 => 'TODOS',
        1 => 'CONCLUÍDO',
        2 => 'NÃO CONCLUÍDO',
        3 => 'EM ANDAMENTO'
    );
    return $VALOR;
}
$array_situacao = retornar_situacao();