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
echo $H1 . 'DADOS PESSOAIS' . $H1_;

$FORM_PESSOA = '<form action="../controller/pessoa.php" method="post">';

echo $FORM_PESSOA;

echo $TABLE;

echo $TR . $TD . $LABEL . 'CURSO' . $LABEL_ . $TD_ . $TR_; 
$pessoa['nome'] = isset($_POST['nome'])?$_POST['nome']:'';
$CURSO = '<input type="text" name="nome" required size="70" minlength="10" maxlength="50" value="' . $pessoa['nome'] .'">';
echo $TR . $TD . $CURSO . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'DATA DE NASCIMENTO' . $LABEL_ . $TD_ . $TR_; 
$pessoa['data_nascimento'] = isset($_POST['data_nascimento'])?$_POST['data_nascimento']:'';
$DATA_NASCIMENTO = '<input type="text" name="data_nascimento" size="70" required onkeypress="$(this).mask(\'00-00-0000\');" minlength="10" maxlength="10" value="' . $pessoa['data_nascimento'] .'">';
echo $TR . $TD . $DATA_NASCIMENTO . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'CELULAR' . $LABEL_ . $TD_ . $TR_; 
$pessoa['celular_numero'] = isset($_POST['celular_numero'])?$_POST['celular_numero']:'';
$CELULAR = '<input type="text" name="celular_numero" size="70" required onkeypress="$(this).mask(\'(00)0-0000-0000\');" minlength="15" maxlength="15" value="' . $pessoa['celular_numero'] .'">';
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
foreach ($escolaridade_lista as $indice => $escolaridade) {	
	if ($indice == 0) {
		continue;
	}
	echo ($escolaridade == $pessoa['escolaridade'])	? "<option value=$indice selected>$escolaridade</option>" : "<option value=$indice>$escolaridade</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'ESTADO CIVIL' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($estado_civil_lista as $indice => $estado_civil) {	
	if ($indice == 0) {
		continue;
	}
	echo ($estado_civil == $pessoa['estado_civil'])	? "<option value=$indice selected>$estado_civil</option>" : "<option value=$indice>$estado_civil</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'NACIONALIDADE' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($nacionalidade_lista as $indice => $nacionalidade) {	
	if ($indice == 0) {
		continue;
	}
	echo ($nacionalidade == $pessoa['nacionalidade'])	? "<option value=$indice selected>$nacionalidade</option>" : "<option value=$indice>$nacionalidade</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'POSSUI FILHOS' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $possui_filhos) {	
	if ($indice == 0) {
		continue;
	}
	echo ($possui_filhos == $pessoa['possui_filhos'])	? "<option value=$indice selected>$possui_filhos</option>" : "<option value=$indice>$possui_filhos</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'POSSUI DEFICIÊNCIA' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $possui_deficiencia) {	
	if ($indice == 0) {
		continue;
	}
	echo ($possui_deficiencia == $pessoa['possui_deficiencia'])	? "<option value=$indice selected>$possui_deficiencia</option>" : "<option value=$indice>$possui_deficiencia</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'PAÍS' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($pais_lista as $indice => $pais) {	
	if ($indice == 0) {
		continue;
	}
	echo ($pais == $pessoa['pais'])	? "<option value=$indice selected>$pais</option>" : "<option value=$indice>$pais</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'ESTADO' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($estado_lista as $indice => $estado) {	
	if ($indice == 0) {
		continue;
	}
	echo ($estado == $pessoa['estado'])	? "<option value=$indice selected>$estado</option>" : "<option value=$indice>$estado</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'CIDADE' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($cidade_lista as $indice => $cidade) {	
	if ($indice == 0) {
		continue;
	}
	echo ($cidade == $pessoa['cidade'])	? "<option value=$indice selected>$cidade</option>" : "<option value=$indice>$cidade</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'CNH' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($cnh_lista as $indice => $cnh) {	
	if ($indice == 0) {
		continue;
	}
	echo ($cnh == $pessoa['cnh'])	? "<option value=$indice selected>$cnh</option>" : "<option value=$indice>$cnh</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'ÚLTIMO SALÁRIO MENSAL (R$)' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($ultimo_salario_lista as $indice => $ultimo_salario_mensal) {	
	if ($indice == 0) {
		continue;
	}
	echo ($ultimo_salario_mensal == $pessoa['ultimo_salario_mensal'])	? "<option value=$indice selected>$ultimo_salario_mensal</option>" : "<option value=$indice>$ultimo_salario_mensal</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'EMPREGADO ATUALMENTE' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $empregado_atualmente) {	
	if ($indice == 0) {
		continue;
	}
	echo ($empregado_atualmente == $pessoa['empregado_atualmente'])	? "<option value=$indice selected>$empregado_atualmente</option>" : "<option value=$indice>$empregado_atualmente</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'PROCURANDO NOVO EMPREGO ATUALMENTE' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $procurando_novo_emprego_atualmente) {	
	if ($indice == 0) {
		continue;
	}
	echo ($procurando_novo_emprego_atualmente == $pessoa['procurando_novo_emprego_atualmente'])	? "<option value=$indice selected>$procurando_novo_emprego_atualmente</option>" : "<option value=$indice>$procurando_novo_emprego_atualmente</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'DISPONÍVEL PARA VIAGEM' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $disponivel_para_viagem) {	
	if ($indice == 0) {
		continue;
	}
	echo ($disponivel_para_viagem == $pessoa['disponivel_para_viagem'])	? "<option value=$indice selected>$disponivel_para_viagem</option>" : "<option value=$indice>$disponivel_para_viagem</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'PODE TRABALHAR EM OUTRAS CIDADES' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $disponivel_para_trabalhar_outras_cidades) {	
	if ($indice == 0) {
		continue;
	}
	echo ($disponivel_para_trabalhar_outras_cidades == $pessoa['disponivel_para_trabalhar_outras_cidades'])	? "<option value=$indice selected>$disponivel_para_trabalhar_outras_cidades</option>" : "<option value=$indice>$disponivel_para_trabalhar_outras_cidades</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'PODE TRABALHAR EM OUTROS PAÍSES' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $disponivel_para_trabalhar_outros_paises) {	
	if ($indice == 0) {
		continue;
	}
	echo ($disponivel_para_trabalhar_outros_paises == $pessoa['disponivel_para_trabalhar_outros_paises'])	? "<option value=$indice selected>$disponivel_para_trabalhar_outros_paises</option>" : "<option value=$indice>$disponivel_para_trabalhar_outros_paises</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'PODE TRABALHAR HOME OFFICE' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $disponivel_para_trabalhar_home_office) {	
	if ($indice == 0) {
		continue;
	}
	echo ($disponivel_para_trabalhar_home_office == $pessoa['disponivel_para_trabalhar_home_office'])	? "<option value=$indice selected>$disponivel_para_trabalhar_home_office</option>" : "<option value=$indice>$disponivel_para_trabalhar_home_office</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'POSSUI CARRO' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $possui_carro) {	
	if ($indice == 0) {
		continue;
	}
	echo ($possui_carro == $pessoa['possui_carro'])	? "<option value=$indice selected>$possui_carro</option>" : "<option value=$indice>$possui_carro</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . 'POSSUI MOTO' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $possui_moto) {	
	if ($indice == 0) {
		continue;
	}
	echo ($possui_moto == $pessoa['possui_moto'])	? "<option value=$indice selected>$possui_moto</option>" : "<option value=$indice>$possui_moto</option>";
}
echo $SELECT_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

$SUBMIT = '<input type="submit" value="Salvar" onclick=\'return confirmar();\'>';
echo $TR . $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $BODY_;

echo $HTML_;