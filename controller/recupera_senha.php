<?php
session_start();

require_once '../lib/biblioteca.php';
require_once '../model/model.php';
require_once '../database/sql.php';

$usuario_model = usuario_model();
$usuario_model['usu_char_email'] = $_POST['usu_char_email'];

$condicao = ['usu_char_email' => $usuario_model['usu_char_email']];

$resultado = numero_registros('usuario', $condicao);

if ($resultado != 0) {
	header('location: ..\view\erro.php?e=OPN&msg="E-mail incorreto !"');
} else {	

	if ($resultado == TRUE) {

		$condicao = 'usu_char_email =' . "'" .$_POST['usu_char_email'] . "'" . " AND " . 
		            'usu_int_senha =' . "'" .$_POST['usu_int_senha'] . "'";
		$resultado = criar_sessao('usuario', $condicao);		
		
		if ($resultado > 0) {			
			if (!isset($_SESSION['usu_int_id'])) {
				$_SESSION['usu_int_id'] = $resultado;
			}
			header('location:..\view\sucesso.php');
		} else {
			header('location:..\view\erro.php?e=OPN');
		}	
	} 
}