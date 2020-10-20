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
echo $H1 . 'DADOS PESSOAIS' . $H1_;

$FORM_LOGIN = '<form action="../controller/login.php" method="post">';

echo $FORM_LOGIN;

echo $TABLE;

echo $TR . $TD . $LABEL . 'E-MAIL' . $LABEL_ . $TD_ . $TR_; 
$usuario['email'] = isset($_POST['email']) ? $_POST['email']:'';
$EMAIL = '<input type="text" name="email" required size="70" minlength="10" maxlength="50" value="' . $usuario['email'] .'">';
echo $TR . $TD . $EMAIL . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'SENHA' . $LABEL_ . $TD_ . $TR_; 
$usuario['senha'] = isset($_POST['senha']) ? $_POST['senha']:'';
$SENHA = '<input type="password" name="senha" size="30" required onkeypress="$(this).mask(\'00000000\');" minlength="8" maxlength="8" value="' . $usuario['senha'] .'">';
echo $TR . $TD . $SENHA . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $BODY_;

echo $HTML_;