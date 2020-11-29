<?php
session_start();

require_once '../lib/biblioteca.php';
require_once '../model/model.php';
require_once '../database/sql.php';


$usuario_model = usuario_model();
$usuario_model['usu_char_email'] = $_POST['usu_char_email'];
$usuario_model['usu_char_senha'] = $_POST['usu_char_senha'];

$condicao = ['usu_char_email' => $usuario_model['usu_char_email']];
$resultado = procurar('tb_usuario', $condicao);
if ($resultado == TRUE) {
	header('location: ..\view\erro.php?e=OPN&msg="E-mail já cadastrado"');
} else {
	$resultado = inserir('tb_usuario', $usuario_model);

	if ($resultado == TRUE) {
		$resultado = criar_sessao('tb_usuario', $condicao);		
		if ($resultado == TRUE) {			
			header('location:..\view\sucesso.php');
		} else {
			exit();
			header('location:..\view\erro.php?e=OPN');
		}	
	} 
}

