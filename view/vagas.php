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

$FORM = '<form action="../controller/vagas.php" method="get">';

echo $FORM;

echo $TABLE;
echo $TR . $TH . 'Vagas'  . $TH_ . $TR_; 

echo $TR . $TD . $LABEL . 'Cargo' . $LABEL_ . $TD_ . $TR_; 
$vaga['pub_vag_cargo'] = isset($_POST['pub_vag_cargo'])?$_POST['pub_vag_cargo']:'';
$INPUT = '<input type="text" name="pub_vag_cargo" maxlength="50" value="' . $vaga['pub_vag_cargo'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Estado' . $LABEL_ . $TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pub_vag_estado">';
echo $SELECT;
$OPTION = ' <option value="">TODOS</option>';
echo $OPTION;
foreach ($array_estado as $indice => $pub_vag_estado) {	
	echo "<option value=$indice>$pub_vag_estado</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Cidade' . $LABEL_ . $TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pub_vag_cidade">';
echo $SELECT;
$OPTION = ' <option value="">TODOS</option>';
echo $OPTION;
foreach ($array_cidade as $indice => $pub_vag_cidade) {	
	echo "<option value=$indice>$pub_vag_cidade</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

$SUBMIT = '<input type="submit" value="Pesquisar" onclick=\'return confirmar();\'>';
echo $TR. $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;