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

$FORM = '<form action="../controller/objetivo_profissional.php" method="get">';

echo $TABLE;

$objetivo_profissional_model['usu_int_id'] = $_SESSION['usu_int_id'];
$condicao = $objetivo_profissional_model['usu_int_id'];
$objetivo_profissional_json = json_decode(selecionar('objetivo_profissional', $objetivo_profissional_model));
echo $TR . $TD . '<a href="objetivo_profissional.php">Cadastrar Curso</a><br>' . $TD_ . $TR_; 
echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_;

foreach($objetivo_profissional_json as $registro) {
	$objetivo_profissional_model = array();
	$objetivo_profissional_model['obj_pro_int_id '] = $registro->obj_pro_int_id ;
	$objetivo_profissional_model['obj_pro_char_cargo'] = $registro->obj_pro_char_cargo;
	$objetivo_profissional_model['obj_pro_int_pretensao_salarial'] = $registro->obj_pro_int_pretensao_salarial;
	$objetivo_profissional_model['obj_pro_int_contrato'] = $registro->obj_pro_int_contrato;
	$str = '';
	foreach ($objetivo_profissional_model as $k=>$v){ 
		$str .= "objetivo_profissional_model[$k]" . "=" . $v . "&";                        
	}

	echo $TR . $TD . $LABEL . 'Cargo: ' . $objetivo_profissional_model['obj_pro_char_cargo'] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Pretensão salarial: ' . $objetivo_profissional_model['obj_pro_int_pretensao_salarial'] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Contrato: ' . $objetivo_profissional_model['obj_pro_int_contrato'] . $LABEL_ . $TD_ . $TR_;  
	echo $TR . $TD . '<a href="../view/objetivo_profissional.php?' . $str . '">Editar</a>' . $TD_ . $TR_; 
	echo $TR . $TD . '<a href="../controller/objetivo_profissional.php?acao=excluir&' . $str . '">Excluir</a>' . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 	
}

echo $TABLE_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;