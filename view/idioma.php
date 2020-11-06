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
echo $H1 . 'IDIOMA' . $H1_;

$FORM_PESSOA = '<form action="../controller/curso.php" method="post">';

echo $FORM_PESSOA;

echo $TABLE;

echo $TR . $TD . $LABEL . 'IDIOMA' . $LABEL_ . $TD_; 
echo $TD;
$SELECT = '<select name="idioma">';
echo $SELECT;
foreach ($idioma_lista as $indice => $idioma) {	
	if ($indice == 0) {
		continue;
	}
	echo ($idioma == $pessoa['idioma'])	? "<option value=$indice selected>$idioma</option>" : "<option value=$indice>$idioma</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'NÍVEL DE CONHECIMENTO' . $LABEL_ . $TD_; 
echo $TD;
$SELECT = '<select name="nivel_conhecimento_idioma">';
echo $SELECT;
foreach ($nivel_conhecimento_idioma_lista as $indice => $nivel_conhecimento_idioma) {	
	if ($indice == 0) {
		continue;
	}
	echo ($nivel_conhecimento_idioma == $pessoa['nivel_conhecimento_idioma'])	? "<option value=$indice selected>$nivel_conhecimento_idioma</option>" : "<option value=$indice>$nivel_conhecimento_idioma</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_; 

$SUBMIT = '<input type="submit" value="Salvar" onclick=\'return confirmar();\'>';
echo $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;