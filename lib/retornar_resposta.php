<?php
function retornar_resposta() : array {
    $VALOR = array(
        0 => 'TODOS',
        1 => 'SIM',
        2 => 'NÃO'
    );
    return $VALOR;
}
$array_resposta = retornar_resposta();