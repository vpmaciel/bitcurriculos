<?php
session_start();

if(!isset($_SESSION['usu_int_id'])) {
	header('location:..\view\erro.php?e=UNL');
}
require_once '../lib/biblioteca.php';
require_once '../model/model.php';
echo $DOCTYPE;
echo $HTML;
echo $HEAD;
require_once 'cabecalho.php';
echo $HEAD_;
echo $BODY;
require_once 'menu.php';
echo $DIV_MAIN;

$FORM = '<form action="../controller/habilidade.php" method="get">';
echo $FORM;
if (isset($_GET['habilidade_model'])) {
	$habilidade_model_get = $_GET['habilidade_model'];
}

echo $TABLE;
echo $TR . $TH . 'HABILIDADE' . $TH_ . $TR_;

$habilidade_model['hab_int_id'] = isset($_GET['habilidade_model']) ? $habilidade_model_get['hab_int_id'] : '';
$INPUT = '<input type="hidden" name="hab_int_id"  value="' . $habilidade_model['hab_int_id'] .'">';
echo $INPUT;

echo $TR . $TD . $LABEL . 'Habilidade' . $LABEL_ . $TD_ . $TR_; 
$habilidade_model['hab_char_habilidade'] = isset($_GET['habilidade_model']) ? $habilidade_model_get['hab_char_habilidade'] : '';
$INPUT = '<input type="text" name="hab_char_habilidade" required maxlength="50" value="' . $habilidade_model['hab_char_habilidade'] .'">';
echo $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Nível' . $LABEL_ . $TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="hab_int_nivel_conhecimento">';
echo $SELECT;
foreach ($array_nivel_conhecimento as $indice => $hab_int_nivel_conhecimento) {	
	echo ($indice == $habilidade_model_get['hab_int_nivel_conhecimento']) ? "<option value=$indice selected>$hab_int_nivel_conhecimento</option>" : "<option value=$indice>$hab_int_nivel_conhecimento</option>";
}
echo $SELECT_ . $TD_ . $TR_;

$SUBMIT = '<input type="submit" value="SALVAR" onclick=\'return confirmar();\'>';
echo $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;