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

$FORM = '<form action="../controller/experiencia_profissional.php" method="get">';
if (isset($_GET['experiencia_profissional_model'])) {
	$experiencia_profissional_model_get = $_GET['experiencia_profissional_model'];
}

echo $FORM;

echo $TABLE;
echo $TR . $TH . 'EXPERIÊNCIA PROFISSIONAL' . $TH_ . $TR_;

$experiencia_profissional_model['exp_prof_int_id'] = isset($_GET['experiencia_profissional_model']) ? $experiencia_profissional_model_get['exp_prof_int_id'] : '';
$INPUT = '<input type="hidden" name="exp_prof_int_id"  value="' . $experiencia_profissional_model['exp_prof_int_id'] .'">';
echo $INPUT;

echo $TR . $TD . $LABEL . 'Empresa' . $LABEL_ . $TD_ . $TR_;
$experiencia_profissional_model['exp_prof_char_empresa'] = isset($_GET['experiencia_profissional_model']) ? $experiencia_profissional_model_get['exp_prof_char_empresa'] : '';
$INPUT = '<input type="text" name="exp_prof_char_empresa" required size="70" maxlength="50" value="' . $experiencia_profissional_model['exp_prof_char_empresa'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Cargo' . $LABEL_ . $TD_ . $TR_;
$experiencia_profissional_model['exp_prof_char_cargo'] = isset($_GET['experiencia_profissional_model']) ? $experiencia_profissional_model_get['exp_prof_char_cargo'] : '';
$INPUT = '<input type="text" name="exp_prof_char_cargo" required size="70" maxlength="50" value="' . $experiencia_profissional_model['exp_prof_char_cargo'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Data de admissão' . $LABEL_ . $TD_ . $TR_;
$experiencia_profissional_model['exp_prof_char_data_admissao'] = isset($_GET['experiencia_profissional_model']) ? $experiencia_profissional_model_get['exp_prof_char_data_admissao'] : '';
$INPUT = '<input type="text" name="exp_prof_char_data_admissao" required size="70" maxlength="10" value="' . $experiencia_profissional_model['exp_prof_char_data_admissao'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Data de saída' . $LABEL_ . $TD_ . $TR_;
$experiencia_profissional_model['exp_prof_char_data_saida'] = isset($_GET['experiencia_profissional_model']) ? $experiencia_profissional_model_get['exp_prof_char_data_saida'] : '';
$INPUT = '<input type="text" name="exp_prof_char_data_saida" size="70"  maxlength="10" value="' . $experiencia_profissional_model['exp_prof_char_data_saida'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_; 

echo $TR . $TD . $LABEL . 'Funções' . $LABEL_ . $TD_ . $TR_;
$experiencia_profissional_model['exp_prof_char_funcoes'] = isset($_GET['experiencia_profissional_model']) ? $experiencia_profissional_model_get['exp_prof_char_funcoes'] : '';
$TEXTAREA = '<textarea  name="exp_prof_char_funcoes" maxlength="500" rows="4" cols="50">' . $experiencia_profissional_model['exp_prof_char_funcoes'] .'</textarea>';
echo $TR. $TD . $TEXTAREA . $TD_ . $TR_; 

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_;

$SUBMIT = '<input type="submit" value="Salvar" onclick=\'return confirmar();\'>';
echo $TR. $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;