<?php
session_start();

if (!isset($_SESSION["usu_int_id"])) {
	//header("location: erro.php?e=SNI");
}

require_once '../lib/biblioteca.php';
require_once '../model/model.php';
require_once '../database/sql.php';


function autenticar($campo, $tamanho) {
    
}
$usuario_model = usuario_model();
$usuario_model['usu_char_email'] = $_POST['usu_char_email'];
$usuario_model['usu_char_senha'] = $_POST['usu_char_senha'];

$condicao = ['usu_char_email' => $usuario_model['usu_char_email']];
$resultado = procurar('tb_usuario', $condicao);
if ($resultado == TRUE) {
	header('Location: ..\view\erro.php?e=OPN&msg="E-mail já cadastrado"');
} else {
	$resultado = inserir('tb_usuario', $usuario_model);

	if ($resultado == TRUE) {
				
		header('Location: ..\view\sucesso.php');
	} else {
		header('Location: ..\view\erro.php?e=OPN');
	}	
}

