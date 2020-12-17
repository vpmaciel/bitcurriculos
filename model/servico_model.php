<?php
function servico_model() : array {        
    $servico_model = array(
        'ser_int_id' => '',
        'usu_int_id' => '',
        'ser_char_nome_prestador' => '',
        'ser_char_cargo' => '',
        'ser_char_servico_prestado' => '',
        'ser_char_celular' => '',
        'ser_char_email' => '',
        'ser_int_estado' => '',
        'ser_int_cidade' => ''
    );
    return $servico_model;
}