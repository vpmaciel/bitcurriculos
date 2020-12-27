<?php
function retornar_nivel_conhecimento() : array {
    $VALOR = array(        
        'BÁSICO',
        'INTERMEDIÁRIO',
        'AVANÇADO'
    );
    return $VALOR;
}
$array_nivel_conhecimento = retornar_nivel_conhecimento();