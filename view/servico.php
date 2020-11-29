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
echo $H1 . 'SERVIÇOS' . $H1_;

$FORM = '<form action="../controller/servico.php" method="post">';

echo $FORM;

echo $TABLE;

echo $TR . $TD . $LABEL . 'Empresa / Prestador de serviço' . $LABEL_ . $TD_ . $TR_; 
$pessoa['empresa'] = isset($_POST['empresa'])?$_POST['empresa']:'';
$INPUT = '<input type="text" name="empresa" required size="70" minlength="1" maxlength="50" value="' . $pessoa['empresa'] .'">';
echo $TR . $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Tipo de empresa' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="int_tipo_empresa">';
echo $SELECT;
foreach ($array_tipo_empresa as $indice => $int_tipo_empresa) {	
	if ($indice == 0) {
		continue;
	}
	echo ($int_tipo_empresa == $pessoa['int_tipo_empresa'])	? "<option value=$indice selected>$int_tipo_empresa</option>" : "<option value=$indice>$int_tipo_empresa</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Segmento' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="int_segmento_empresa">';

echo $SELECT;
foreach ($array_segmento_empresa as $indice => $int_segmento_empresa) {	
	if ($indice == 0) {
		continue;
	}
	echo ($int_segmento_empresa == $pessoa['int_segmento_empresa']) ? "<option value=$indice selected>$int_segmento_empresa</option>" : "<option value=$indice>$int_segmento_empresa</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Cargo' . $LABEL_ . $TD_ . $TR_; 
$pessoa['char_cargo'] = isset($_POST['char_cargo'])?$_POST['char_cargo']:'';
$INPUT = '<input type="text" name="char_cargo" required size="70" minlength="1" maxlength="50" value="' . $pessoa['char_cargo'] .'">';
echo $TR . $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Serviço prestado' . $LABEL_ . $TD_ . $TR_; 
$pessoa['char_servico_prestado'] = isset($_POST['char_servico_prestado'])?$_POST['char_servico_prestado']:'';
$TEXTAREA = '<textarea id="char_servico_prestado" name="char_servico_prestado" rows="2" cols="50" maxlength="200">' . $pessoa['char_servico_prestado'] .'</textarea>';
echo $TR . $TD . $TEXTAREA . $TD_ . $TR_; 

echo $TR . $TD . $LABEL . 'Total de funcionários' . $LABEL_ . $TD_ . $TR_; 
$pessoa['int_total_funcionarios'] = isset($_POST['int_total_funcionarios'])?$_POST['int_total_funcionarios']:'';
$INPUT = '<input type="number" name="int_total_funcionarios" size="70" required min="1" max="1000000" value="' . $pessoa['int_total_funcionarios'] .'">';
echo $TR . $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Celular' . $LABEL_ . $TD_ . $TR_; 
$pessoa['char_celular'] = isset($_POST['char_celular'])?$_POST['char_celular']:'';
$INPUT = '<input type="text" name="char_celular" required size="70" minlength="10" maxlength="50" value="' . $pessoa['char_celular'] .'">';
echo $TR . $TD . $INPUT . $TD_ . $TR_;


echo $TR . $TD . $LABEL . 'Estado' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="int_estado">';
echo $SELECT;
foreach ($array_estado as $indice => $int_estado) {	
	if ($indice == 0) {
		continue;
	}
	echo ($int_estado == $pessoa['int_estado'])	? "<option value=$indice selected>$int_estado</option>" : "<option value=$indice>$int_estado</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Cidade' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="int_cidade">';
echo $SELECT;
foreach ($array_cidade as $indice => $int_cidade) {	
	if ($indice == 0) {
		continue;
	}
	echo ($int_cidade == $pessoa['int_cidade'])	? "<option value=$indice selected>$int_cidade</option>" : "<option value=$indice>$int_cidade</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

$SUBMIT = '<input type="submit" value="Salvar" onclick=\'return confirmar();\'>';
echo $TR . $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

require_once 'rodape.php';

echo $DIV_;

echo $BODY_;

echo $HTML_;