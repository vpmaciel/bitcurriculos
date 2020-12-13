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

    $objetivo_profissional_model = array(
    'id_int' => '',
    'usuario_id_pessoa_int' => '',
    'cargo_char' => '',
    'pretensao_salarial_int' => '',
    'contrato_int' => ''
    );

    $idioma_model  = array(
    'id_int' => '',
    'usuario_id_pessoa_int' => '',
    'idioma_int' => '',
    'nivel_conhecimento_int' => ''
    );

    $habilidade_model = array(
    'id_int' => '',
    'usuario_id_pessoa_int' => '',
    'conhecimento_char' => '',
    'nivel_conhecimento_int' => ''
    );

    $experiencia_profissional_model = array(
    'id_int' => '',
    'usuario_id_pessoa_int' => '',    
    'empresa_char' => '',
    'cargo_char' => '',
    'data_admissao' => '',
    'data_saida' => '',
    'funcoes' => ''
    );

    $curso_model = array(
    'id' => '',
    'usuario' => '',
    'instituicao' => '',
    'nome' => '',
    'ano_inicio' => '',
    'ano_conclusao' => '',
    'situacao' => '',
    'nivel' => ''
    );

    $certificado_model = array(
    'id' => '',
    'usuario' => '',
    'instituicao' => '',
    'curso' => '',
    'carga_horaria' => '',
    'ano_conclusao' => ''
    );
    function usuario_model() : array {

    $usuario_model = array(
    'usu_int_id' => '',
    'usu_char_email' => '',
    'usu_int_senha' => '' . rand(1000, 9999),
    'usu_date_ultimo_login' => date('Y-m-d')
    );

    return $usuario_model;
}