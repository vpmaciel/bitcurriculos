<?php
function retornar_nivel_conhecimento_idioma() : array {
    $VALOR = array(        
        1 => 'BÁSICO',
        2 => 'INTERMEDIÁRIO',
        3 => 'AVANÇADO',
        4 => 'FLUENTE',
    );
    return $VALOR;
}
$array_nivel_conhecimento_idioma = retornar_nivel_conhecimento_idioma();