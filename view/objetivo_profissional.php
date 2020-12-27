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
echo $H1 . 'OBJETIVO PROFISSIONAL' . $H1_;

$FORM = '<form action="../controller/objetivoprofissional.php" method="get">';

if (isset($_GET['curso_model'])) {
	$curso_model_get = $_GET['curso_model'];
}

echo $TABLE;

$curso_model['cur_int_id'] = isset($_GET['curso_model']) ? $curso_model_get['cur_int_id'] : '';
$INPUT = '<input type="hidden" name="cur_int_id"  value="' . $curso_model['cur_int_id'] .'">';
echo $INPUT;

$curso['cur_char_nome'] = isset($_GET['curso_model']) ? $curso_model_get['cur_char_nome'] : '';
$INPUT = '<input type="hidden" name="exp_prof_int_id"  value="' . $experiencia_profissional_model['exp_prof_int_id'] .'">';
echo $INPUT;

echo $TR . $TD . $LABEL . 'Cargo' . $LABEL_ . $TD_ . $TR_;
$pessoa['nome'] = isset($_POST['nome'])?$_POST['nome']:'';
$CARGO = '<input type="text" name="nome" required size="70" minlength="10" maxlength="50" value="' . $pessoa['nome'] .'">';
echo $TR. $TD . $CARGO . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Pretensão salarial' . $LABEL_ . $TD_ . $TR_;
echo $TR. $TD;
$SELECT = '<select name="$pretensao_salario">';
echo $SELECT;
foreach ($array_pretensao_salarial as $indice => $pretensao_salario) {	
	if ($indice == 0) {
		continue;
	}
	echo ($pretensao_salario == $pessoa['$pretensao_salario'])	? "<option value=$indice selected>$pretensao_salario</option>" : "<option value=$indice>$pretensao_salario</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Contrato' . $LABEL_ . $TD_ . $TR_;
echo $TR. $TD;
$SELECT = '<select name="contrato">';
echo $SELECT;
foreach ($array_contrato as $indice => $contrato) {	
	if ($indice == 0) {
		continue;
	}
	echo ($contrato == $pessoa['contrato'])	? "<option value=$indice selected>$contrato</option>" : "<option value=$indice>$contrato</option>";
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