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

echo $TR . $TD . $LABEL . 'Certificação' . $LABEL_ . $TD_ . $TR_; 
$certificacao['char_certificacao'] = isset($_POST['char_certificacao'])?$_POST['char_certificacao']:'';
$INPUT = '<input type="text" name="char_certificacao" required size="70" minlength="10" maxlength="50" value="' . $certificacao['char_certificacao'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Instituição' . $LABEL_ . $TD_ . $TR_;
$certificacao['char_instituicao'] = isset($_POST['char_instituicao'])?$_POST['char_instituicao']:'';
$INPUT = '<input type="text" name="char_instituicao" required size="70" minlength="10" maxlength="50" value="' . $certificacao['char_instituicao'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Ano de obtenção' . $LABEL_ . $TD_ . $TR_; 
$certificacao['year_ano_obtencao'] = isset($_POST['year_ano_obtencao'])?$_POST['year_ano_obtencao']:'';
$INPUT = '<input type="text" name="year_ano_obtencao" size="70" required onkeypress="$(this).mask(\'0000\');" minlength="4" maxlength="4" value="' . $certificacao['year_ano_obtencao'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR. $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

$SUBMIT = '<input type="submit" value="Salvar" onclick=\'return confirmar();\'>';
echo $TR. $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

require_once 'rodape.php';

echo $DIV_;

echo $BODY_;

echo $HTML_;