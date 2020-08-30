<?php
session_start();
require_once '../lib/biblioteca.php';
require_once '../model/pessoa.php';
echo $DOCTYPE;
echo $HTML;
echo $HEAD;
require_once 'cabecalho.php';
echo $HEAD_;
echo $BODY;
require_once 'menu.php';
echo $DIV_MAIN;
echo $H1 . 'DADOS PESSOAIS' . $H1_;

$FORM_PESSOA = '<form action="../controller/pessoa.php" method="post">';

echo $FORM_PESSOA;

echo $TABLE;

echo $TR . $TD . $LABEL . 'NOME' . $LABEL_ . $TD_ . $TR_; 
$pessoa['nome'] = isset($_POST['nome'])?$_POST['nome']:'';
$NOME = '<input type="text" name="nome" required size="70" minlength="10" maxlength="50" value="' . $pessoa['nome'] .'">';
echo $TR . $TD . $NOME . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'DATA DE MASCIMENTO' . $LABEL_ . $TD_ . $TR_; 
$pessoa['data_nascimento'] = isset($_POST['data_nascimento'])?$_POST['data_nascimento']:'';
$DATA_NASCIMENTO = '<input type="text" name="data_nascimento" required onkeypress="$(this).mask(\'00-00-0000\');" minlength="10" maxlength="10" value="' . $pessoa['data_nascimento'] .'">';
echo $TR . $TD . $DATA_NASCIMENTO . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'CELULAR' . $LABEL_ . $TD_ . $TR_; 
$pessoa['celular_numero'] = isset($_POST['celular_numero'])?$_POST['celular_numero']:'';
$CELULAR = '<input type="text" name="celular_numero" required onkeypress="$(this).mask(\'(00)0-0000-0000\');" minlength="15" maxlength="15" value="' . $pessoa['celular_numero'] .'">';
echo $TR . $TD . $CELULAR . $TD_ . $TR_; 

echo $TR . $TD . $LABEL . 'SEXO' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="sexo">';
echo $SELECT;
foreach ($sexo_lista as $indice => $sexo) {	
	echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'ESCOLARIDADE' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($escolaridade_lista as $indice => $sexo) {	
	echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'ESTADO CIVIL' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($estado_civil_lista as $indice => $sexo) {	
	echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'NACIONALIDADE' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($nacionalidade_lista as $indice => $sexo) {	
	echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'POSSUI FILHOS' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $sexo) {	
	echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'POSSUI DEFICIÊNCIA' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $sexo) {	
	echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'PAÍS' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($pais_lista as $indice => $sexo) {	
	echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'ESTADO' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($estado_lista as $indice => $sexo) {	
	echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'CIDADE' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($cidade_lista as $indice => $sexo) {	
	echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'CNH' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($cnh_lista as $indice => $sexo) {	
	echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'ÚLTIMO SALÁRIO MENSAL (R$)' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($salario_lista as $indice => $sexo) {	
	echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'EMPREGADO ATUALMENTE' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $sexo) {	
	echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'PROCURANDO NOVO EMPREGO ATUALMENTE' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $sexo) {	
	echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'DISPONÍVEL PARA VIAGEM' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $sexo) {	
	echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'PODE TRABALHAR EM OUTRAS CIDADES' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $sexo) {	
	echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'PODE TRABALHAR EM OUTROS PAÍSES' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $sexo) {	
	echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'PODE TRABALHAR HOME OFFICE' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $sexo) {	
	echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'POSSUI CARRO' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $sexo) {	
	echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'POSSUI MOTO' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $sexo) {	
	echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 
$pessoa['nome'] = isset($_POST['nome'])?$_POST['nome']:'';
$NOME = '<input type="submit" value="Salvar" onclick=\'return confirmar();\'>';
echo $TR . $TD . $NOME . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $BODY_;

echo $HTML_;

?>