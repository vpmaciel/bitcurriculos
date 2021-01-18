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

$FORM = '<form action="../controller/idioma.php" method="get">';

echo $TABLE;
echo $TR . $TH . 'Idioma' . $TH_ . $TR_;

$idioma_model['usu_id'] = $_SESSION['usu_id'];
$condicao = $idioma_model['usu_id'];
$idioma_json = json_decode(selecionar('idioma', $idioma_model));
echo $TR . $TD . '<a href="idioma.php">Cadastrar Idioma</a><br>' . $TD_ . $TR_; 
echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_;

foreach($idioma_json as $registro) {
	$idioma_model = array();
	$idioma_model['idi_id'] = $registro->idi_id ;	
	$idioma_model['idi_idioma'] = $registro->idi_idioma;
	$idioma_model['idi_nivel_conhecimento'] = $registro->idi_nivel_conhecimento;
	$str = '';
	foreach ($idioma_model as $k=>$v){ 
		$str .= "idioma_model[$k]" . "=" . $v . "&";                        
	}

	echo $TR . $TD . $LABEL . 'Idioma: ' . $array_idioma[$idioma_model['idi_idioma']] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Nível de conhecimento: ' . $array_nivel_conhecimento_idioma[$idioma_model['idi_nivel_conhecimento']] . $LABEL_ . $TD_ . $TR_;  
	echo $TR . $TD . '<a href="../view/idioma.php?' . $str . '">Editar</a>' . $TD_ . $TR_; 
	echo $TR . $TD . '<a href="../controller/idioma.php?acao=excluir&' . $str . '">Excluir</a>' . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 	
}

echo $TABLE_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;