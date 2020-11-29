<?php
function retornar_sexo() : array {
    $VALOR = array(
        0 => 'TODOS',
        1 => 'MASCULINO',
        2 => 'FEMININO'
    );
    return $VALOR;
}
$array_sexo = retornar_sexo();