<?php
/* inicia a sessão */
session_start();

require_once '../lib/biblioteca.php';
require_once '../model/model.php';
require_once '../sql/sql.php';

$usuario_model = usuario_model();
$usuario_model['usu_char_email'] = $_POST['usu_char_email'];

$condicao['usu_char_email'] = $_POST['usu_char_email'];
$resultado = numero_registros('usuario', $condicao);

if ($resultado != 0) {
	header('location: ..\view\erro.php?e=OPN&msg="E-mail já cadastrado ou inválido !"');
} else {
	
	$resultado = inserir('usuario', $usuario_model);
	
	if ($resultado == TRUE) {
		if (smtpmailer('vpmaciel@live.com', 'vpmaciel@gmail.com', 'BitCurriculos', 'Sua Senha', $usuario_model['usu_int_senha'],'')) {
			header("location:..\\view\\sucesso.php?msg=Sua senha é foi enviada para seu e-mail !");
			exit;
		}
	} else {
		if (!empty($error)) {
			header('location:..\view\erro.php?e=EEE');
			exit;
		}	
	} 
}