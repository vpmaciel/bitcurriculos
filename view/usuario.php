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
$usuario['email'] = isset($_POST['email']) ? $_POST['email']:'';
$INPUT = '<input type="email" name="email" required size="70" minlength="5" maxlength="100" value="' . $usuario['email'] .'">';
echo $TR . $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Repetir e-mail' . $LABEL_ . $TD_ . $TR_; 
$usuario['repetir_email'] = isset($_POST['repetir_email']) ? $_POST['repetir_email']:'';
$INPUT = '<input type="repetir_email" name="repetir_email" required size="70" minlength="5" maxlength="100" value="' . $usuario['repetir_email'] .'">';
echo $TR . $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Senha' . $LABEL_ . $TD_ . $TR_; 
$usuario['senha'] = isset($_POST['senha']) ? $_POST['senha']:'';
$INPUT = '<input type="password" id="senha" name="senha" size="70" required onkeypress="$(this).mask(\'00000000\');" minlength="8" maxlength="8" value="' . $usuario['senha'] .'">';
echo $TR . $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Repetir senha' . $LABEL_ . $TD_ . $TR_; 
$usuario['repetir_senha'] = isset($_POST['repetir_senha']) ? $_POST['repetir_senha']:'';
$INPUT = '<input type="password" id="repetir_senha" name="repetir_senha" size="70" required onkeypress="$(this).mask(\'00000000\');" minlength="8" maxlength="8" value="' . $usuario['repetir_senha'] .'">';
echo $TR . $TD . $INPUT . $TD_ . $TR_;

$SCRIPT = '<script>document.getElementById("repetir_senha").addEventListener("blur", validarSenha);</script>';
echo $SCRIPT;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

$SUBMIT = '<input type="submit" value="Enviar" onclick="validarSenha();">';
echo $TR . $TD . $SUBMIT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;