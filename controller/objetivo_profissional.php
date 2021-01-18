<?php
session_start();

if(!isset($_SESSION['usu_id'])) {
	header('location:..\view\erro.php?e=UNL');
	exit;
}
require_once '../lib/biblioteca.php';
require_once '../model/model.php';
require_once '../sql/sql.php';

$acao = '';

if(isset($_GET['acao'])){
    $acao = $_GET['acao'];
}

####################################################################################################

$objetivo_profissional_model['obj_pro_id'] = $_GET['obj_pro_id'];

$resultado_numero_registros = retornar_numero_registros('objetivo_profissional', $objetivo_profissional_model);

$objetivo_profissional_model['obj_pro_id'] = $_GET['obj_pro_id'];
$objetivo_profissional_model['usu_id'] = $_SESSION['usu_id'];
$objetivo_profissional_model['obj_pro_cargo'] = $_GET['obj_pro_cargo'];
$objetivo_profissional_model['obj_pro_pretensao_salarial'] = $_GET['obj_pro_pretensao_salarial'];
$objetivo_profissional_model['obj_pro_contrato'] = $_GET['obj_pro_contrato'];

####################################################################################################

if ($acao == 'excluir') {

	$objetivo_profissional_model = $_GET['objetivo_profissional_model'];

	$resultado_excluir = excluir('objetivo_profissional', $objetivo_profissional_model);

	if ($resultado_excluir == TRUE) {
		
		header('location:..\view\sucesso.php');
		exit;
	} else {
		header('location: ..\view\erro.php?e=OPN');
		exit;
	}   			
}

if ($resultado_numero_registros == 0) {
    $resultado_inserir = inserir('objetivo_profissional', $objetivo_profissional_model);
    
    if ($resultado_inserir == TRUE) {
		header('location:..\view\sucesso.php');
		exit;
	} else {
		header('location: ..\view\erro.php?e=OPN');
		exit;
	} 
} else {
    
	$condicao['usu_id'] = $_SESSION['usu_id'];
	$condicao['obj_pro_id'] = $_GET['obj_pro_id'];

	
	$resultado_atualizar = atualizar('objetivo_profissional', $objetivo_profissional_model, $condicao);
	
	if ($resultado_atualizar == TRUE) {
		
		header('location:..\view\sucesso.php');
		exit;
	} else {
		header('location: ..\view\erro.php?e=OPN');
		exit;
	}   
}
####################################################################################################

