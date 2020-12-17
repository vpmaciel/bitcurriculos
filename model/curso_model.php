<?php
function curso_model() : array {        
    $curso_model = array(
        'cur_int_id' => '',
        'usu_int_id' => '',
        'cur_char_nome' => '',
        'cur_char_instituicao' => '',
        'cur_year_ano_inicio' => '',
        'cur_year_ano_conclusao' => '',
        'cur_int_situacao' => '',
        'cur_int_nivel' => ''
    );
    return $curso_model;
}