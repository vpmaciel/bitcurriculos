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
echo $H1 . 'HABILIDADE' . $H1_;

$FORM_PESSOA = '<form action="../controller/habilidade.php" method="post">';

echo $FORM_PESSOA;

echo $TABLE;

echo $TR . $TD . $LABEL . 'Habilidade' . $LABEL_ . $TD_ . $TR_; 
$pessoa['char_habilidade'] = isset($_POST['char_habilidade'])?$_POST['char_habilidade']:'';
$INPUT = '<input type="text" name="char_habilidade" required size="70" minlength="10" maxlength="50" value="' . $pessoa['char_habilidade'] .'">';
echo $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Nível' . $LABEL_ . $TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="int_nivel_conhecimento">';
echo $SELECT;
foreach ($array_nivel_conhecimento as $indice => $int_nivel_conhecimento) {	
	if ($indice == 0) {
		continue;
	}
	echo ($int_nivel_conhecimento == $pessoa['int_nivel_conhecimento'])	? "<option value=$indice selected>$int_nivel_conhecimento</option>" : "<option value=$indice>$int_nivel_conhecimento</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

$SUBMIT = '<input type="submit" value="Salvar" onclick=\'return confirmar();\'>';
echo $TD . $SUBMIT . $TD_ . $TR_;

echo $TR . $TD . $LABEL; require_once 'rodape.php'; echo $LABEL_ . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;