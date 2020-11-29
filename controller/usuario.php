<?php
session_start();

require_once '../lib/biblioteca.php';
require_once '../model/model.php';
require_once '../database/sql.php';

$usuario_model = usuario_model();
$usuario_model['usu_char_email'] = $_POST['usu_char_email'];
$usuario_model['usu_char_senha'] = $_POST['usu_char_senha'];

$condicao = ['usu_char_email' => $usuario_model['usu_char_email']];
$resultado = procurar('usuario', $condicao);
if ($resultado == TRUE) {
	header('location: ..\view\erro.php?e=OPN&msg="E-mail já cadastrado"');
} else {
	$resultado = inserir('usuario', $usuario_model);

	if ($resultado == TRUE) {

		$condicao = 'usu_char_email =' . "'" .$_POST['usu_char_email'] . "'" . " AND " . 
		            'usu_char_senha =' . "'" .$_POST['usu_char_senha'] . "'";
		$resultado = criar_sessao('usuario', $condicao);		
		
		if ($resultado == TRUE) {			
			header('location:..\view\sucesso.php');
		} else {
			exit();
			header('location:..\view\erro.php?e=OPN');
		}	
	} 
}

