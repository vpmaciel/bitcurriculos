<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
session_start();

require_once '../lib/biblioteca.php';
require_once '../model/model.php';
require_once '../database/sql.php';


$usuario_model['usu_char_email'] = $_POST['usu_char_email'];
$usuario_model['usu_int_senha'] = $_POST['usu_int_senha'];

$resultado = numero_registros('usuario', $usuario_model);

if ($resultado == 0) {
	header('location: ..\view\erro.php?e=OPN&msg="E-mail ou senha incorretos !"');
} else {	
		$resultado = criar_sessao('usuario', $usuario_model);		
		
		if ($resultado > 0) {			
			if (!isset($_SESSION['usu_int_id'])) {
				$_SESSION['usu_int_id'] = $resultado;
			}
			header('location:..\view\sucesso.php?msg=Sessão criada com sucesso !');
		} else {
			header('location:..\view\erro.php?e=OPN');
		}	
	} 
}