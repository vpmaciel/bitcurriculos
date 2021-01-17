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

$FORM = '<form action="../controller/idioma.php" method="get">';

echo $FORM;

if (isset($_GET['idioma_model'])) {
	$idioma_model_get = $_GET['idioma_model'];
}

echo $TABLE;
echo $TR . $TH . 'IDIOMA' . $TH_ . $TR_;

$idioma_model['idi_int_id'] = isset($_GET['idioma_model']) ? $idioma_model_get['idi_int_id'] : '';
$INPUT = '<input type="hidden" name="idi_int_id"  value="' . $idioma_model['idi_int_id'] .'">';
echo $INPUT;

echo $TR . $TD . $LABEL . 'Idioma' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="idi_int_idioma">';
echo $SELECT;
foreach ($array_idioma as $indice => $idi_int_idioma) {	
	echo ($indice == $idioma_model_get['idi_int_idioma']) ? "<option value=$indice selected>$idi_int_idioma</option>" : "<option value=$indice>$idi_int_idioma</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Nível de conhecimento' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="idi_int_nivel_conhecimento">';
echo $SELECT;
foreach ($array_nivel_conhecimento_idioma as $indice => $idi_int_nivel_conhecimento) {		
	echo ($indice == $idioma_model_get['idi_int_nivel_conhecimento']) ? "<option value=$indice selected>$idi_int_nivel_conhecimento</option>" : "<option value=$indice>$idi_int_nivel_conhecimento</option>";
}
echo $SELECT_ . $TD_ . $TR_;

$SUBMIT = '<input type="submit" value="SALVAR" onclick=\'return confirmar();\'>';
echo $TR . $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;