<?php
session_start();

require_once '../lib/biblioteca.php';
require_once '../model/model.php';
require_once '../sql/sql.php';

$usuario_model['usu_char_email'] = $_POST['usu_char_email'];
$usuario_model['usu_int_senha'] = $_POST['usu_int_senha'];

$resultado_retornar_numero_registros = retornar_numero_registros('usuario', $usuario_model);

if ($resultado_retornar_numero_registros == 0) {
	header('location: ..\view\erro.php?e=OPN&msg="E-mail ou senha incorretos !"');
	exit;
} else {	

	if (!isset($_SESSION['usu_int_id'])) {
		$curso_json = json_decode(selecionar('usuario', $usuario_model));

		foreach($curso_json as $registro) {
			$_SESSION['usu_int_id'] = $registro->usu_int_id;						
		}
		
		header('location:..\view\sucesso.php?msg=Sessão criada com sucesso !');
		exit;
	} else {		
		header('location: ..\view\erro.php?e=OPN&msg="Usuário já está logado !');
		exit;
	}
}