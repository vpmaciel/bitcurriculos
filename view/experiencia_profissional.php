<?php
session_start();

if(!isset($_SESSION['usu_id'])) {
	header('location:..\view\erro.php?e=UNL');
	exit;
}
require_once '../lib/biblioteca.php';
require_once '../model/model.php';
echo $DOCTYPE;
echo $HTML;
echo $HEAD;
require_once 'cabecalho.php';
echo $HEAD_;
echo $BODY;

echo $DIV_MAIN;

require_once 'menu.php';

$FORM = '<form action="../controller/experiencia_profissional.php" method="get">';
if (isset($_GET['experiencia_profissional_model'])) {
	$experiencia_profissional_model_get = $_GET['experiencia_profissional_model'];
}

echo $FORM;

echo $TABLE;
echo $TR . $TH . 'Experiência Profissional' . $TH_ . $TR_;

$experiencia_profissional_model['exp_prof_id'] = isset($_GET['experiencia_profissional_model']) ? $experiencia_profissional_model_get['exp_prof_id'] : '';
$INPUT = '<input type="hidden" name="exp_prof_id"  value="' . $experiencia_profissional_model['exp_prof_id'] .'">';
echo $INPUT;

echo $TR . $TD . $LABEL . 'Empresa' . $LABEL_ . $TD_ . $TR_;
$experiencia_profissional_model['exp_prof_empresa'] = isset($_GET['experiencia_profissional_model']) ? $experiencia_profissional_model_get['exp_prof_empresa'] : '';
$INPUT = '<input type="text" name="exp_prof_empresa" required maxlength="50" value="' . $experiencia_profissional_model['exp_prof_empresa'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Cargo' . $LABEL_ . $TD_ . $TR_;
$experiencia_profissional_model['exp_prof_cargo'] = isset($_GET['experiencia_profissional_model']) ? $experiencia_profissional_model_get['exp_prof_cargo'] : '';
$INPUT = '<input type="text" name="exp_prof_cargo" required maxlength="50" value="' . $experiencia_profissional_model['exp_prof_cargo'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Data de admissão' . $LABEL_ . $TD_ . $TR_;
$experiencia_profissional_model['exp_prof_data_admissao'] = isset($_GET['experiencia_profissional_model']) ? $experiencia_profissional_model_get['exp_prof_data_admissao'] : '';
$INPUT = '<input type="text" name="exp_prof_data_admissao" required maxlength="10" value="' . $experiencia_profissional_model['exp_prof_data_admissao'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Data de saída' . $LABEL_ . $TD_ . $TR_;
$experiencia_profissional_model['exp_prof_data_saida'] = isset($_GET['experiencia_profissional_model']) ? $experiencia_profissional_model_get['exp_prof_data_saida'] : '';
$INPUT = '<input type="text" name="exp_prof_data_saida" maxlength="10" value="' . $experiencia_profissional_model['exp_prof_data_saida'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_; 

echo $TR . $TD . $LABEL . 'Funções' . $LABEL_ . $TD_ . $TR_;
$experiencia_profissional_model['exp_prof_funcoes'] = isset($_GET['experiencia_profissional_model']) ? $experiencia_profissional_model_get['exp_prof_funcoes'] : '';
$TEXTAREA = '<textarea  name="exp_prof_funcoes" maxlength="500" rows="4" cols="50">' . $experiencia_profissional_model['exp_prof_funcoes'] .'</textarea>';
echo $TR. $TD . $TEXTAREA . $TD_ . $TR_; 

$SUBMIT = '<input type="submit" value="SALVAR" onclick=\'return confirmar();\'>';
echo $TR. $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;