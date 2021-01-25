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

$FORM = '<form action="../controller/certificacao.php" method="get" onsubmit="return validar_form()">';

echo $FORM;
if (isset($_GET['certificacao_model'])) {
	$certificacao_model_get = $_GET['certificacao_model'];
}

echo $TABLE;
echo $TR . $TH . 'Certificação<span id="msg_cer_certificacao"></span>' . $TH_ . $TR_;

$certificacao_model['cer_id'] = isset($_GET['certificacao_model']) ? $certificacao_model_get['cer_id'] : '';
$INPUT = '<input type="hidden" id="cer_id" name="cer_id"  value="' . $certificacao_model['cer_id'] .'">';
echo $INPUT;

echo $TR . $TD . $LABEL . 'Certificação' . '<span id="msg_cer_certificacao"></span>' . $LABEL_ . $TD_ . $TR_; 
$certificacao_model['cer_certificacao'] = isset($_GET['certificacao_model']) ? $certificacao_model_get['cer_certificacao'] : '';
$INPUT = '<input type="text" id="cer_certificacao" name="cer_certificacao" required maxlength="50" value="' . $certificacao_model['cer_certificacao'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Instituição' . '<span id="msg_cer_instituicao"></span>' . $LABEL_ . $TD_ . $TR_;
$certificacao_model['cer_instituicao'] = isset($_GET['certificacao_model']) ? $certificacao_model_get['cer_instituicao'] : '';
$INPUT = '<input type="text" id="cer_instituicao" name="cer_instituicao" required maxlength="50" value="' . $certificacao_model['cer_instituicao'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Ano de obtenção' . '<span id="msg_cer_ano_obtencao"></span>' . $LABEL_ . $TD_ . $TR_; 
$certificacao_model['cer_ano_obtencao'] = isset($_GET['certificacao_model']) ? $certificacao_model_get['cer_ano_obtencao'] : '';
$INPUT = '<input type="number" id="cer_ano_obtencao" name="cer_ano_obtencao" required min="1900" max="3000" value="' . $certificacao_model['cer_ano_obtencao'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR. $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

$SUBMIT = '<input type="submit" value="SALVAR" onclick=\'return confirmar();\'>';
echo $TR. $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo '<script src="certificacao.js"></script>';

echo $BODY_;

echo $HTML_;