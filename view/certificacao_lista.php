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

$FORM = '<form action="../controller/certificacao.php" method="get">';

echo $TABLE;
echo $TR . $TH . 'Certificação' . $TH_ . $TR_;

$certificacao_model['usu_id'] = $_SESSION['usu_id'];
$condicao = $certificacao_model['usu_id'];
$certificacao_json = json_decode(selecionar('certificacao', $certificacao_model));
echo $TR . $TD . '<a href="certificacao.php">Cadastrar Certificação</a><br>' . $TD_ . $TR_; 
echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_;

foreach($certificacao_json as $registro) {
	$certificacao_model = array();
	$certificacao_model['cer_id'] = $registro->cer_id;
	$certificacao_model['cer_certificacao'] = $registro->cer_certificacao;
	$certificacao_model['cer_instituicao'] = $registro->cer_instituicao;
	$certificacao_model['cer_ano_obtencao'] = $registro->cer_ano_obtencao;
	$str = '';
	foreach ($certificacao_model as $k=>$v){ 
		$str .= "certificacao_model[$k]" . "=" . $v . "&";                        
	}
	echo $TR . $TD . $LABEL . 'Certificação: ' . $certificacao_model['cer_certificacao'] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Instituição: ' . $certificacao_model['cer_instituicao'] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . 'Ano de obtenção: ' . $certificacao_model['cer_ano_obtencao'] . $LABEL_ . $TD_ . $TR_; 
	echo $TR . $TD . '<a href="../view/certificacao.php?' . $str . '">Editar</a>' . $TD_ . $TR_; 
	echo $TR . $TD . '<a href="../controller/certificacao.php?acao=excluir&' . $str .'"  onclick="return confirm("Confirmar Operação ?")>Excluir</a>' . $TD_ . $TR_; 
	echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 	
}

echo $TABLE_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;