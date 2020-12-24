<?php
session_start();

if(!isset($_SESSION['usu_int_id'])) {
	header('location:..\view\erro.php?e=UNL');
}
require_once '../lib/biblioteca.php';
require_once '../model/model.php';
require_once '../sql/sql.php';

$pessoa_model['usu_int_id'] = $_SESSION['usu_int_id'];

$resultado = numero_registros('pessoa', $pessoa_model);

if ($_GET['a'] != 's') {

    $pessoa_model['pes_char_nome'] = $_POST['pes_char_nome'];
    $pessoa_model['pes_char_url_repositorio_codigos'] = $_POST['pes_char_url_repositorio_codigos'];
    $pessoa_model['pes_char_url_linkedin'] = $_POST['pes_char_url_linkedin'];
    $pessoa_model['pes_date_data_nascimento'] = date("Y-m-d", strtotime($_POST['pes_date_data_nascimento']));
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
}
if ($resultado == 0) {
    $resultado = inserir('pessoa', $pessoa_model);
    
    if ($resultado == TRUE) {
		header('location:..\view\sucesso.php?msg=Operação realizada com sucesso !');
	} else {
		header('location: ..\view\erro.php?e=OPN');
	} 
} else {	
    $condicao = $pessoa_model['usu_int_id'];

    if ($_GET['a'] != 's') {
        $resultado = atualizar('pessoa', $pessoa_model, $condicao);
    
        if ($resultado == TRUE) {
            header('location:..\view\sucesso.php?msg=Operação realizada com sucesso !');
        } else {
            header('location: ..\view\erro.php?e=OPN');
        }
    } else {
        $pessoa_json = selecionar('pessoa', $condicao);

        foreach($pessoa_json as $registro) {            
            $_POST['pes_char_nome'] = $registro->pes_char_nome;
            $_POST['pes_char_url_repositorio_codigos'] = $registro->pes_char_url_repositorio_codigos;
            $_POST['pes_char_url_linkedin'] = $registro->pes_char_url_linkedin;
            $_POST['pes_date_data_nascimento'] = $date("d-m-Y", strtotime($registro->pes_date_data_nascimento));
            $_POST['pes_char_celular_numero'] = $registro->pes_char_celular_numero;
            $_POST['pes_bit_sexo'] = $registro->pes_bit_sexo;
            $_POST['pes_int_escolaridade'] = $pes_int_escolaridade;
            $_POST['pes_int_estado_civil'] = $pes_int_estado_civil;
            $_POST['pes_int_nacionalidade'] = $registro->pes_int_nacionalidade;
            $_POST['pes_bit_possui_filhos'] = $registro->pes_bit_possui_filhos;
            $_POST['pes_bit_possui_deficiencia'] = $registro->pes_bit_possui_deficiencia;
            $_POST['pes_int_pais'] = $registro->pes_int_pais;
            $_POST['pes_int_estado'] = $registro->pes_int_estado;
            $_POST['pes_int_cidade'] = $registro->pes_int_cidade;
            $_POST['pes_int_cnh'] = $registro->pes_int_cnh;
            $_POST['pes_int_ultimo_salario_mensal'] = $registro->pes_int_ultimo_salario_mensal;
            $_POST['pes_bit_empregado_atualmente'] = $registro->pes_bit_empregado_atualmente;
            $_POST['pes_bit_procurando_emprego_atualmente'] = $registro->pes_bit_procurando_emprego_atualmente;
            $_POST['pes_bit_disponivel_viagens'] = $registro->pes_bit_disponivel_viagens;
            $_POST['pes_bit_trabalha_outras_cidades'] = $registro->pes_bit_trabalha_outras_cidades;
            $_POST['pes_bit_trabalha_exterior'] = $registro->pes_bit_trabalha_exterior;
            $_POST['pes_bit_trabalha_home_office'] = $registro->pes_bit_trabalha_home_office;
            $_POST['pes_bit_possui_carro'] = $registro->pes_bit_possui_carro;
            $_POST['pes_bit_possui_moto'] = $registro->pes_bit_possui_moto;
            $_POST['pes_bit_dispensado_servico_militar'] = $registro->pes_bit_dispensado_servico_militar;
        }
        header('location: ..\view\pessoa.php');
    }
    
}

