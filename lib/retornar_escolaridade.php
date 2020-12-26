<?php
function retornar_escolaridade() : array {
    $VALOR = array(        
        0 => 'PÓS DOUTORADO', 
        1 => 'DOUTORADO', 
        2 => 'MESTRADO', 
        3 => 'PÓS GRADUAÇÃO', 
        4 => 'MBA', 
        5 => 'SUPERIOR',            
        6 => 'TECNÓLOGO', 
        7 => 'TÉCNICO',
        8 => 'SEGUNDO GRAU',
        9 => 'PRIMEIRO GRAU'
    );
    return $VALOR;
}
$array_escolaridade = retornar_escolaridade();