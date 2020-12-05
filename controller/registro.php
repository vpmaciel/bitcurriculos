<?php
/* define o limitador de cache para 'private' */
session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

/* define o prazo do cache em 30 minutos */
session_cache_expire(30);
$cache_expire = session_cache_expire();

/* inicia a sessão */
session_start();

require_once '../lib/biblioteca.php';
require_once '../model/model.php';
require_once '../database/sql.php';

$usuario_model = usuario_model();
$usuario_model['usu_char_email'] = $_POST['usu_char_email'];
$usuario_model['usu_char_senha'] = rand(1000, 9999);

$condicao['usu_char_email'] = $usuario_model['usu_char_email'];
$resultado = selecionar('usuario', $condicao);
$json = json_decode($resultado);
 
// Loop para percorrer o Objeto
foreach($json as $registro):
    echo 'Id: ' . $registro->usu_int_id . ' - usuario: ' . $registro->usu_char_email . ' - Telefone: ' . $registro->usu_char_senha . '<br>';
endforeach;
/*
if (!empty($resultado)) {
	header('location: ..\view\erro.php?e=OPN&msg="E-mail já cadastrado"');
} else {
	$resultado = inserir('usuario', $usuario_model);

	if ($resultado == TRUE) {

		$condicao = 'usu_char_email =' . "'" .$_POST['usu_char_email'] . "'" . " AND " . 
		            'usu_char_senha =' . "'" .$_POST['usu_char_senha'] . "'";
		$resultado = criar_sessao('usuario', $condicao);		
		
		if ($resultado > 0) {
			if (!isset($_SESSION['usu_int_id'])) {
				$_SESSION['usu_int_id'] = $resultado;
			}			
			header("location:..\\view\\sucesso.php?msg=Sua senha é $usu_char_senha");
		} else {
			header('location:..\view\erro.php?e=OPN');
		}	
	} 
}

*/