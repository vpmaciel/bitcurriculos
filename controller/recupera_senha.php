<?php
/* inicia a sessão */
session_start();

require_once '../lib/biblioteca.php';

$usuario_model['usu_char_email'] = $_POST['usu_char_email'];

$resultado = numero_registros('usuario', $usuario_model);

if ($resultado == 0) {
	header('location: ..\view\erro.php?e=OPN&msg="E-mail não cadastrado ou inválido !"');
} else {
	
	$resultado = selecionar('usuario', $usuario_model);
	
	$json = json_decode($resultado);

	foreach($json as $registro) {
		$usuario_model['usu_int_senha'] = $registro->usu_int_senha;
	}

	if ($resultado == TRUE) {
		if (smtpmailer('vpmaciel@live.com', 'vpmaciel@gmail.com', 'BitCurriculos', 'Sua Senha', $usuario_model['usu_int_senha'])) {
			header("location:..\\view\\sucesso.php?msg=Sua senha é foi enviada para seu e-mail !");
		}
	} else {
		if (!empty($error)) {
			header('location:..\view\erro.php?e=EEE');
		}	
	} 
}