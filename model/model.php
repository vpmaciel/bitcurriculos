<?php
$pessoa_model = array(
    'usuario_int' => '',
    'nome_char' => '',
    'data_nascimento_date' => '',
    'celular_numero_char' => '',
    'sexo_int' => '',
    'escolaridade_int' => '',
    'estado_civil_int' => '',
    'nacionalidade_int' => '',
    'possui_filhos_int' => '',
    'possui_deficiencia_int' => '',
    'pais_int' => '',
    'estado_int' => '',
    'cidade_int' => '',
    'cnh_int' => '',
    'ultimo_salario_mensal_int' => '',
    'empregado_atualmente_bit' => '',
    'procurando_emprego_atualmente_bit' => '',
    'disponivel_viagens_bit' => '',
    'trabalha_outras_cidades_bit' => '',
    'trabalha_exterior_bit' => '',
    'trabalha_home_office_bit' => '',
    'possui_carro_bit' => '',
    'possui_moto_bit' => ''
);

$publicacao_vaga_model = array(
'id_int' => '',
'usuario_int' => '',
'data_publicacao_date' => '',
'cargo_char' => '',
'razao_social_char' => '',
'data_publicacao_date' => '',
'vagas_int' => '',
'contrato_int' => '',
'salario_int' => '',
'funcoes_char' => '',
'beneficios_char' => '',
'estado_int' => '',
'cidade_int' => ''
);

$candidato_vaga_model = array(
'publicacao_vaga' => '',
'usuario' => '',
'empresa' => ''
);

$objetivo_profissional_model = array(
'id' => '',
'cargo' => '',
'pretensao_salarial' => '',
'nivel_hierarquico' => '',
'area_interesse' => '',
'contrato' => ''
);

$idioma_model  = array(
'id' => '',
'usuario' => '',
'idioma' => '',
'nivel_conhecimento' => ''
);

$habilidade_model = array(
'id' => '',
'usuario' => '',
'conhecimento' => '',
'nivel_conhecimento' => ''
);

$experiencia_profissional_model = array(
'id' => '',
'empresa' => '',
'cargo' => '',
'data_admissao' => '',
'data_saida' => '',
'nivel_hierarquico' => '',
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
'modalidade' => '',
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

$usuario_model = array(
'id' => '',
'email' => '',
'senha' => ''
);