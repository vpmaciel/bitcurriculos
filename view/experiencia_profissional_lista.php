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
echo $H1 . 'CURSO' . $H1_;

$FORM = '<form action="../controller/experiencia_profissional.php" method="get">';

echo $TABLE;

$experiencia_profissional_model['usu_int_id'] = $_SESSION['usu_int_id'];
$condicao = $experiencia_profissional_model['usu_int_id'];
$experiencia_profissional_json = json_decode(selecionar('experiencia_profissional', $experiencia_profissional_model));
echo $TR . $TD . '<a href="experiencia_profissional.php">Cadastrar Experiência Profissional</a><br>' . $TD_ . $TR_; 
echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_;

foreach($experiencia_profissional_json as $registro) {
	$experiencia_profissional_model = array();
	$experiencia_profissional_model['exp_prof_int_id'] = $registro->exp_prof_int_id;
	$experiencia_profissional_model['exp_prof_char_empresa'] = $registro->exp_prof_char_empresa;
	$experiencia_profissional_model['exp_prof_char_cargo'] = $registro->exp_prof_char_cargo;
	$experiencia_profissional_model['exp_prof_date_data_admissao'] = date("d-m-Y", strtotime($registro->exp_prof_date_data_admissao));
	$experiencia_profissional_model['exp_prof_date_data_saida'] = date("d-m-Y", strtotime($registro->exp_prof_date_data_saida));
	$experiencia_profissional_model['exp_prof_char_funcoes'] = $registro->exp_prof_char_funcoes;
	
	$str = '';
	foreach ($experiencia_profissional_model as $k=>$v){ 
		$str .= "experiencia_profissional_model[$k]" . "=" . $v . "&";                        
	}

	echo $TR . $TD . $LABEL . 'Empresa: ' . $experiencia_profissional_model['exp_prof_char_empresa'] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Cargo: ' . $experiencia_profissional_model['exp_prof_char_cargo'] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Data de admissão: ' . $experiencia_profissional_model['exp_prof_date_data_admissao'] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Data de saída: ' . $experiencia_profissional_model['exp_prof_date_data_saida'] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Funções: ' . $experiencia_profissional_model['exp_prof_char_funcoes'] . $LABEL_ . $TD_ . $TR_; 	
	echo $TR . $TD . '<a href="../view/experiencia_profissional.php?' . $str . '">Editar</a>' . $TD_ . $TR_; 
	echo $TR . $TD . '<a href="../controller/experiencia_profissional.php?acao=excluir&' . $str . '">Excluir</a>' . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 	
}

echo $TABLE_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;