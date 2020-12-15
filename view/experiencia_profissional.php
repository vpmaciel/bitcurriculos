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
echo $H1 . 'EXPERIÊNCIA PROFISSIONAL' . $H1_;

$FORM = '<form action="../controller/experienciaprofissional.php" method="post">';

echo $FORM;

echo $TABLE;

echo $TR . $TD . $LABEL . 'Empresa' . $LABEL_ . $TD_ . $TR_;
$pessoa['char_empresa'] = isset($_POST['char_empresa'])?$_POST['char_empresa']:'';
$INPUT = '<input type="text" name="char_empresa" required size="70" minlength="1" maxlength="50" value="' . $pessoa['char_empresa'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Cargo' . $LABEL_ . $TD_ . $TR_;
$pessoa['char_cargo'] = isset($_POST['char_cargo'])?$_POST['char_cargo']:'';
$INPUT = '<input type="text" name="char_cargo" required size="70" minlength="1" maxlength="50" value="' . $pessoa['char_cargo'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Data de admissão' . $LABEL_ . $TD_ . $TR_;
$pessoa['date_data_admissao'] = isset($_POST['date_data_admissao'])?$_POST['date_data_admissao']:'';
$INPUT = '<input type="text" name="date_data_admissao" required size="70" required onkeypress="$(this).mask(\'00-00-0000\');" minlength="4" maxlength="4" value="' . $pessoa['date_data_admissao'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Data de saída' . $LABEL_ . $TD_ . $TR_;
$pessoa['date_data_saida'] = isset($_POST['date_data_saida'])?$_POST['date_data_saida']:'';
$INPUT = '<input type="text" name="date_data_saida" size="70" onkeypress="$(this).mask(\'00-00-0000\');" minlength="4" maxlength="4" value="' . $pessoa['date_data_saida'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_; 

echo $TR . $TD . $LABEL . 'Funções' . $LABEL_ . $TD_ . $TR_;
$pessoa['char_funcoes'] = isset($_POST['char_funcoes'])?$_POST['char_funcoes']:'';
$TEXTAREA = '<input type="text" name="w3review" size="70" maxlength="500" maxlength="500">' . $pessoa['char_funcoes'] .'</textarea>';
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