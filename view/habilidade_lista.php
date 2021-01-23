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

$FORM = '<form action="../controller/habilidade.php" method="get">';

echo $TABLE;
echo $TR . $TH . 'Habilidade' . $TH_ . $TR_;

$habilidade_model['usu_id'] = $_SESSION['usu_id'];
$condicao = $habilidade_model['usu_id'];
$habilidade_json = json_decode(selecionar('habilidade', $habilidade_model));
echo $TR . $TD . '<a href="habilidade.php">Cadastrar Habilidade</a><br>' . $TD_ . $TR_; 
echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_;

foreach($habilidade_json as $registro) {
	$habilidade_model = array();
	$habilidade_model['hab_id'] = $registro->hab_id ;
	$habilidade_model['hab_habilidade'] = $registro->hab_habilidade;
	$habilidade_model['hab_nivel_conhecimento'] = $registro->hab_nivel_conhecimento;

	$str = '';
	foreach ($habilidade_model as $k=>$v){ 
		$str .= "habilidade_model[$k]" . "=" . $v . "&";                        
	}

	echo $TR . $TD . $LABEL . 'Habilidade: ' . $habilidade_model['hab_habilidade'] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Nível: ' . $array_nivel_conhecimento[$habilidade_model['hab_nivel_conhecimento']] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . '<a href="../view/habilidade.php?' . $str . '">Editar</a>' . $TD_ . $TR_; 
	echo $TR . $TD . '<a href="../controller/habilidade.php?acao=excluir&' . $str . ' " onclick="return confirmar();">Excluir</a>' . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 	
}

echo $TABLE_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;