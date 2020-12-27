<?php
function retornar_nivel_conhecimento_idioma() : array {
    $VALOR = array(        
        'BÁSICO',
        'INTERMEDIÁRIO',
        'AVANÇADO',
        'FLUENTE',
    );
    return $VALOR;
}
$array_nivel_conhecimento_idioma = retornar_nivel_conhecimento_idioma();