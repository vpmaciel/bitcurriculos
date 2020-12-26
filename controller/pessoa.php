<?php
session_start();

if(!isset($_SESSION['usu_int_id'])) {
	header('location:..\view\erro.php?e=UNL');
}
require_once '../lib/biblioteca.php';
require_once '../model/model.php';
require_once '../sql/sql.php';

$acao = '';

if(isset($_GET['acao'])){
    $acao = $_GET['acao'];

    if ($acao == 'carregar') {
        goto CARREGAR;
    }
}

####################################################################################################

$pessoa_model['usu_int_id'] = $_SESSION['usu_int_id'];

$resultado_numero_registros = resultado_numero_registros('pessoa', $pessoa_model);

$pessoa_model['pes_char_nome'] = $_GET['pes_char_nome'];
$pessoa_model['pes_char_url_repositorio_codigos'] = urlencode($_GET['pes_char_url_repositorio_codigos']);
$pessoa_model['pes_char_url_linkedin'] = urlencode($_GET['pes_char_url_linkedin']);
$pessoa_model['pes_date_data_nascimento'] = date("Y-m-d", strtotime($_GET['pes_date_data_nascimento']));
$pessoa_model['pes_char_celular_numero'] = $_GET['pes_char_celular_numero'];
$pessoa_model['pes_bit_sexo'] = $_GET['pes_bit_sexo'];
$pessoa_model['pes_int_escolaridade'] = $_GET['pes_int_escolaridade'];
$pessoa_model['pes_int_estado_civil'] = $_GET['pes_int_estado_civil'];
$pessoa_model['pes_int_nacionalidade'] = $_GET['pes_int_nacionalidade'];
$pessoa_model['pes_bit_possui_filhos'] = $_GET['pes_bit_possui_filhos'];
$pessoa_model['pes_bit_possui_deficiencia'] = $_GET['pes_bit_possui_deficiencia'];
$pessoa_model['pes_int_pais'] = $_GET['pes_int_pais'];
$pessoa_model['pes_int_estado'] = $_GET['pes_int_estado'];
$pessoa_model['pes_int_cidade'] = $_GET['pes_int_cidade'];
$pessoa_model['pes_int_cnh'] = $_GET['pes_int_cnh'];
$pessoa_model['pes_int_ultimo_salario_mensal'] = $_GET['pes_int_ultimo_salario_mensal'];
$pessoa_model['pes_bit_empregado_atualmente'] = $_GET['pes_bit_empregado_atualmente'];
$pessoa_model['pes_bit_procurando_emprego_atualmente'] = $_GET['pes_bit_procurando_emprego_atualmente'];
$pessoa_model['pes_bit_disponivel_viagens'] = $_GET['pes_bit_disponivel_viagens'];
$pessoa_model['pes_bit_trabalha_outras_cidades'] = $_GET['pes_bit_trabalha_outras_cidades'];
$pessoa_model['pes_bit_trabalha_exterior'] = $_GET['pes_bit_trabalha_exterior'];
$pessoa_model['pes_bit_trabalha_home_office'] = $_GET['pes_bit_trabalha_home_office'];
$pessoa_model['pes_bit_possui_carro'] = $_GET['pes_bit_possui_carro'];
$pessoa_model['pes_bit_possui_moto'] = $_GET['pes_bit_possui_moto'];
$pessoa_model['pes_bit_dispensado_servico_militar'] = $_GET['pes_bit_dispensado_servico_militar'];

####################################################################################################

if ($resultado_numero_registros == 0) {
    $resultado_inserir = inserir('pessoa', $pessoa_model);
    
    if ($resultado_inserir == TRUE) {
		header('location:..\view\sucesso.php');
	} else {
		header('location: ..\view\erro.php?e=OPN');
	} 
} else {	
    
    $condicao['usu_int_id'] = $_SESSION['usu_int_id'];
    $resultado_atualizar = atualizar('pessoa', $pessoa_model, $condicao);

    if ($resultado_atualizar == TRUE) {
        header('location:..\view\sucesso.php');
    } else {
        header('location: ..\view\erro.php?e=OPN');
    }    
}

####################################################################################################

CARREGAR:
{    
    $pessoa_model['usu_int_id'] = $_SESSION['usu_int_id'];
    $condicao = $pessoa_model['usu_int_id'];
    $pessoa_json = json_decode(selecionar('pessoa', $pessoa_model));      
    //exit(print_r($pessoa_json));
    foreach($pessoa_json as $registro) {            
        $pessoa_model['usu_int_in'] = $registro->usu_int_in;
        $pessoa_model['pes_char_nome'] = $registro->pes_char_nome;
        $pessoa_model['pes_char_url_repositorio_codigos'] = $registro->pes_char_url_repositorio_codigos;
        $pessoa_model['pes_char_url_linkedin'] = $registro->pes_char_url_linkedin;
        $pessoa_model['pes_date_data_nascimento'] = date("d-m-Y", strtotime("" . $registro->pes_date_data_nascimento));
        $pessoa_model['pes_char_celular_numero'] = $registro->pes_char_celular_numero;
        $pessoa_model['pes_bit_sexo'] = $registro->pes_bit_sexo;
        $pessoa_model['pes_int_escolaridade'] = $registro->pes_int_escolaridade;
        $pessoa_model['pes_int_estado_civil'] = $registro->pes_int_estado_civil;
        $pessoa_model['pes_int_nacionalidade'] = $registro->pes_int_nacionalidade;
        $pessoa_model['pes_bit_possui_filhos'] = $registro->pes_bit_possui_filhos;
        $pessoa_model['pes_bit_possui_deficiencia'] = $registro->pes_bit_possui_deficiencia;
        $pessoa_model['pes_int_pais'] = $registro->pes_int_pais;
        $pessoa_model['pes_int_estado'] = $registro->pes_int_estado;
        $pessoa_model['pes_int_cidade'] = $registro->pes_int_cidade;
        $pessoa_model['pes_int_cnh'] = $registro->pes_int_cnh;
        $pessoa_model['pes_int_ultimo_salario_mensal'] = $registro->pes_int_ultimo_salario_mensal;
        $pessoa_model['pes_bit_empregado_atualmente'] = $registro->pes_bit_empregado_atualmente;
        $pessoa_model['pes_bit_procurando_emprego_atualmente'] = $registro->pes_bit_procurando_emprego_atualmente;
        $pessoa_model['pes_bit_disponivel_viagens'] = $registro->pes_bit_disponivel_viagens;
        $pessoa_model['pes_bit_trabalha_outras_cidades'] = $registro->pes_bit_trabalha_outras_cidades;
        $pessoa_model['pes_bit_trabalha_exterior'] = $registro->pes_bit_trabalha_exterior;
        $pessoa_model['pes_bit_trabalha_home_office'] = $registro->pes_bit_trabalha_home_office;
        $pessoa_model['pes_bit_possui_carro'] = $registro->pes_bit_possui_carro;
        $pessoa_model['pes_bit_possui_moto'] = $registro->pes_bit_possui_moto;
        $pessoa_model['pes_bit_dispensado_servico_militar'] = $registro->pes_bit_dispensado_servico_militar;
        
    }

    $str = '';
    foreach ($pessoa_model as $k=>$v){ 
        $str .= "pessoa_model[$k]" . "=" . $v . "&";                        
    }
    header('location: ..\view\pessoa.php?'. $str. "'");
}
####################################################################################################