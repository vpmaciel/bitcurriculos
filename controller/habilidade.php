<?php
session_start();

if(!isset($_SESSION['usu_int_id'])) {
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

$habilidade_model['hab_int_id'] = $_GET['hab_int_id'];

$resultado_numero_registros = retornar_numero_registros('habilidade', $habilidade_model);

$habilidade_model['hab_int_id'] = $_GET['hab_int_id'];
$habilidade_model['usu_int_id'] = $_SESSION['usu_int_id'];
$habilidade_model['hab_char_habilidade'] = $_GET['hab_char_habilidade'];
$habilidade_model['hab_int_nivel_conhecimento'] = $_GET['hab_int_nivel_conhecimento'];

####################################################################################################

if ($acao == 'excluir') {

	$habilidade_model = $_GET['habilidade_model'];

	$resultado_excluir = excluir('habilidade', $habilidade_model);

	if ($resultado_excluir == TRUE) {
		
		header('location:..\view\sucesso.php');
		exit;
	} else {
		header('location: ..\view\erro.php?e=OPN');
		exit;
	}   			
}

if ($resultado_numero_registros == 0) {
    $resultado_inserir = inserir('habilidade', $habilidade_model);
    
    if ($resultado_inserir == TRUE) {
		header('location:..\view\sucesso.php');
		exit;
	} else {
		header('location: ..\view\erro.php?e=OPN');
		exit;
	} 
} else {
    
	$condicao['usu_int_id'] = $_SESSION['usu_int_id'];
	$condicao['hab_int_id'] = $_GET['hab_int_id'];

	
	$resultado_atualizar = atualizar('habilidade', $habilidade_model, $condicao);
	
	if ($resultado_atualizar == TRUE) {
		
		header('location:..\view\sucesso.php');
		exit;
	} else {
		header('location: ..\view\erro.php?e=OPN');
		exit;
	}   
}
####################################################################################################

