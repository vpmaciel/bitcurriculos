<?php
session_start();

if(!isset($_SESSION['usu_int_id'])) {
	header('location:..\view\erro.php?e=UNL');
}
require_once '../lib/biblioteca.php';
require_once '../model/model.php';
require_once '../sql/sql.php';
echo $DOCTYPE;
echo $HTML;
echo $HEAD;
require_once 'cabecalho.php';
echo $HEAD_;
echo $BODY;

require_once 'menu.php';

echo $DIV_MAIN;
echo $H1 . 'OBJETIVO PROFISSIONAL' . $H1_;

$FORM = '<form action="../controller/publica_vaga.php" method="get">';

echo $TABLE;

$publica_vaga_model['usu_int_id'] = $_SESSION['usu_int_id'];
$condicao = $publica_vaga_model['usu_int_id'];
$publica_vaga_json = json_decode(selecionar('publica_vaga', $publica_vaga_model));
echo $TR . $TD . '<a href="publica_vaga.php">Cadastrar Curso</a><br>' . $TD_ . $TR_; 
echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_;

foreach($publica_vaga_json as $registro) {
	$publica_vaga_model = array();
	$publica_vaga_model['pub_vag_int_id'] = $registro->pub_vag_int_id;
	$publica_vaga_model['pub_vag_date_data'] = $registro->pub_vag_date_data;
	$publica_vaga_model['pub_vag_char_empresa'] = $registro->pub_vag_char_empresa;
	$publica_vaga_model['pub_vag_char_cargo'] = $registro->pub_vag_char_cargo;
	$publica_vaga_model['pub_vag_char_requisitos'] = $registro->pub_vag_char_requisitos;
	$publica_vaga_model['pub_vag_char_funcoes'] = $registro->pub_vag_char_funcoes ;
	$publica_vaga_model['pub_vag_char_beneficios'] = $registro->pub_vag_char_beneficios;
	$publica_vaga_model['pub_vag_char_data_publicacao'] = $registro->pub_vag_char_data_publicacao;
	$publica_vaga_model['pub_vag_int_vagas'] = $registro->pub_vag_int_vagas;
	$publica_vaga_model['pub_vag_int_contrato'] = $registro->pub_vag_int_contrato ;
	$publica_vaga_model['pub_vag_dec_salario_mensal'] = $registro->pub_vag_dec_salario_mensal;
	$publica_vaga_model['pub_vag_int_estado'] = $registro->pub_vag_int_estado;
	$publica_vaga_model['pub_vag_int_cidade'] = $registro->pub_vag_int_cidade;
	
	$str = '';
	foreach ($publica_vaga_model as $k=>$v){ 
		$str .= "publica_vaga_model[$k]" . "=" . $v . "&";                        
	}

	echo $TR . $TD . $LABEL . 'Data de Publicação: ' . $publica_vaga_model['obj_pro_char_cargo'] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Empresa: ' . $array_pretensao_salarial[$publica_vaga_model['obj_pro_int_pretensao_salarial']] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Cargo: ' . $array_contrato[$publica_vaga_model['obj_pro_int_contrato']] . $LABEL_ . $TD_ . $TR_;  
	echo $TR . $TD . $LABEL . 'Requisitos: ' . $publica_vaga_model['obj_pro_char_cargo'] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Funções: ' . $array_pretensao_salarial[$publica_vaga_model['obj_pro_int_pretensao_salarial']] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Benefícios: ' . $array_contrato[$publica_vaga_model['obj_pro_int_contrato']] . $LABEL_ . $TD_ . $TR_;  
	echo $TR . $TD . $LABEL . 'Vagas: ' . $publica_vaga_model['obj_pro_char_cargo'] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Contrato: ' . $array_pretensao_salarial[$publica_vaga_model['obj_pro_int_pretensao_salarial']] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Contrato: ' . $array_contrato[$publica_vaga_model['obj_pro_int_contrato']] . $LABEL_ . $TD_ . $TR_;  
	echo $TR . $TD . $LABEL . 'Cargo: ' . $publica_vaga_model['obj_pro_char_cargo'] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Pretensão salarial: ' . $array_pretensao_salarial[$publica_vaga_model['obj_pro_int_pretensao_salarial']] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Contrato: ' . $array_contrato[$publica_vaga_model['obj_pro_int_contrato']] . $LABEL_ . $TD_ . $TR_;  
	echo $TR . $TD . '<a href="../view/publica_vaga.php?' . $str . '">Editar</a>' . $TD_ . $TR_; 
	echo $TR . $TD . '<a href="../controller/publica_vaga.php?acao=excluir&' . $str . '">Excluir</a>' . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 	
}

echo $TABLE_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;