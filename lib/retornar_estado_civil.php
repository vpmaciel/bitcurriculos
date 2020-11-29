<?php
function retornar_estado_civil() : array {
    $VALOR = array(
        0 => 'TODOS',
        1 => 'SOLTEIRO',
        2 => 'CASADO',
        3 => 'SEPARADO',
        4 => 'DIVORCIADO',
        5 => 'VIÚVO'
    );
    return $VALOR;
}
$array_estado_civil = retornar_estado_civil();