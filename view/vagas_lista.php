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

echo $TABLE;
echo $TR . $TH . 'VAGAS DISPONÍVEIS'  . $TH_ . $TR_; 

$publica_vaga_model['pub_vag_char_cargo'] = remover_acentos($_GET['pub_vag_char_cargo']);
$publica_vaga_json = json_decode(procurar('publica_vaga', 'pub_vag_char_cargo', $publica_vaga_model['pub_vag_char_cargo']));
echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_;

foreach($publica_vaga_json as $registro) {
	$publica_vaga_model = array();
	$publica_vaga_model['pub_vag_int_id'] = $registro->pub_vag_int_id;
	$publica_vaga_model['pub_vag_char_empresa'] = $registro->pub_vag_char_empresa;
	$publica_vaga_model['pub_vag_char_cargo'] = $registro->pub_vag_char_cargo;
	$publica_vaga_model['pub_vag_char_requisitos'] = $registro->pub_vag_char_requisitos;
	$publica_vaga_model['pub_vag_char_funcoes'] = $registro->pub_vag_char_funcoes ;
	$publica_vaga_model['pub_vag_char_beneficios'] = $registro->pub_vag_char_beneficios;
	$publica_vaga_model['pub_vag_char_data_publicacao'] = $registro->pub_vag_char_data_publicacao;
	$publica_vaga_model['pub_vag_int_vagas'] = $registro->pub_vag_int_vagas;
	$publica_vaga_model['pub_vag_int_contrato'] = $registro->pub_vag_int_contrato ;
	$publica_vaga_model['pub_vag_int_salario_mensal'] = $registro->pub_vag_int_salario_mensal;
	$publica_vaga_model['pub_vag_int_estado'] = $registro->pub_vag_int_estado;
	$publica_vaga_model['pub_vag_int_cidade'] = $registro->pub_vag_int_cidade;
	
	$str = '';
	foreach ($publica_vaga_model as $k=>$v){ 
		$str .= "publica_vaga_model[$k]" . "=" . $v . "&";                        
	}

	echo $TR . $TD . $LABEL . 'Data de Publicação: ' . $publica_vaga_model['pub_vag_char_data_publicacao'] . $LABEL_ . $TD_ . $TR_;
	echo $TR . $TD . $LABEL . 'Empresa: ' . $publica_vaga_model['pub_vag_char_empresa'] . $LABEL_ . $TD_ . $TR_;
	echo $TR . $TD . $LABEL . 'Cargo: ' . $publica_vaga_model['pub_vag_char_cargo'] . $LABEL_ . $TD_ . $TR_;
	echo $TR . $TD . $LABEL . 'Requisitos: ' . $publica_vaga_model['pub_vag_char_requisitos'] . $LABEL_ . $TD_ . $TR_;
	echo $TR . $TD . $LABEL . 'Funções: ' . $publica_vaga_model['pub_vag_char_funcoes'] . $LABEL_ . $TD_ . $TR_;
	echo $TR . $TD . $LABEL . 'Benefícios: ' . $publica_vaga_model['pub_vag_char_beneficios'] . $LABEL_ . $TD_ . $TR_;
	echo $TR . $TD . $LABEL . 'Vagas: ' . $publica_vaga_model['pub_vag_int_vagas'] . $LABEL_ . $TD_ . $TR_;
	echo $TR . $TD . $LABEL . 'Contrato: ' . $array_contrato[$publica_vaga_model['pub_vag_int_contrato']] . $LABEL_ . $TD_ . $TR_;
	echo $TR . $TD . $LABEL . 'Salário mensal (R$): ' . $publica_vaga_model['pub_vag_int_salario_mensal'] . $LABEL_ . $TD_ . $TR_;
	echo $TR . $TD . $LABEL . 'Estado: ' . $array_estado[$publica_vaga_model['pub_vag_int_estado']] . $LABEL_ . $TD_ . $TR_;
	echo $TR . $TD . $LABEL . 'Cidade: ' . $array_cidade[$publica_vaga_model['pub_vag_int_cidade']] . $LABEL_ . $TD_ . $TR_;
	echo $TR . $TD . '<a href="../view/publica_vaga.php?' . $str . '">Enviar currículo</a>' . $TD_ . $TR_; 
		echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 	
}

echo $TABLE_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;