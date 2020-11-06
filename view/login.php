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

$FORM = '<form action="../controller/login.php" method="post">';

echo $FORM;

echo $TABLE;

echo $TR . $TD . $LABEL . 'E-MAIL' . $LABEL_ . $TD_; 
$usuario['email'] = isset($_POST['email']) ? $_POST['email']:'';
$EMAIL = '<input type="email" name="email" required size="70" minlength="5" maxlength="100" value="' . $usuario['email'] .'">';
echo $TD . $EMAIL . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'SENHA' . $LABEL_; 
$usuario['senha'] = isset($_POST['senha']) ? $_POST['senha']:'';
$SENHA = '<input type="password" name="senha" size="70" required onkeypress="$(this).mask(\'00000000\');" minlength="8" maxlength="8" value="' . $usuario['senha'] .'">';
echo $TD . $SENHA . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_; 

$SUBMIT = '<input type="submit" value="Enviar" onclick=\'return confirmar();\'>';
echo $TD . $SUBMIT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_; 

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_; 

$LINK = '<a href="pessoa.php">Esqueci usuário ou senha</a>';
echo $TD . $LINK . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;