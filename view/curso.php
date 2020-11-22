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

$FORM = '<form action="../controller/curso.php" method="post">';

echo $FORM;

echo $TABLE;

echo $TR . $TD . $LABEL . 'Nome do curso' . $LABEL_ . $TD_ . $TR_; 
$pessoa['char_nome'] = isset($_POST['char_nome'])?$_POST['char_nome']:'';
$INPUT = '<input type="text" name="char_nome" required size="70" minlength="10" maxlength="50" value="' . $pessoa['char_nome'] .'">';
echo $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Instituição' . $LABEL_ . $TD_ . $TR_; 
$pessoa['char_instituicao'] = isset($_POST['char_instituicao'])?$_POST['char_instituicao']:'';
$INPUT = '<input type="text" name="char_instituicao" required size="70" minlength="10" maxlength="50" value="' . $pessoa['char_instituicao'] .'">';
echo $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Ano de início' . $LABEL_ . $TD_ . $TR_; 
$pessoa['year_ano_inicio'] = isset($_POST['year_ano_inicio'])?$_POST['year_ano_inicio']:'';
$INPUT = '<input type="text" name="year_ano_inicio" size="70" required onkeypress="$(this).mask(\'0000\');" minlength="4" maxlength="4" value="' . $pessoa['year_ano_inicio'] .'">';
echo $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Ano de conclusão' . $LABEL_ . $TD_ . $TR_; 
$pessoa['year_ano_conclusao'] = isset($_POST['year_ano_conclusao'])?$_POST['year_ano_conclusao']:'';
$INPUT = '<input type="text" name="year_ano_conclusao" size="70" required onkeypress="$(this).mask(\'0000\');" minlength="4" maxlength="4" value="' . $pessoa['year_ano_conclusao'] .'">';
echo $TD . $INPUT . $TD_ . $TR_; 

echo $TR . $TD . $LABEL . 'Situação' . $LABEL_ . $TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="int_situacao">';
echo $SELECT;
foreach ($situacao_lista as $indice => $int_situacao) {	
	if ($indice == 0) {
		continue;
	}
	echo ($int_situacao == $pessoa['int_situacao'])	? "<option value=$indice selected>$int_situacao</option>" : "<option value=$indice>$int_situacao</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Nível' . $LABEL_ . $TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="int_nivel">';
echo $SELECT;
foreach ($escolaridade_lista as $indice => $int_nivel) {	
	if ($indice == 0) {
		continue;
	}
	echo ($int_nivel == $pessoa['int_nivel'])	? "<option value=$indice selected>$int_nivel</option>" : "<option value=$indice>$int_nivel</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

$SUBMIT = '<input type="submit" value="Salvar" onclick=\'return confirmar();\'>';
echo $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;