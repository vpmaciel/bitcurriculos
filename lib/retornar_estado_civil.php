<?php
function retornar_estado_civil() : array {
    $VALOR = array(        
        'SOLTEIRO',
        'CASADO',
        'SEPARADO',
        'DIVORCIADO',
        'VIÚVO'
    );
    return $VALOR;
}
$array_estado_civil = retornar_estado_civil();