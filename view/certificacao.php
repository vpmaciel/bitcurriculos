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
echo $H1 . 'CERTIFICAÇÃO' . $H1_;

$FORM_PESSOA = '<form action="../controller/certificado.php" method="post">';

echo $FORM_PESSOA;

echo $TABLE;

echo $TR . $TD . $LABEL . 'Certificação' . $LABEL_ . $TD_; 
$pessoa['nome'] = isset($_POST['nome'])?$_POST['nome']:'';
$CURSO = '<input type="text" name="nome" required size="70" minlength="10" maxlength="50" value="' . $pessoa['nome'] .'">';
echo $TD . $CURSO . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Instituição' . $LABEL_ . $TD_; 
$pessoa['instituicao'] = isset($_POST['instituicao'])?$_POST['instituicao']:'';
$INSTITUICAO = '<input type="text" name="instituicao" required size="70" minlength="10" maxlength="50" value="' . $pessoa['instituicao'] .'">';
echo $TD . $INSTITUICAO . $TD_ . $TR_;

echo $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_; 

$SUBMIT = '<input type="submit" value="Salvar" onclick=\'return confirmar();\'>';
echo $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;