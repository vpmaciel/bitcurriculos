<?php
function usuario_model() : array {
    $usuario_model = array(
        'usu_id' => '',
        'usu_email' => '',
        'usu_senha' => '' . rand(1000, 9999),
        'usu_date_ultimo_login' => date('Y-m-d')
    );
    return $usuario_model;
}