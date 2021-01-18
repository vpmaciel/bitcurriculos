<?php
function curso_model() : array {        
    $curso_model = array(
        'cur_id' => '',
        'usu_id' => '',
        'cur_nome' => '',
        'cur_instituicao' => '',
        'cur_ano_inicio' => '',
        'cur_ano_conclusao' => '',
        'cur_situacao' => '',
        'cur_nivel' => ''
    );
    return $curso_model;
}