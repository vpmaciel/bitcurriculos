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
echo $H1 . 'HABILIDADE' . $H1_;

$FORM = '<form action="../controller/habilidade.php" method="get">';

echo $TABLE;

$habilidade_model['usu_int_id'] = $_SESSION['usu_int_id'];
$condicao = $habilidade_model['usu_int_id'];
$habilidade_json = json_decode(selecionar('habilidade', $habilidade_model));
echo $TR . $TD . '<a href="habilidade.php">Cadastrar Habilidade</a><br>' . $TD_ . $TR_; 
echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_;

foreach($habilidade_json as $registro) {
	$habilidade_model = array();
	$habilidade_model['hab_int_id'] = $registro->hab_int_id ;
	$habilidade_model['hab_char_habilidade'] = $registro->hab_char_habilidade;
	$habilidade_model['hab_int_nivel_conhecimento'] = $registro->hab_int_nivel_conhecimento;

	$str = '';
	foreach ($habilidade_model as $k=>$v){ 
		$str .= "habilidade_model[$k]" . "=" . $v . "&";                        
	}

	echo $TR . $TD . $LABEL . 'Habilidade: ' . $habilidade_model['hab_char_habilidade'] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Nível: ' . $array_pretensao_salarial[$habilidade_model['hab_int_nivel_conhecimento']] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . '<a href="../view/habilidade.php?' . $str . '">Editar</a>' . $TD_ . $TR_; 
	echo $TR . $TD . '<a href="../controller/habilidade.php?acao=excluir&' . $str . '">Excluir</a>' . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 	
}

echo $TABLE_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;