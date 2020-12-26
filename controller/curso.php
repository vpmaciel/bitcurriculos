<?php

session_start();

if(!isset($_SESSION['usu_int_id'])) {
	header('location:..\view\erro.php?e=UNL');
}
require_once '../lib/biblioteca.php';
require_once '../model/model.php';
require_once '../sql/sql.php';

$curso_model['usu_int_id'] = $_SESSION['usu_int_id'];

$resultado = numero_registros('curso', $curso_model);

$curso_model['cur_int_id'] = $_GET['cur_int_id'];
$curso_model['usu_int_id'] = $_SESSION['usu_int_id'];
$curso_model['cur_char_nome'] = $_GET['cur_char_nome'];
$curso_model['cur_char_instituicao'] = $_GET['cur_char_instituicao'];
$curso_model['cur_year_ano_inicio'] = $_GET['cur_year_ano_inicio'];
$curso_model['cur_year_ano_conclusao'] = $_GET['cur_year_ano_conclusao'];
$curso_model['cur_int_situacao'] = $_GET['cur_int_situacao'];
$curso_model['cur_int_nivel'] = $_GET['cur_int_nivel'];

if ($resultado == 0) {												# Inserir registro no banco de dados
    $resultado = inserir('curso', $curso_model);
    
    if ($resultado == TRUE) {
		header('location:..\view\sucesso.php');
	} else {
		header('location: ..\view\erro.php?e=OPN');
	} 
} else {															# Atualizar registro no banco de dados
    
	$condicao['usu_int_id'] = $_SESSION['usu_int_id'];
	$condicao['cur_int_id'] = $_GET['cur_int_id'];


	$resultado = atualizar('curso', $curso_model, $condicao);

	if ($resultado == TRUE) {
		header('location:..\view\sucesso.php');
	} else {
		header('location: ..\view\erro.php?e=OPN');
	}   
}

{
	$condicao = $curso_model['usu_int_id'];
	$condicao = $curso_model['cur_int_id'];
	$curso_json = json_decode(selecionar('curso', $curso_model));      
	
	foreach($curso_json as $registro) {            
		$curso_model['cur_int_id'] = $registro->cur_int_id;
		$curso_model['usu_int_id'] = $registro->usu_int_id;
		$curso_model['cur_char_nome'] = $registro->cur_char_nome;
		$curso_model['cur_char_instituicao'] = $registro->cur_char_instituicao;
		$curso_model['cur_year_ano_inicio'] = $registro->cur_year_ano_inicio;
		$curso_model['cur_year_ano_conclusao'] = $registro->cur_year_ano_conclusao;
		$curso_model['cur_int_situacao'] = $registro->cur_int_situacao;
		$curso_model['cur_int_nivel'] = $registro->cur_int_nivel;
	}

	$str = '';
	foreach ($curso_model as $k=>$v){ 
		$str .= "curso_model[$k]" . "=" . $v . "&";                        
	}
	header('location: ..\view\curso.php?'. $str. "'");
}
