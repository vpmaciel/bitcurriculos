<?php
function retornar_contrato() : array
{
    $VALOR = array(        
        'EFETIVO (CLT)',
        'ESTÁGIO',
        'TEMPORÁRIO',
        'AUTÔNOMO',
        'PRESTADOR DE SERVIÇOS (PJ)',
        'TRAINEE',
        'COOPERADO',
        'OUTROS'
    );
    return $VALOR;
}
$array_contrato = retornar_contrato();