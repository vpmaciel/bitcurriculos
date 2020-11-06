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

$FORM = '<form action="../controller/login.php" method="post">';

echo $FORM;

echo $TABLE;

echo $TR . $TD . $LABEL . 'E-MAIL' . $LABEL_ . $TD_ . $TR_; 
$usuario['email'] = isset($_POST['email']) ? $_POST['email']:'';
$EMAIL = '<input type="email" name="email" required size="70" minlength="5" maxlength="100" value="' . $usuario['email'] .'">';
echo $TR . $TD . $EMAIL . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'SENHA' . $LABEL_ . $TD_ . $TR_; 
$usuario['senha'] = isset($_POST['senha']) ? $_POST['senha']:'';
$SENHA = '<input type="password" name="senha" size="70" required onkeypress="$(this).mask(\'00000000\');" minlength="8" maxlength="8" value="' . $usuario['senha'] .'">';
echo $TR . $TD . $SENHA . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'TIPO DE USUÁRIO' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="tipo_usuario">';
echo $SELECT;
foreach ($usuario_lista as $indice => $tipo_usuario) {	
	if ($indice == 0) {
		continue;
	}
	echo ($tipo_usuario == $usuario['tipo_usuario']) ? "<option value=$indice selected>$tipo_usuario</option>" : "<option value=$indice>$tipo_usuario</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

$SUBMIT = '<input type="submit" value="Enviar" onclick=\'return confirmar();\'>';
echo $TR . $TD . $SUBMIT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;