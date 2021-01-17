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

$FORM = '<form action="../controller/certificacao.php" method="get">';

echo $FORM;
if (isset($_GET['certificacao_model'])) {
	$certificacao_model_get = $_GET['certificacao_model'];
}

echo $TABLE;
echo $TR . $TH . 'CERTIFICAÇÃO' . $TH_ . $TR_;

$certificacao_model['cer_int_id'] = isset($_GET['certificacao_model']) ? $certificacao_model_get['cer_int_id'] : '';
$INPUT = '<input type="hidden" name="cer_int_id"  value="' . $certificacao_model['cer_int_id'] .'">';
echo $INPUT;

echo $TR . $TD . $LABEL . 'Certificação' . $LABEL_ . $TD_ . $TR_; 
$certificacao_model['cer_char_certificacao'] = isset($_GET['certificacao_model']) ? $certificacao_model_get['cer_char_certificacao'] : '';
$INPUT = '<input type="text" name="cer_char_certificacao" required size="70" maxlength="50" value="' . $certificacao_model['cer_char_certificacao'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Instituição' . $LABEL_ . $TD_ . $TR_;
$certificacao_model['cer_char_instituicao'] = isset($_GET['certificacao_model']) ? $certificacao_model_get['cer_char_instituicao'] : '';
$INPUT = '<input type="text" name="cer_char_instituicao" required size="70" maxlength="50" value="' . $certificacao_model['cer_char_instituicao'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Ano de obtenção' . $LABEL_ . $TD_ . $TR_; 
$certificacao_model['cer_year_ano_obtencao'] = isset($_GET['certificacao_model']) ? $certificacao_model_get['cer_year_ano_obtencao'] : '';
$INPUT = '<input type="number" name="cer_year_ano_obtencao" required size="70" min="1950" max="3000" value="' . $certificacao_model['cer_year_ano_obtencao'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR. $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

$SUBMIT = '<input type="submit" value="Salvar" onclick=\'return confirmar();\'>';
echo $TR. $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;