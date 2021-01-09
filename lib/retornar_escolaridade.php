<?php
function retornar_escolaridade() : array {
    $VALOR = array(        
        'PÓS DOUTORADO', 
        'DOUTORADO', 
        'MESTRADO', 
        'PÓS GRADUAÇÃO', 
        'SUPERIOR',
        'TÉCNICO',
        'SEGUNDO GRAU',
        'PRIMEIRO GRAU'
    );
    return $VALOR;
}
$array_escolaridade = retornar_escolaridade();