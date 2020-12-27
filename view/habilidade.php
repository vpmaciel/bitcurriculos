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
echo $H1 . 'HABILIDADE' . $H1_;

$FORM = '<form action="../controller/habilidade.php" method="post">';
echo $FORM;

if (isset($_GET['objetivo_profissional_model'])) {
	$objetivo_profissional_model_get = $_GET['objetivo_profissional_model'];
}

echo $TABLE;

$objetivo_profissional_model['obj_pro_int_id'] = isset($_GET['objetivo_profissional_model']) ? $objetivo_profissional_model_get['obj_pro_int_id'] : '';
$INPUT = '<input type="hidden" name="obj_pro_int_id"  value="' . $objetivo_profissional_model['obj_pro_int_id'] .'">';
echo $INPUT;

echo $TR . $TD . $LABEL . 'Habilidade' . $LABEL_ . $TD_ . $TR_; 
$pessoa['char_habilidade'] = isset($_POST['char_habilidade'])?$_POST['char_habilidade']:'';
$INPUT = '<input type="text" name="char_habilidade" required size="70" minlength="10" maxlength="50" value="' . $pessoa['char_habilidade'] .'">';
echo $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Nível' . $LABEL_ . $TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="int_nivel_conhecimento">';
echo $SELECT;
foreach ($array_nivel_conhecimento as $indice => $int_nivel_conhecimento) {	
	echo ($indice == $objetivo_profissional_model_get['obj_pro_int_pretensao_salarial']) ? "<option value=$indice selected>$obj_pro_int_pretensao_salarial</option>" : "<option value=$indice>$obj_pro_int_pretensao_salarial</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

$SUBMIT = '<input type="submit" value="Salvar" onclick=\'return confirmar();\'>';
echo $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;