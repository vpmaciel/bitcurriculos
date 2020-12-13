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
echo $H1 . 'RECUPERAR SENHA' . $H1_;

$FORM = '<form action="../controller/recupera_senha.php" method="post">';

echo $FORM;

echo $TABLE;

echo $TR . $TD . $LABEL . 'E-mail' . $LABEL_ . $TD_ . $TR_; 
$usuario['usu_char_email'] = isset($_POST['usu_char_email']) ? $_POST['usu_char_email']:'';
$INPUT = '<input type="email" name="usu_char_email" required size="70" minlength="5" maxlength="100" value="' . $usuario['usu_char_email'] .'">';
echo $TR . $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

$SUBMIT = '<input type="submit" value="Enviar senha para meu e-mail" onclick=\'return confirmar();\'>';
echo $TR . $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;