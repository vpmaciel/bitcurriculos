<?php
session_start();
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

echo $TR . $TD . $LABEL . 'EMPRESA' . $LABEL_ . $TD_ . $TR_; 
$pessoa['empresa'] = isset($_POST['empresa'])?$_POST['empresa']:'';
$EMPRESA = '<input type="text" name="empresa" required size="70" minlength="10" maxlength="50" value="' . $pessoa['empresa'] .'">';
echo $TR . $TD . $EMPRESA . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'CARGO' . $LABEL_ . $TD_ . $TR_; 
$pessoa['instituicao'] = isset($_POST['instituicao'])?$_POST['instituicao']:'';
$CARGO = '<input type="text" name="instituicao" required size="70" minlength="10" maxlength="50" value="' . $pessoa['instituicao'] .'">';
echo $TR . $TD . $CARGO . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'DATA DE ADMISSÃO' . $LABEL_ . $TD_ . $TR_; 
$pessoa['ano_inicio'] = isset($_POST['ano_inicio'])?$_POST['ano_inicio']:'';
$DATA_ADMISSAO = '<input type="text" name="ano_inicio" size="70" required onkeypress="$(this).mask(\'00-00-0000\');" minlength="4" maxlength="4" value="' . $pessoa['ano_inicio'] .'">';
echo $TR . $TD . $DATA_ADMISSAO . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'DATA DE SAÍDA' . $LABEL_ . $TD_ . $TR_; 
$pessoa['ano_conclusao'] = isset($_POST['ano_conclusao'])?$_POST['ano_conclusao']:'';
$DATA_SAIDA = '<input type="text" name="ano_conclusao" size="70" onkeypress="$(this).mask(\'00-00-0000\');" minlength="4" maxlength="4" value="' . $pessoa['ano_conclusao'] .'">';
echo $TR . $TD . $DATA_SAIDA . $TD_ . $TR_; 

echo $TR . $TD . $LABEL . 'FUNÇÕES' . $LABEL_ . $TD_ . $TR_; 
$pessoa['ano_conclusao'] = isset($_POST['ano_conclusao'])?$_POST['ano_conclusao']:'';
$DATA_SAIDA = '<textarea id="w3review" name="w3review" rows="10" cols="60" maxlength="500">' . $pessoa['ano_conclusao'] .'</textarea>';
echo $TR . $TD . $DATA_SAIDA . $TD_ . $TR_; 


echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

$SUBMIT = '<input type="submit" value="Salvar" onclick=\'return confirmar();\'>';
echo $TR . $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;