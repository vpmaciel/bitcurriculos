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

$FORM = '<form action="../controller/objetivo_profissional.php" method="get">';

echo $TABLE;
echo $TR . $TH . 'Objetivo Profissional'  . $TH_ . $TR_; 

$objetivo_profissional_model['usu_id'] = $_SESSION['usu_id'];
$condicao = $objetivo_profissional_model['usu_id'];
$objetivo_profissional_json = json_decode(selecionar('objetivo_profissional', $objetivo_profissional_model));
echo $TR . $TD . '<a href="objetivo_profissional.php">Cadastrar Curso</a><br>' . $TD_ . $TR_; 
echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_;

foreach($objetivo_profissional_json as $registro) {
	$objetivo_profissional_model = array();
	$objetivo_profissional_model['obj_pro_id'] = $registro->obj_pro_id ;
	$objetivo_profissional_model['obj_pro_cargo'] = $registro->obj_pro_cargo;
	$objetivo_profissional_model['obj_pro_pretensao_salarial'] = $registro->obj_pro_pretensao_salarial;
	$objetivo_profissional_model['obj_pro_contrato'] = $registro->obj_pro_contrato;
	$str = '';
	foreach ($objetivo_profissional_model as $k=>$v){ 
		$str .= "objetivo_profissional_model[$k]" . "=" . $v . "&";                        
	}

	echo $TR . $TD . $LABEL . 'Cargo: ' . $objetivo_profissional_model['obj_pro_cargo'] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Pretensão salarial: ' . $array_pretensao_salarial[$objetivo_profissional_model['obj_pro_pretensao_salarial']] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Contrato: ' . $array_contrato[$objetivo_profissional_model['obj_pro_contrato']] . $LABEL_ . $TD_ . $TR_;  
	echo $TR . $TD . '<a href="../view/objetivo_profissional.php?' . $str . '">Editar</a>' . $TD_ . $TR_; 
	echo $TR . $TD . '<a href="../controller/objetivo_profissional.php?acao=excluir&' . $str . '">Excluir</a>' . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 	
}

echo $TABLE_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;