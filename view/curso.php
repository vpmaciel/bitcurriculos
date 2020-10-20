<?php
session_start();
require_once '../lib/biblioteca.php';
require_once '../model/model.php';
echo $DOCTYPE;
echo $HTML;
echo $HEAD;
require_once 'cabecalho.php';
echo $HEAD_;
echo $BODY;
require_once 'menu.php';
echo $DIV_MAIN;
echo $H1 . 'CURSO' . $H1_;

$FORM_PESSOA = '<form action="../controller/curso.php" method="post">';

echo $FORM_PESSOA;

echo $TABLE;

echo $TR . $TD . $LABEL . 'CURSO (NOME DO CURSO)' . $LABEL_ . $TD_ . $TR_; 
$pessoa['nome'] = isset($_POST['nome'])?$_POST['nome']:'';
$CURSO = '<input type="text" name="nome" required size="70" minlength="10" maxlength="50" value="' . $pessoa['nome'] .'">';
echo $TR . $TD . $CURSO . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'INSTITUIÇÃO' . $LABEL_ . $TD_ . $TR_; 
$pessoa['instituicao'] = isset($_POST['instituicao'])?$_POST['instituicao']:'';
$INSTITUICAO = '<input type="text" name="instituicao" required size="70" minlength="10" maxlength="50" value="' . $pessoa['instituicao'] .'">';
echo $TR . $TD . $INSTITUICAO . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'ANO DE INÍCIO' . $LABEL_ . $TD_ . $TR_; 
$pessoa['ano_inicio'] = isset($_POST['ano_inicio'])?$_POST['ano_inicio']:'';
$DATA_NASCIMENTO = '<input type="text" name="ano_inicio" size="70" required onkeypress="$(this).mask(\'0000\');" minlength="4" maxlength="4" value="' . $pessoa['ano_inicio'] .'">';
echo $TR . $TD . $DATA_NASCIMENTO . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'ANO DE CONCLUSÃO' . $LABEL_ . $TD_ . $TR_; 
$pessoa['ano_conclusao'] = isset($_POST['ano_conclusao'])?$_POST['ano_conclusao']:'';
$CELULAR = '<input type="text" name="ano_conclusao" size="70" required onkeypress="$(this).mask(\'0000\');" minlength="4" maxlength="4" value="' . $pessoa['ano_conclusao'] .'">';
echo $TR . $TD . $CELULAR . $TD_ . $TR_; 

echo $TR . $TD . $LABEL . 'SITUAÇÃO' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="situacao">';
echo $SELECT;
foreach ($situacao_lista as $indice => $situacao) {	
	if ($indice == 0) {
		continue;
	}
	echo ($situacao == $pessoa['situacao'])	? "<option value=$indice selected>$situacao</option>" : "<option value=$indice>$situacao</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'NÍVEL' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($escolaridade_lista as $indice => $escolaridade) {	
	if ($indice == 0) {
		continue;
	}
	echo ($escolaridade == $pessoa['escolaridade'])	? "<option value=$indice selected>$escolaridade</option>" : "<option value=$indice>$escolaridade</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

$SUBMIT = '<input type="submit" value="Salvar" onclick=\'return confirmar();\'>';
echo $TR . $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $BODY_;

echo $HTML_;