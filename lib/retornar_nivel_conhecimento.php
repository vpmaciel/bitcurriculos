<?php
function retornar_nivel_conhecimento() : array {
    $VALOR = array(
        0 => 'TODOS',
        1 => 'BÁSICO',
        2 => 'INTERMEDIÁRIO',
        3 => 'AVANÇADO'
    );
    return $VALOR;
}
$array_nivel_conhecimento = retornar_nivel_conhecimento();