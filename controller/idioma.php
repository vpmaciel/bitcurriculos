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

$idioma_model['idi_id'] = $_GET['idi_id'];

$resultado_numero_registros = retornar_numero_registros('idioma', $idioma_model);

$idioma_model['idi_id'] = $_GET['idi_id'];
$idioma_model['usu_id'] = $_SESSION['usu_id'];
$idioma_model['idi_idioma'] = $_GET['idi_idioma'];
$idioma_model['idi_nivel_conhecimento'] = $_GET['idi_nivel_conhecimento'];

####################################################################################################

if ($acao == 'excluir') {

	$idioma_model = $_GET['idioma_model'];

	$resultado_excluir = excluir('idioma', $idioma_model);

	if ($resultado_excluir == TRUE) {
		
		header('location:..\view\sucesso.php');
		exit;
	} else {
		header('location: ..\view\erro.php?e=OPN');
		exit;
	}   			
}

if ($resultado_numero_registros == 0) {
    $resultado_inserir = inserir('idioma', $idioma_model);
    
    if ($resultado_inserir == TRUE) {
		header('location:..\view\sucesso.php');
		exit;
	} else {
		header('location: ..\view\erro.php?e=OPN');
		exit;
	} 
} else {
    
	$condicao['usu_id'] = $_SESSION['usu_id'];
	$condicao['idi_id'] = $_GET['idi_id'];

	
	$resultado_atualizar = atualizar('idioma', $idioma_model, $condicao);
	
	if ($resultado_atualizar == TRUE) {
		
		header('location:..\view\sucesso.php');
		exit;
	} else {
		header('location: ..\view\erro.php?e=OPN');
		exit;
	}   
}
####################################################################################################

