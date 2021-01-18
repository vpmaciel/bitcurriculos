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

$experiencia_profissional_model['exp_pro_id'] = $_GET['exp_pro_id'];

$resultado_numero_registros = retornar_numero_registros('experiencia_profissional', $experiencia_profissional_model);

$experiencia_profissional_model['exp_pro_id'] = $_GET['exp_pro_id'];
$experiencia_profissional_model['usu_id'] = $_SESSION['usu_id'];
$experiencia_profissional_model['exp_pro_empresa'] = $_GET['exp_pro_empresa'];
$experiencia_profissional_model['exp_pro_cargo'] = $_GET['exp_pro_cargo'];
$experiencia_profissional_model['exp_pro_data_admissao'] = $_GET['exp_pro_data_admissao'];
$experiencia_profissional_model['exp_pro_data_saida'] = $_GET['exp_pro_data_saida'];
$experiencia_profissional_model['exp_pro_funcoes'] = $_GET['exp_pro_funcoes'];

####################################################################################################

if ($acao == 'excluir') {

	$experiencia_profissional_model = $_GET['experiencia_profissional_model'];

	$resultado_excluir = excluir('experiencia_profissional', $experiencia_profissional_model);

	if ($resultado_excluir == TRUE) {
		
		header('location:..\view\sucesso.php');
		exit;
	} else {
		header('location: ..\view\erro.php?e=OPN');
		exit;
	}   			
}

if ($resultado_numero_registros == 0) {
    $resultado_inserir = inserir('experiencia_profissional', $experiencia_profissional_model);
    
    if ($resultado_inserir == TRUE) {
		header('location:..\view\sucesso.php');
		exit;
	} else {
		header('location: ..\view\erro.php?e=OPN');
		exit;
	} 
} else {
    
	$condicao['usu_id'] = $_SESSION['usu_id'];
	$condicao['exp_pro_id'] = $_GET['exp_pro_id'];

	
	$resultado_atualizar = atualizar('experiencia_profissional', $experiencia_profissional_model, $condicao);
	
	if ($resultado_atualizar == TRUE) {
		
		header('location:..\view\sucesso.php');
		exit;
	} else {
		header('location: ..\view\erro.php?e=OPN');
		exit;
	}   
}
####################################################################################################