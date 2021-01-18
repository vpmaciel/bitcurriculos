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

echo $DIV_MAIN;

require_once 'menu.php';

$FORM = '<form action="../controller/registro.php" name="formulario" method="post">';

echo $FORM;

echo $TABLE;
echo $TR . $TH . 'Cadastro'  . $TH_ . $TR_; 

echo $TR . $TD . $LABEL . 'E-mail (Você receberá a senha neste e-mail)' . $LABEL_ . $TD_ . $TR_; 
$usuario_model['usu_char_email'] = isset($_POST['usu_char_email']) ? $_POST['usu_char_email']:' ';
$INPUT = '<input type="email" name="usu_char_email" required maxlength="100" value="' . $usuario_model['usu_char_email'] .'">';
echo $TR . $TD . $INPUT . $TD_ . $TR_;

$SUBMIT = '<input type="submit" value="ENVIAR">';
echo $TR . $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;