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
echo $H1 . 'PESQUISAR VAGAS' . $H1_;

$FORM = '<form action="../controller/curso.php" method="post">';

echo $FORM;

echo $TABLE;

echo $TR . $TD . $LABEL . 'Cargo' . $LABEL_ . $TD_ . $TR_; 
$pessoa['char_cargo'] = isset($_POST['char_cargo'])?$_POST['char_cargo']:'';
$INPUT = '<input type="text" name="char_cargo" required size="70" minlength="1" maxlength="50" value="' . $pessoa['char_cargo'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Estado' . $LABEL_ . $TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="int_estado">';
echo $SELECT;
foreach ($array_estado as $indice => $int_estado) {		
	echo ($int_estado == $pessoa['int_estado'])	? "<option value=$indice selected>$int_estado</option>" : "<option value=$indice>$int_estado</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Cidade' . $LABEL_ . $TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="int_int_cidade">';
echo $SELECT;
foreach ($array_cidade as $indice => $int_cidade) {		
	echo ($int_cidade == $pessoa['int_cidade'])	? "<option value=$indice selected>$int_cidade</option>" : "<option value=$indice>$int_cidade</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

$SUBMIT = '<input type="submit" value="Salvar" onclick=\'return confirmar();\'>';
echo $TR. $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

require_once 'rodape.php';

echo $DIV_;

echo $BODY_;

echo $HTML_;