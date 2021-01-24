<?php
session_start();

if(!isset($_SESSION['usu_id'])) {
	header('location:..\view\erro.php?e=UNL');
	exit;
}
require_once '../lib/biblioteca.php';
require_once '../model/model.php';
echo $DOCTYPE;
echo $HTML;
echo $HEAD;
require_once 'cabecalho.php';
echo $HEAD_;
echo $BODY;

echo $DIV_MAIN;

require_once 'menu.php';

$FORM = '<form action="../controller/curso.php" method="get">';

echo $FORM;
if (isset($_GET['curso_model'])) {
	$curso_model_get = $_GET['curso_model'];
}
echo $TABLE;
echo $TR . $TH . 'Curso' . $TH_ . $TR_;

$curso_model['cur_id'] = isset($_GET['curso_model']) ? $curso_model_get['cur_id'] : '';
$INPUT = '<input type="hidden" name="cur_id"  value="' . $curso_model['cur_id'] .'">';
echo $INPUT;

echo $TR . $TD . $LABEL . 'Nome do curso' . $LABEL_ . $TD_ . $TR_; 
$curso_model['cur_nome'] = isset($_GET['curso_model']) ? $curso_model_get['cur_nome'] : '';
$INPUT = '<input type="text" name="cur_nome" required minlength="1" maxlength="50" value="' . $curso_model['cur_nome'] .'">';
echo $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Instituição' . $LABEL_ . $TD_ . $TR_; 
$curso_model['cur_instituicao'] = isset($_GET['curso_model']) ? $curso_model_get['cur_instituicao'] : '';
$INPUT = '<input type="text" name="cur_instituicao" required minlength="1" maxlength="50" value="' . $curso_model['cur_instituicao'] .'">';
echo $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Ano de início' . $LABEL_ . $TD_ . $TR_; 
$curso_model['cur_ano_inicio'] = isset($_GET['curso_model']) ? $curso_model_get['cur_ano_inicio'] : '';
$INPUT = '<input type="number" name="cur_ano_inicio" required min="1950" max="3000" value="' . $curso_model['cur_ano_inicio'] .'">';
echo $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Ano de conclusão' . $LABEL_ . $TD_ . $TR_; 
$curso_model['cur_ano_conclusao'] = isset($_GET['curso_model']) ? $curso_model_get['cur_ano_conclusao'] : '';
$INPUT = '<input type="number" name="cur_ano_conclusao" min="1950" max="3000" value="' . $curso_model['cur_ano_conclusao'] .'">';
echo $TD . $INPUT . $TD_ . $TR_; 

echo $TR . $TD . $LABEL . 'Situação' . $LABEL_ . $TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="cur_situacao">';
echo $SELECT;
foreach ($array_situacao as $indice => $cur_situacao) {	
	echo ($indice == $curso_model_get['cur_situacao']) ? "<option value=$indice selected>$cur_situacao</option>" : "<option value=$indice>$cur_situacao</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Nível' . $LABEL_ . $TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="cur_nivel">';
echo $SELECT;
foreach ($array_escolaridade as $indice => $cur_nivel) {	
	echo ($indice == $curso_model_get['cur_nivel']) ? "<option value=$indice selected>$cur_nivel</option>" : "<option value=$indice>$cur_nivel</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR. $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_;

$SUBMIT = '<input type="submit" value="SALVAR" onclick=\'return confirmar();\'>';
echo $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;