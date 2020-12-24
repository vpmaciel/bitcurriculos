<?php
function retornar_escolaridade() : array {
    $VALOR = array(        
        1 => 'PÓS DOUTORADO', 
        2 => 'DOUTORADO', 
        3 => 'MESTRADO', 
        4 => 'PÓS GRADUAÇÃO', 
        5 => 'MBA', 
        6 => 'SUPERIOR',            
        7 => 'TECNÓLOGO', 
        8 => 'TÉCNICO',
        9 => 'SEGUNDO GRAU',
        10 => 'PRIMEIRO GRAU',
    );
    return $VALOR;
}
$array_escolaridade = retornar_escolaridade();