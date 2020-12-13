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
echo $H1 . 'PUBLICAR VAGA' . $H1_;

$FORM = '<form action="../controller/curso.php" method="post">';

echo $FORM;

echo $TABLE;

echo $TR . $TD . $LABEL . 'Empresa' . $LABEL_ . $TD_ . $TR_; 
$pessoa['empresa'] = isset($_POST['empresa'])?$_POST['empresa']:'';
$INPUT = '<input type="text" name="empresa" required size="70" minlength="1" maxlength="50" value="' . $pessoa['empresa'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Cargo' . $LABEL_ . $TD_ . $TR_; 
$pessoa['char_cargo'] = isset($_POST['char_cargo'])?$_POST['char_cargo']:'';
$INPUT = '<input type="text" name="char_cargo" required size="70" minlength="1" maxlength="50" value="' . $pessoa['char_cargo'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Requisitos' . $LABEL_ . $TD_ . $TR_; 
$pessoa['char_requisitos'] = isset($_POST['char_requisitos'])?$_POST['char_requisitos']:'';
$TEXTAREA = '<textarea id="char_requisitos" name="char_requisitos" rows="2" cols="50" maxlength="500">' . $pessoa['char_requisitos'] .'</textarea>';
echo $TR. $TD . $TEXTAREA . $TD_ . $TR_; 

echo $TR . $TD . $LABEL . 'Funções' . $LABEL_ . $TD_ . $TR_; 
$pessoa['char_funcoes'] = isset($_POST['char_funcoes'])?$_POST['char_funcoes']:'';
$TEXTAREA = '<textarea id="char_funcoes" name="char_funcoes" rows="2" cols="50" maxlength="500">' . $pessoa['char_funcoes'] .'</textarea>';
echo $TR. $TD . $TEXTAREA . $TD_ . $TR_; 

echo $TR . $TD . $LABEL . 'Benefícios' . $LABEL_ . $TD_ . $TR_; 
$pessoa['char_beneficios'] = isset($_POST['char_beneficios'])?$_POST['char_beneficios']:'';
$TEXTAREA = '<textarea id="char_beneficios" name="char_beneficios" rows="2" cols="50" maxlength="500">' . $pessoa['char_beneficios'] .'</textarea>';
echo $TR. $TD . $TEXTAREA . $TD_ . $TR_; 

echo $TR . $TD . $LABEL . 'Data de publicacao' . $LABEL_ . $TD_ . $TR_; 
$pessoa['date_data_publicacao'] = isset($_POST['date_data_publicacao'])?$_POST['date_data_publicacao']:'';
$INPUT = '<input type="text" name="date_data_publicacao" size="70" onkeypress="$(this).mask(\'00-00-0000\');" minlength="4" maxlength="4" value="' . $pessoa['date_data_publicacao'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_; 

echo $TR . $TD . $LABEL . 'Vagas' . $LABEL_ . $TD_ . $TR_; 
$pessoa['int_vagas'] = isset($_POST['int_vagas'])?$_POST['int_vagas']:'';
$INPUT = '<input type="number" name="int_vagas" required size="70" minlength="1" maxlength="40" min="1" max="1000000" value="' . $pessoa['int_vagas'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Contrato' . $LABEL_ . $TD_ . $TR_;	 
echo $TR. $TD;
$SELECT = '<select name="contrato">';
echo $SELECT;
foreach ($array_contrato as $indice => $int_contrato) {	
	echo ($int_contrato == $pessoa['int_contrato'])	? "<option value=$indice selected>$int_contrato</option>" : "<option value=$indice>$int_contrato</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Salário mensal (R$)' . $LABEL_ . $TD_ . $TR_; 
$pessoa['char_cargo'] = isset($_POST['char_cargo'])?$_POST['char_cargo']:'';
$INPUT = '<input type="text" name="char_cargo" required size="70" minlength="10" maxlength="50" value="' . $pessoa['char_cargo'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Estado' . $LABEL_ . $TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="int_estado">';
echo $SELECT;
foreach ($array_estado as $indice => $int_estado) {	
	if ($indice == 0) {
		continue;
	}
	echo ($int_estado == $pessoa['int_estado'])	? "<option value=$indice selected>$int_estado</option>" : "<option value=$indice>$int_estado</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Cidade' . $LABEL_ . $TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="int_int_cidade">';
echo $SELECT;
foreach ($array_cidade as $indice => $int_cidade) {	
	if ($indice == 0) {
		continue;
	}
	echo ($int_cidade == $pessoa['int_cidade'])	? "<option value=$indice selected>$int_cidade</option>" : "<option value=$indice>$int_cidade</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

$SUBMIT = '<input type="submit" value="Salvar" onclick=\'return confirmar();\'>';
echo $TR. $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;