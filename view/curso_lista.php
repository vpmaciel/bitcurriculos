<?php
session_start();

if(!isset($_SESSION['usu_id'])) {
	header('location:..\view\erro.php?e=UNL');
	exit;
}
require_once '../lib/biblioteca.php';
require_once '../model/model.php';
require_once '../sql/sql.php';
echo $DOCTYPE;
echo $HTML;
echo $HEAD;
require_once 'cabecalho.php';
echo $HEAD_;
echo $BODY;

echo $DIV_MAIN;

require_once 'menu.php';

$FORM = '<form action="../controller/curso.php" method="get">';

echo $TABLE;
echo $TR . $TH . 'Curso' . $TH_ . $TR_;

$curso_model['usu_id'] = $_SESSION['usu_id'];
$condicao = $curso_model['usu_id'];
$curso_json = json_decode(selecionar('curso', $curso_model));
echo $TR . $TD . '<a href="curso.php">Cadastrar Curso</a><br>' . $TD_ . $TR_; 
echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_;

foreach($curso_json as $registro) {
	$curso_model = array();
	$curso_model['cur_id'] = $registro->cur_id;
	$curso_model['cur_nome'] = $registro->cur_nome;
	$curso_model['cur_instituicao'] = $registro->cur_instituicao;
	$curso_model['cur_ano_inicio'] = $registro->cur_ano_inicio;
	$curso_model['cur_ano_conclusao'] = $registro->cur_ano_conclusao;
	$curso_model['cur_situacao'] = $registro->cur_situacao;
	$curso_model['cur_nivel'] = $registro->cur_nivel;
	$str = '';
	foreach ($curso_model as $k=>$v){ 
		$str .= "curso_model[$k]" . "=" . $v . "&";                        
	}

	echo $TR . $TD . $LABEL . 'Nome do curso: ' . $curso_model['cur_nome'] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Instituição: ' . $curso_model['cur_instituicao'] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Ano de início: ' . $curso_model['cur_ano_inicio'] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Ano de conclusão: ' . $curso_model['cur_ano_conclusao'] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Situação: ' . $array_situacao[$curso_model['cur_situacao']] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Nível: ' . $array_escolaridade[$curso_model['cur_nivel']] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . '<a href="../view/curso.php?' . $str . '">Editar</a>' . $TD_ . $TR_; 
	echo $TR . $TD . '<a href="../controller/curso.php?acao=excluir&' . $str . ' " onclick="return confirmar();">Excluir</a>' . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 	
}

echo $TABLE_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;