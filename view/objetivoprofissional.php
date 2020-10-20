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
echo $H1 . 'OBJETIVO PROFISSIONAL' . $H1_;

$FORM = '<form action="../controller/objetivoprofissional.php" method="post">';

echo $FORM;

echo $TABLE;

echo $TR . $TD . $LABEL . 'CARGO' . $LABEL_ . $TD_ . $TR_; 
$pessoa['nome'] = isset($_POST['nome'])?$_POST['nome']:'';
$CARGO = '<input type="text" name="nome" required size="70" minlength="10" maxlength="50" value="' . $pessoa['nome'] .'">';
echo $TR . $TD . $CARGO . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'PRETENSÃO SALARIAL' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="sexo">';
echo $SELECT;
foreach ($sexo_lista as $indice => $sexo) {	
	echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'CONTRATO' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($escolaridade_lista as $indice => $escolaridade) {	
	if ($indice == 0) {
		continue;
	}
	echo ($escolaridade == $pessoa['escolaridade'])	? "<option value=$indice selected>$escolaridade</option>" : "<option value=$indice>$escolaridade</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

$SUBMIT = '<input type="submit" value="Salvar" onclick=\'return confirmar();\'>';
echo $TR . $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $BODY_;

echo $HTML_;