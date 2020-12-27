<?php
/* inicia a sessão */
session_start();

require_once '../lib/biblioteca.php';
require_once '../sql/sql.php';

$usuario_model['usu_char_email'] = $_POST['usu_char_email'];

$resultado_retornar_numero_registros = retornar_numero_registros('usuario', $usuario_model);

if ($resultado_retornar_numero_registros == 0) {
	header('location: ..\view\erro.php?e=OPN&msg="E-mail não cadastrado ou inválido !"');
} else {
	
	$resultado_selecionar = selecionar('usuario', $usuario_model);
	
	$json = json_decode($resultado_selecionar);

	foreach($json as $registro) {
		$usuario_model['usu_int_senha'] = $registro->usu_int_senha;
	}

	if ($resultado_selecionar == TRUE) {
		if (smtpmailer('vpmaciel@live.com', 'vpmaciel@gmail.com', 'BitCurriculos', 'Sua Senha', $usuario_model['usu_int_senha'])) {
			header("location:..\\view\\sucesso.php?msg=Sua senha é foi enviada para seu e-mail !");
			exit;
		}
	} else {		
		header('location:..\view\erro.php?e=EEE');
		exit;
	} 
}