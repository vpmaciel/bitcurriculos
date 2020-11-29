<?php
function retornar_pais() : array {
    $VALOR = array(
        0 => 'TODOS',
        1 => 'BRASIL',
        2 => 'EXTERIOR'
    );
    return $VALOR;
}
$array_pais = retornar_pais();