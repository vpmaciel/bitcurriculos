<?php
function retornar_tipo_empresa() : array {
    $VALOR = array(
        0 => 'TODAS',
        1 => 'SOCIEDADE EMPRESÁRIA LIMITADA (LTDA.)',
        1 => 'EMPRESA INDIVIDUAL DE RESPONSABILIDADE LIMITADA (EIRELI)',
        2 => 'EMPRESA INDIVIDUAL',
        3 => 'MICROEMPREENDEDOR INDIVUAL (MEI)',
        4 => 'SOCIEDADE SIMPLES (SS)',
        5 => 'SOCIEDADE ANÔNIMA (SA)'            
    );
    return $VALOR;
}
$array_tipo_empresa = retornar_tipo_empresa();
