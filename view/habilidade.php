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

echo $TR . $TD . $LABEL . 'HABILIDADE (LINGUAGEM DE PROGRAMAÇÃO / FRAMEWORK / BIBLIOTECA / TECNOLOGIA)' . $LABEL_ . $TD_ . $TR_; 
$pessoa['nome'] = isset($_POST['nome'])?$_POST['nome']:'';
$HABILIDADE = '<input type="text" name="nome" required size="70" minlength="10" maxlength="50" value="' . $pessoa['nome'] .'">';
echo $TR . $TD . $HABILIDADE . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'NÍVEL' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="nivel_conhecimento">';
echo $SELECT;
foreach ($nivel_conhecimento_lista as $indice => $nivel_conhecimento) {	
	if ($indice == 0) {
		continue;
	}
	echo ($nivel_conhecimento == $pessoa['nivel_conhecimento'])	? "<option value=$indice selected>$nivel_conhecimento</option>" : "<option value=$indice>$nivel_conhecimento</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

$SUBMIT = '<input type="submit" value="Salvar" onclick=\'return confirmar();\'>';
echo $TR . $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;