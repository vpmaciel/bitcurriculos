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

$publica_vaga_model['pub_vag_id'] = $_GET['pub_vag_id'];

$resultado_numero_registros = retornar_numero_registros('publica_vaga', $publica_vaga_model);

$publica_vaga_model['pub_vag_id'] = $_GET['pub_vag_id'];
$publica_vaga_model['usu_id'] = $_SESSION['usu_id'];
$publica_vaga_model['pub_vag_empresa'] = $_GET['pub_vag_empresa'];
$publica_vaga_model['pub_vag_cargo'] = mb_convert_case(mb_strtolower(remover_acentos($_GET['pub_vag_cargo']), 'UTF-8'),  MB_CASE_TITLE);
$publica_vaga_model['pub_vag_requisitos'] = $_GET['pub_vag_requisitos'];
$publica_vaga_model['pub_vag_funcoes'] = $_GET['pub_vag_funcoes'];
$publica_vaga_model['pub_vag_beneficios'] = $_GET['pub_vag_beneficios'];
$publica_vaga_model['pub_vag_data_publicacao'] = isset($_GET['pub_vag_data_publicacao']) ? $_GET['pub_vag_data_publicacao'] : date("d-m-Y");
$publica_vaga_model['pub_vag_vagas'] = $_GET['pub_vag_vagas'];
$publica_vaga_model['pub_vag_contrato'] = $_GET['pub_vag_contrato'];
$publica_vaga_model['pub_vag_salario_mensal'] = $_GET['pub_vag_salario_mensal'];
$publica_vaga_model['pub_vag_estado'] = $_GET['pub_vag_estado'];
$publica_vaga_model['pub_vag_cidade'] = $_GET['pub_vag_cidade'];


####################################################################################################

if ($acao == 'excluir') {

	$publica_vaga_model = $_GET['publica_vaga_model'];

	$resultado_excluir = excluir('publica_vaga', $publica_vaga_model);

	if ($resultado_excluir == TRUE) {
		
		header('location:..\view\sucesso.php?url_voltar=publica_vaga_lista');
		exit;
	} else {
		header('location: ..\view\erro.php?e=OPN');
		exit;
	}   			
}

if ($resultado_numero_registros == 0) {
    $resultado_inserir = inserir('publica_vaga', $publica_vaga_model);
    
    if ($resultado_inserir == TRUE) {
		header('location:..\view\sucesso.php?url_voltar=publica_vaga_lista');
		exit;
	} else {
		header('location: ..\view\erro.php?e=OPN');
		exit;
	} 
} else {
    
	$condicao['usu_id'] = $_SESSION['usu_id'];
	$condicao['pub_vag_id'] = $_GET['pub_vag_id'];

	
	$resultado_atualizar = atualizar('publica_vaga', $publica_vaga_model, $condicao);
	
	if ($resultado_atualizar == TRUE) {
		
		header('location:..\view\sucesso.php?url_voltar=publica_vaga_lista');
		exit;
	} else {
		header('location: ..\view\erro.php?e=OPN');
		exit;
	}   
}
####################################################################################################

