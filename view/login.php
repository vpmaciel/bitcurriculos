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
echo $H1 . 'LOGIN' . $H1_;

$FORM_LOGIN = '<form action="../controller/login.php" method="post">';

echo $FORM_LOGIN;

echo $TABLE;

echo $TR . $TD . $LABEL . 'E-MAIL' . $LABEL_ . $TD_ . $TR_; 
$usuario['email'] = isset($_POST['email']) ? $_POST['email']:'';
$EMAIL = '<input type="text" name="email" required size="70" minlength="10" maxlength="100" value="' . $usuario['email'] .'">';
echo $TR . $TD . $EMAIL . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'SENHA' . $LABEL_ . $TD_ . $TR_; 
$usuario['senha'] = isset($_POST['senha']) ? $_POST['senha']:'';
$SENHA = '<input type="password" name="senha" size="70" required onkeypress="$(this).mask(\'00000000\');" minlength="8" maxlength="8" value="' . $usuario['senha'] .'">';
echo $TR . $TD . $SENHA . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

$SUBMIT = '<input type="submit" value="Salvar" onclick=\'return confirmar();\'>';
echo $TR . $TD . $SUBMIT . $TD_ . $TR_;

echo $TR . $TD . $NOME . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $BODY_;

echo $HTML_;