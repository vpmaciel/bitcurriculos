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

echo $TR . $TD . $LABEL . 'E-MAIL' . $LABEL_ . $TD_; 
$usuario['email'] = isset($_POST['email']) ? $_POST['email']:'';
$EMAIL = '<input type="email" name="email" required size="70" minlength="5" maxlength="100" value="' . $usuario['email'] .'">';
echo $TD . $EMAIL . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'SENHA' . $LABEL_ . $TD_; 
$usuario['senha'] = isset($_POST['senha']) ? $_POST['senha']:'';
$SENHA = '<input type="password" id="senha" name="senha" size="70" required onkeypress="$(this).mask(\'00000000\');" minlength="8" maxlength="8" value="' . $usuario['senha'] .'">';
echo $TD . $SENHA . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'REPETIR SENHA' . $LABEL_ . $TD_; 
$usuario['repetir_senha'] = isset($_POST['repetir_senha']) ? $_POST['repetir_senha']:'';
$SENHA = '<input type="password" id="repetir_senha" name="repetir_senha" size="70" required onkeypress="$(this).mask(\'00000000\');" minlength="8" maxlength="8" value="' . $usuario['repetir_senha'] .'">';
echo $TD . $SENHA . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'TIPO DE USUÁRIO' . $LABEL_ . $TD_; 
echo $TD;
$SELECT = '<select name="tipo_usuario">';
echo $SELECT;
foreach ($usuario_lista as $indice => $tipo_usuario) {	
	if ($indice == 0) {
		continue;
	}
	echo ($tipo_usuario == $usuario['tipo_usuario']) ? "<option value=$indice selected>$tipo_usuario</option>" : "<option value=$indice>$tipo_usuario</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_; 

$SUBMIT = '<input type="submit" value="Enviar" onclick="validarSenha();">';
echo $TD . $SUBMIT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;