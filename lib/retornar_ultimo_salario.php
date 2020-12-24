<?php
function retornar_ultimo_salario() : array {
    $VALOR = array(                
        1 => 'DE R$ 1.000,00 ATÉ R$ 1.999,99',
        2 => 'DE R$ 2.000,00 ATÉ R$ 2.999,99',
        3 => 'DE R$ 3.000,00 ATÉ R$ 3.999,99',
        4 => 'DE R$ 4.000,00 ATÉ R$ 4.999,99',
        5 => 'DE R$ 5.000,00 ATÉ R$ 5.999,99',
        6 => 'DE R$ 6.000,00 ATÉ R$ 6.999,99',
        7 => 'DE R$ 7.000,00 ATÉ R$ 7.999,99',
        8 => 'DE R$ 8.000,00 ATÉ R$ 8.999,99',
        9 => 'DE R$ 9.000,00 ATÉ R$ 9.999,99',
        10 => 'DE R$ 10.000,00 ATÉ R$ 19.999,99',
        11 => 'DE R$ 20.000,00 ATÉ R$ 29.999,99',
        12 => 'DE R$ 30.000,00 ATÉ R$ 39.999,99',
        13 => 'DE R$ 40.000,00 ATÉ R$ 49.999,99',
        14 => 'ACIMA R$ 50.000,00',
    );
    return $VALOR;
}
$array_ultimo_salario = retornar_ultimo_salario();