<?php
session_start();

if(!isset($_SESSION['usu_int_id'])) {
	header('location:..\view\erro.php?e=UNL');
}
require_once '../lib/biblioteca.php';
require_once '../model/model.php';
require_once '../sql/sql.php';

$acao = '';

if(isset($_GET['acao'])){
    $acao = $_GET['acao'];
}

####################################################################################################

$certificacao_model['cer_int_id'] = $_GET['cer_int_id'];

$resultado_numero_registros = retornar_numero_registros('certificacao', $certificacao_model);

$certificacao_model['cer_int_id'] = $_GET['cer_int_id'];
$certificacao_model['usu_int_id'] = $_SESSION['usu_int_id'];
$certificacao_model['cer_char_certificacao'] = $_GET['cer_char_certificacao'];
$certificacao_model['cer_char_instituicao'] = $_GET['cer_char_instituicao'];
$certificacao_model['cer_year_ano_obtencao'] = $_GET['cer_year_ano_obtencao'];

####################################################################################################

if ($acao == 'excluir') {

	$certificacao_model = $_GET['certificacao_model'];

	$resultado_excluir = excluir('certificacao', $certificacao_model);

	if ($resultado_excluir == TRUE) {
		
		header('location:..\view\sucesso.php');
		exit;
	} else {
		header('location: ..\view\erro.php?e=OPN');
		exit;
	}   			
}

if ($resultado_numero_registros == 0) {
    $resultado_inserir = inserir('certificacao', $certificacao_model);
    
    if ($resultado_inserir == TRUE) {
		header('location:..\view\sucesso.php');
		exit;
	} else {
		header('location: ..\view\erro.php?e=OPN');
		exit;
	} 
} else {
    
	$condicao['usu_int_id'] = $_SESSION['usu_int_id'];
	$condicao['cer_int_id'] = $_GET['cer_int_id'];

	
	$resultado_atualizar = atualizar('certificacao', $certificacao_model, $condicao);
	
	if ($resultado_atualizar == TRUE) {
		
		header('location:..\view\sucesso.php');
		exit;
	} else {
		header('location: ..\view\erro.php?e=OPN');
		exit;
	}   
}
####################################################################################################

