<?php
function pessoa_model() : array {
    $pessoa_model = array(
        'usu_int_id' => '',
        'pes_char_nome' => '',
        'pes_char_url_repositorio_codigos' => '',
        'pes_char_url_linkedin' => '',
        'pes_date_data_nascimento' => '',
        'pes_char_celular_numero' => '',
        'pes_bit_sexo' => '',
        'pes_int_escolaridade' => '',
        'pes_int_estado_civil' => '',
        'pes_int_nacionalidade' => '',
        'pes_bit_possui_filhos' => '',
        'pes_bit_possui_deficiencia' => '',
        'pes_int_pais' => '',
        'pes_int_estado' => '',
        'pes_int_cidade' => '',
        'pes_int_cnh' => '',
        'pes_int_ultimo_salario_mensal' => '',
        'pes_bit_empregado_atualmente' => '',
        'pes_bit_procurando_emprego_atualmente' => '',
        'pes_bit_disponivel_viagens' => '',
        'pes_bit_trabalha_outras_cidades' => '',
        'pes_bit_trabalha_exterior' => '',
        'pes_bit_trabalha_home_office' => '',
        'pes_bit_possui_carro' => '',
        'pes_bit_possui_moto' => '',
        'pes_bit_dispensado_servico_militar' => '',
    );
    return $pessoa_model;
}

function publicaca_vaga_model() : array {
    $publicaca_vaga_model = array(
        'pub_vag_int_id' => '',
        'usu_int_id' => '',
        'pub_vag_char_empresa' => '',
        'pub_vag_char_cargo' => '',
        'pub_vag_char_requisitos' => '',
        'pub_vag_char_funcoes' => '',
        'pub_vag_char_beneficios' => '',
        'pub_vag_date_data_publicacao' => '',
        'pub_vag_pcd' => '',
        'pub_vag_int_vagas'=> '',
        'pub_vag_int_contrato' => '',
        'pub_vag_dec_salario_mensal' => '',
        'pub_vag_int_estado' => '',
        'pub_vag_int_cidade' => '',        
    );
    return $publicaca_vaga_model;
}

function objetivo_profissional_model() : array {    
    $objetivo_profissional_model = array(
        'obj_pro_int_id' => '',
        'usu_int_id' => '',
        'obj_pro_int_char_cargo' => '',
        'obj_pro_int_pretensao_salarial' => '',
        'obj_pro_int_contrato' => ''
    );
    return $objetivo_profissional_model;
}

function idioma_model() : array {
    $idioma_model  = array(
        'idi_int_id' => '',
        'usu_int_id' => '',
        'idi_int_idioma' => '',
        'idi_int_nivel_conhecimento' => ''
    );
    return $idioma_model;
}

function habilidade_model() : array {    
    $habilidade_model = array(
        'hab_int_id' => '',
        'usu_int_id' => '',
        'hab_char_habilidade' => '',
        'hab_int_nivel_conhecimento' => ''
    );
    return $habilidade_model;
}

function experiencia_profissional_model() : array {
    $experiencia_profissional_model = array(
        'exp_prof_int_id' => '',
        'usu_int_id' => '',    
        'exp_prof_char_empresa' => '',
        'exp_prof_char_cargo' => '',
        'exp_prof_date_data_admissao' => '',
        'exp_prof_date_data_saida' => '',
        'exp_prof_char_funcoes' => ''
    );
    return $experiencia_profissional_model;
}

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

function certificado_model() : array {
    $certificado_model = array(
        'cer_int_id' => '',
        'usu_int_id' => '',
        'cer_char_certificacao' => '',
        'cer_char_instituicao' => '',
        'cer_year_ano_obtencao' => ''
    );
    return $usuario_model;
}

function usuario_model() : array {
    $usuario_model = array(
        'usu_int_id' => '',
        'usu_char_email' => '',
        'usu_int_senha' => '' . rand(1000, 9999),
        'usu_date_ultimo_login' => date('Y-m-d')
    );
    return $usuario_model;
}

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
