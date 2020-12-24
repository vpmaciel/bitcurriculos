<?php
session_start();

if(!isset($_SESSION['usu_int_id'])) {
	header('location:..\view\erro.php?e=UNL');
}
require_once '../lib/biblioteca.php';
require_once '../model/model.php';
require_once '../database/sql.php';

$pessoa_model['usu_int_id'] = $_SESSION['usu_int_id'];

$resultado = numero_registros('pessoa', $pessoa_model);

$pessoa_model['pes_char_nome'] = $_POST['pes_char_nome'];
$pessoa_model['pes_char_url_repositorio_codigos'] = $_POST['pes_char_url_repositorio_codigos'];
$pessoa_model['pes_char_url_linkedin'] = $_POST['pes_char_url_linkedin'];
$pessoa_model['pes_date_data_nascimento'] = $_POST['pes_date_data_nascimento'];
$pessoa_model['pes_char_celular_numero'] = $_POST['pes_char_celular_numero'];
$pessoa_model['pes_bit_sexo'] = $_POST['pes_bit_sexo'];
$pessoa_model['pes_int_escolaridade'] = $_POST['pes_int_escolaridade'];
$pessoa_model['pes_int_estado_civil'] = $_POST['pes_int_estado_civil'];
$pessoa_model['pes_int_nacionalidade'] = $_POST['pes_int_nacionalidade'];
$pessoa_model['pes_bit_possui_filhos'] = $_POST['pes_bit_possui_filhos'];
$pessoa_model['pes_bit_possui_deficiencia'] = $_POST['pes_bit_possui_deficiencia'];
$pessoa_model['pes_int_pais'] = $_POST['pes_int_pais'];
$pessoa_model['pes_int_estado'] = $_POST['pes_int_estado'];
$pessoa_model['pes_int_cidade'] = $_POST['pes_int_cidade'];
$pessoa_model['pes_int_cnh'] = $_POST['pes_int_cnh'];
$pessoa_model['pes_int_ultimo_salario_mensal'] = $_POST['pes_int_ultimo_salario_mensal'];
$pessoa_model['pes_bit_empregado_atualmente'] = $_POST['pes_bit_empregado_atualmente'];
$pessoa_model['pes_bit_procurando_emprego_atualmente'] = $_POST['pes_bit_procurando_emprego_atualmente'];
$pessoa_model['pes_bit_disponivel_viagens'] = $_POST['pes_bit_disponivel_viagens'];
$pessoa_model['pes_bit_trabalha_outras_cidades'] = $_POST['pes_bit_trabalha_outras_cidades'];
$pessoa_model['pes_bit_trabalha_exterior'] = $_POST['pes_bit_trabalha_exterior'];
$pessoa_model['pes_bit_trabalha_home_office'] = $_POST['pes_bit_trabalha_home_office'];
$pessoa_model['pes_bit_possui_carro'] = $_POST['pes_bit_possui_carro'];
$pessoa_model['pes_bit_possui_moto'] = $_POST['pes_bit_possui_moto'];
$pessoa_model['pes_bit_dispensado_servico_militar'] = $_POST['pes_bit_dispensado_servico_militar'];

if ($resultado == 0) {
    $resultado = inserir('pessoa', $pessoa_model);
    
    if ($resultado == TRUE) {
		if (smtpmailer('vpmaciel@live.com', 'vpmaciel@gmail.com', 'BitCurriculos', 'Sua Senha', $usuario_model['usu_int_senha'],'')) {
			header("location:..\\view\\sucesso.php?msg=Sua senha é foi enviada para seu e-mail !");
		}
	} else {
		if (!empty($error)) {
			header('location:..\view\erro.php?e=EEE');
		}	
	} 
} else {	
	if (!isset($_SESSION['usu_int_id'])) {
		$_SESSION['usu_int_id'] = $resultado;
		header('location:..\view\sucesso.php?msg=Sessão criada com sucesso !');
	} else {		
		header('location: ..\view\erro.php?e=OPN&msg="Usuário já está logado !');
	}
}

