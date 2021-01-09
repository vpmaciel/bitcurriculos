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

$publica_vaga_model['pub_vag_int_id'] = $_GET['pub_vag_int_id'];

$resultado_numero_registros = retornar_numero_registros('publica_vaga', $publica_vaga_model);

$publica_vaga_model['pub_vag_int_id'] = $_GET['pub_vag_int_id'];
$publica_vaga_model['usu_int_id'] = $_SESSION['usu_int_id'];
$publica_vaga_model['pub_vag_char_empresa'] = $_GET['pub_vag_char_empresa'];
$publica_vaga_model['pub_vag_char_cargo'] = $_GET['pub_vag_char_cargo'];
$publica_vaga_model['pub_vag_char_requisitos'] = $_GET['pub_vag_char_requisitos'];
$publica_vaga_model['pub_vag_char_funcoes'] = $_GET['pub_vag_char_funcoes'];
$publica_vaga_model['pub_vag_char_beneficios'] = $_GET['pub_vag_char_beneficios'];
$publica_vaga_model['pub_vag_char_data_publicacao'] = isset($_GET['pub_vag_char_data_publicacao']) ? $_GET['pub_vag_char_data_publicacao'] : date("d-m-Y");
$publica_vaga_model['pub_vag_int_vagas'] = $_GET['pub_vag_int_vagas'];
$publica_vaga_model['pub_vag_int_contrato'] = $_GET['pub_vag_int_contrato'];
$publica_vaga_model['pub_vag_dec_salario_mensal'] = $_GET['pub_vag_dec_salario_mensal'];
$publica_vaga_model['pub_vag_int_estado'] = $_GET['pub_vag_int_estado'];
$publica_vaga_model['pub_vag_int_cidade'] = $_GET['pub_vag_int_cidade'];


####################################################################################################

if ($acao == 'excluir') {

	$publica_vaga_model = $_GET['publica_vaga_model'];

	$resultado_excluir = excluir('publica_vaga', $publica_vaga_model);

	if ($resultado_excluir == TRUE) {
		
		header('location:..\view\sucesso.php');
		exit;
	} else {
		header('location: ..\view\erro.php?e=OPN');
		exit;
	}   			
}

if ($resultado_numero_registros == 0) {
    $resultado_inserir = inserir('publica_vaga', $publica_vaga_model);
    
    if ($resultado_inserir == TRUE) {
		header('location:..\view\sucesso.php');
		exit;
	} else {
		header('location: ..\view\erro.php?e=OPN');
		exit;
	} 
} else {
    
	$condicao['usu_int_id'] = $_SESSION['usu_int_id'];
	$condicao['pub_vag_int_id'] = $_GET['pub_vag_int_id'];

	
	$resultado_atualizar = atualizar('publica_vaga', $publica_vaga_model, $condicao);
	
	if ($resultado_atualizar == TRUE) {
		
		header('location:..\view\sucesso.php');
		exit;
	} else {
		header('location: ..\view\erro.php?e=OPN');
		exit;
	}   
}
####################################################################################################

