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
echo $H1 . 'CADASTRO' . $H1_;

$FORM = '<form action="../controller/usuario.php" name="formulario" method="post">';

echo $FORM;

echo $TABLE;

echo $TR . $TD . $LABEL . 'E-mail' . $LABEL_ . $TD_ . $TR_; 
$usuario['usu_char_email'] = isset($_POST['usu_char_email']) ? $_POST['usu_char_email']:'';
$INPUT = '<input type="email" name="usu_char_email" required size="70" maxlength="100" value="' . $usuario['usu_char_email'] .'">';
echo $TR . $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Senha' . $LABEL_ . $TD_ . $TR_; 
$usuario['usu_char_senha'] = isset($_POST['usu_char_senha']) ? $_POST['usu_char_senha']:'';
$INPUT = '<input type="text" id="usu_char_senha" name="usu_char_senha" size="70" required onkeypress="$(this).mask(\'0000\');" minlength="4" maxlength="8" value="' . $usuario['usu_char_senha'] .'">';
echo $TR . $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

$SUBMIT = '<input type="submit" value="ENVIAR">';
echo $TR . $TD . $SUBMIT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;