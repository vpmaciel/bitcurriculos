<?php
function usuario_model() : array {
    $usuario_model = array(
        'usu_int_id' => '',
        'usu_char_email' => '',
        'usu_int_senha' => '' . rand(1000, 9999),
        'usu_date_ultimo_login' => date('Y-m-d')
    );
    return $usuario_model;
}