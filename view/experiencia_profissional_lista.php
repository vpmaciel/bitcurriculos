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
echo $TR . $TH . 'Experiência Profissional' . $TH_ . $TR_;

$experiencia_profissional_model['usu_id'] = $_SESSION['usu_id'];
$condicao = $experiencia_profissional_model['usu_id'];
$experiencia_profissional_json = json_decode(selecionar('experiencia_profissional', $experiencia_profissional_model));
echo $TR . $TD . '<a href="experiencia_profissional.php">Cadastrar Experiência Profissional</a><br>' . $TD_ . $TR_; 
echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_;

foreach($experiencia_profissional_json as $registro) {
	$experiencia_profissional_model = array();
	$experiencia_profissional_model['exp_pro_id'] = $registro->exp_pro_id;
	$experiencia_profissional_model['exp_pro_empresa'] = $registro->exp_pro_empresa;
	$experiencia_profissional_model['exp_pro_cargo'] = $registro->exp_pro_cargo;
	$experiencia_profissional_model['exp_pro_data_admissao'] = $registro->exp_pro_data_admissao;
	$experiencia_profissional_model['exp_pro_data_saida'] = $registro->exp_pro_data_saida;
	$experiencia_profissional_model['exp_pro_funcoes'] = $registro->exp_pro_funcoes;
	
	$str = '';
	foreach ($experiencia_profissional_model as $k=>$v){ 
		$str .= "experiencia_profissional_model[$k]" . "=" . $v . "&";                        
	}

	echo $TR . $TD . $LABEL . 'Empresa: ' . $experiencia_profissional_model['exp_pro_empresa'] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Cargo: ' . $experiencia_profissional_model['exp_pro_cargo'] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Data de admissão: ' . $experiencia_profissional_model['exp_pro_data_admissao'] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Data de saída: ' . $experiencia_profissional_model['exp_pro_data_saida'] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Funções: ' . $experiencia_profissional_model['exp_pro_funcoes'] . $LABEL_ . $TD_ . $TR_; 	
	echo $TR . $TD . '<a href="../view/experiencia_profissional.php?' . $str . '">Editar</a>' . $TD_ . $TR_; 
	echo $TR . $TD . '<a href="../controller/experiencia_profissional.php?acao=excluir&' . $str . '">Excluir</a>' . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 	
}

echo $TABLE_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;