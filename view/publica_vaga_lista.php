<?php
session_start();

if(!isset($_SESSION['usu_id'])) {
	header('location:..\view\erro.php?e=UNL');
	exit;
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

echo $DIV_MAIN;

require_once 'menu.php';

echo $TABLE;
echo $TR . $TH . 'Publicação de Vaga'  . $TH_ . $TR_; 

$publica_vaga_model['usu_id'] = $_SESSION['usu_id'];
$condicao = $publica_vaga_model['usu_id'];
$publica_vaga_json = json_decode(selecionar('publica_vaga', $publica_vaga_model));
echo $TR . $TD . '<a href="publica_vaga.php">Cadastrar Vaga </a><br>' . $TD_ . $TR_; 
echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_;

foreach($publica_vaga_json as $registro) {
	$publica_vaga_model = array();
	$publica_vaga_model['pub_vag_id'] = $registro->pub_vag_id;
	$publica_vaga_model['pub_vag_empresa'] = $registro->pub_vag_empresa;
	$publica_vaga_model['pub_vag_cargo'] = $registro->pub_vag_cargo;
	$publica_vaga_model['pub_vag_requisitos'] = $registro->pub_vag_requisitos;
	$publica_vaga_model['pub_vag_funcoes'] = $registro->pub_vag_funcoes ;
	$publica_vaga_model['pub_vag_beneficios'] = $registro->pub_vag_beneficios;
	$publica_vaga_model['pub_vag_data_publicacao'] = $registro->pub_vag_data_publicacao;
	$publica_vaga_model['pub_vag_vagas'] = $registro->pub_vag_vagas;
	$publica_vaga_model['pub_vag_contrato'] = $registro->pub_vag_contrato ;
	$publica_vaga_model['pub_vag_salario_mensal'] = $registro->pub_vag_salario_mensal;
	$publica_vaga_model['pub_vag_estado'] = $registro->pub_vag_estado;
	$publica_vaga_model['pub_vag_cidade'] = $registro->pub_vag_cidade;
	
	$str = '';
	foreach ($publica_vaga_model as $k=>$v){ 
		$str .= "publica_vaga_model[$k]" . "=" . $v . "&";                        
	}

	echo $TR . $TD . $LABEL . 'Data de Publicação: ' . $publica_vaga_model['pub_vag_data_publicacao'] . $LABEL_ . $TD_ . $TR_;
	echo $TR . $TD . $LABEL . 'Empresa: ' . $publica_vaga_model['pub_vag_empresa'] . $LABEL_ . $TD_ . $TR_;
	echo $TR . $TD . $LABEL . 'Cargo: ' . $publica_vaga_model['pub_vag_cargo'] . $LABEL_ . $TD_ . $TR_;
	echo $TR . $TD . $LABEL . 'Requisitos: ' . $publica_vaga_model['pub_vag_requisitos'] . $LABEL_ . $TD_ . $TR_;
	echo $TR . $TD . $LABEL . 'Funções: ' . $publica_vaga_model['pub_vag_funcoes'] . $LABEL_ . $TD_ . $TR_;
	echo $TR . $TD . $LABEL . 'Benefícios: ' . $publica_vaga_model['pub_vag_beneficios'] . $LABEL_ . $TD_ . $TR_;
	echo $TR . $TD . $LABEL . 'Vagas: ' . $publica_vaga_model['pub_vag_vagas'] . $LABEL_ . $TD_ . $TR_;
	echo $TR . $TD . $LABEL . 'Contrato: ' . $array_contrato[$publica_vaga_model['pub_vag_contrato']] . $LABEL_ . $TD_ . $TR_;
	echo $TR . $TD . $LABEL . 'Salário mensal (R$): ' . $publica_vaga_model['pub_vag_salario_mensal'] . $LABEL_ . $TD_ . $TR_;
	echo $TR . $TD . $LABEL . 'Estado: ' . $array_estado[$publica_vaga_model['pub_vag_estado']] . $LABEL_ . $TD_ . $TR_;
	echo $TR . $TD . $LABEL . 'Cidade: ' . $array_cidade[$publica_vaga_model['pub_vag_cidade']] . $LABEL_ . $TD_ . $TR_;
	echo $TR . $TD . '<a href="../view/publica_vaga.php?' . $str . '">Editar</a>' . $TD_ . $TR_; 
	echo $TR . $TD . '<a href="../controller/publica_vaga.php?acao=excluir&' . $str . '">Excluir</a>' . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 	
}

echo $TABLE_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;