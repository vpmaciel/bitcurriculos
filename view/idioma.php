<?php
session_start();

if(!isset($_SESSION['usu_int_id'])) {
	header('location:..\view\erro.php?e=UNL');
}
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
echo $H1 . 'IDIOMA' . $H1_;

$FORM_PESSOA = '<form action="../controller/curso.php" method="post">';

echo $FORM_PESSOA;

echo $TABLE;

echo $TR . $TD . $LABEL . 'Idioma' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="int_idioma">';
echo $SELECT;
foreach ($array_idioma as $indice => $int_idioma) {	
	if ($indice == 0) {
		continue;
	}
	echo ($int_idioma == $pessoa['int_idioma'])	? "<option value=$indice selected>$int_idioma</option>" : "<option value=$indice>$int_idioma</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Nível de conhecimento' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="int_nivel_conhecimento">';
echo $SELECT;
foreach ($array_nivel_conhecimento_idioma as $indice => $int_nivel_conhecimento) {	
	if ($indice == 0) {
		continue;
	}
	echo ($int_nivel_conhecimento == $pessoa['int_nivel_conhecimento'])	? "<option value=$indice selected>$int_nivel_conhecimento</option>" : "<option value=$indice>$int_nivel_conhecimento</option>";
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