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
echo $H1 . 'SERVIÇOS' . $H1_;

$FORM = '<form action="../controller/servico.php" method="post">';

echo $FORM;

echo $TABLE;

echo $TR . $TD . $LABEL . 'Empresa ( Prestador de serviço )' . $LABEL_ . $TD_ . $TR_; 
$pessoa['ser_char_empresa'] = isset($_POST['ser_char_empresa'])?$_POST['ser_char_empresa']:'';
$INPUT = '<input type="text" name="ser_char_empresa" required size="70" minlength="1" maxlength="50" value="' . $pessoa['ser_char_empresa'] .'">';
echo $TR . $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Tipo de empresa' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="ser_int_tipo_empresa">';
echo $SELECT;
foreach ($array_tipo_empresa as $indice => $ser_int_tipo_empresa) {	
	if ($indice == 0) {
		continue;
	}
	echo ($ser_int_tipo_empresa == $pessoa['ser_int_tipo_empresa'])	? "<option value=$indice selected>$ser_int_tipo_empresa</option>" : "<option value=$indice>$ser_int_tipo_empresa</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Segmento empresarial' . $LABEL_ . $TD_ . $TR_; 
$pessoa['ser_char_segmento_empresarial'] = isset($_POST['ser_char_segmento_empresarial'])?$_POST['ser_char_segmento_empresarial']:'';
$INPUT = '<input type="text" name="ser_char_segmento_empresarial" required size="70" minlength="1" maxlength="50" value="' . $pessoa['ser_char_segmento_empresarial'] .'">';
echo $TR . $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Profissão' . $LABEL_ . $TD_ . $TR_; 
$pessoa['ser_char_profissao'] = isset($_POST['ser_char_profissao'])?$_POST['ser_char_profissao']:'';
$INPUT = '<input type="text" name="ser_char_profissao" required size="70" minlength="1" maxlength="50" value="' . $pessoa['ser_char_profissao'] .'">';
echo $TR . $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Estado' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="ser_int_estado">';
echo $SELECT;
foreach ($array_estado as $indice => $ser_int_estado) {	
	echo ($ser_int_estado == $pessoa['ser_int_estado'])	? "<option value=$indice selected>$ser_int_estado</option>" : "<option value=$indice>$ser_int_estado</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Cidade' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="ser_int_cidade">';
echo $SELECT;
foreach ($array_cidade as $indice => $ser_int_cidade) {	
	echo ($ser_int_cidade == $pessoa['ser_int_cidade'])	? "<option value=$indice selected>$ser_int_cidade</option>" : "<option value=$indice>$ser_int_cidade</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

$SUBMIT = '<input type="submit" value="Pesquisar" onclick=\'return confirmar();\'>';
echo $TR . $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;