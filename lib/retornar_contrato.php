<?php
function retornar_contrato() : array
{
    $VALOR = array(        
        1 => 'EFETIVO (CLT)',
        2 => 'ESTÁGIO',
        3 => 'TEMPORÁRIO',
        4 => 'AUTÔNOMO',
        5 => 'PRESTADOR DE SERVIÇOS (PJ)',
        6 => 'TRAINEE',
        7 => 'COOPERADO',
        8 => 'OUTROS'
    );
    return $VALOR;
}
$array_contrato = retornar_contrato();