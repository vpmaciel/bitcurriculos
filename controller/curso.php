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

$curso_model['cur_id'] = $_GET['cur_id'];

$resultado_numero_registros = retornar_numero_registros('curso', $curso_model);

$curso_model['cur_id'] = $_GET['cur_id'];
$curso_model['usu_id'] = $_SESSION['usu_id'];
$curso_model['cur_nome'] = $_GET['cur_nome'];
$curso_model['cur_instituicao'] = $_GET['cur_instituicao'];
$curso_model['cur_ano_inicio'] = $_GET['cur_ano_inicio'];
$curso_model['cur_ano_conclusao'] = $_GET['cur_ano_conclusao'];
$curso_model['cur_situacao'] = $_GET['cur_situacao'];
$curso_model['cur_nivel'] = $_GET['cur_nivel'];

####################################################################################################

if ($acao == 'excluir') {

	$curso_model = $_GET['curso_model'];

	$resultado_excluir = excluir('curso', $curso_model);

	if ($resultado_excluir == TRUE) {
		
		header('location:..\view\sucesso.php?url_voltar=curso_lista');
		exit;
	} else {
		header('location: ..\view\erro.php?e=OPN');
		exit;
	}   			
}

if ($resultado_numero_registros == 0) {
    $resultado_inserir = inserir('curso', $curso_model);
    
    if ($resultado_inserir == TRUE) {
		header('location:..\view\sucesso.php?url_voltar=curso_lista');
		exit;
	} else {
		header('location: ..\view\erro.php?e=OPN');
		exit;
	} 
} else {
    
	$condicao['usu_id'] = $_SESSION['usu_id'];
	$condicao['cur_id'] = $_GET['cur_id'];

	
	$resultado_atualizar = atualizar('curso', $curso_model, $condicao);
	
	if ($resultado_atualizar == TRUE) {
		
		header('location:..\view\sucesso.php?url_voltar=curso_lista');
		exit;
	} else {
		header('location: ..\view\erro.php?e=OPN');
		exit;
	}   
}
####################################################################################################

