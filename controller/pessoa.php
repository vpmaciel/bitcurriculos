<?php
session_start();

if(!isset($_SESSION['usu_id'])) {
    header('location:..\view\erro.php?e=UNL');
    exit;
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

$pessoa_model['usu_id'] = $_SESSION['usu_id'];

$resultado_numero_registros = retornar_numero_registros('pessoa', $pessoa_model);

$pessoa_model['pes_nome'] = $_GET['pes_nome'];
$pessoa_model['pes_url_repositorio_codigos'] = urlencode($_GET['pes_url_repositorio_codigos']);
$pessoa_model['pes_url_linkedin'] = urlencode($_GET['pes_url_linkedin']);
$pessoa_model['pes_data_nascimento'] = $_GET['pes_data_nascimento'];
$pessoa_model['pes_celular_numero'] = $_GET['pes_celular_numero'];
$pessoa_model['pes_sexo'] = $_GET['pes_sexo'];
$pessoa_model['pes_escolaridade'] = $_GET['pes_escolaridade'];
$pessoa_model['pes_estado_civil'] = $_GET['pes_estado_civil'];
$pessoa_model['pes_nacionalidade'] = $_GET['pes_nacionalidade'];
$pessoa_model['pes_possui_filhos'] = $_GET['pes_possui_filhos'];
$pessoa_model['pes_possui_deficiencia'] = $_GET['pes_possui_deficiencia'];
$pessoa_model['pes_pais'] = $_GET['pes_pais'];
$pessoa_model['pes_estado'] = $_GET['pes_estado'];
$pessoa_model['pes_cidade'] = $_GET['pes_cidade'];
$pessoa_model['pes_cnh'] = $_GET['pes_cnh'];
$pessoa_model['pes_ultimo_salario_mensal'] = $_GET['pes_ultimo_salario_mensal'];
$pessoa_model['pes_empregado_atualmente'] = $_GET['pes_empregado_atualmente'];
$pessoa_model['pes_procurando_emprego_atualmente'] = $_GET['pes_procurando_emprego_atualmente'];
$pessoa_model['pes_disponivel_viagens'] = $_GET['pes_disponivel_viagens'];
$pessoa_model['pes_trabalha_outras_cidades'] = $_GET['pes_trabalha_outras_cidades'];
$pessoa_model['pes_trabalha_exterior'] = $_GET['pes_trabalha_exterior'];
$pessoa_model['pes_trabalha_home_office'] = $_GET['pes_trabalha_home_office'];
$pessoa_model['pes_possui_carro'] = $_GET['pes_possui_carro'];
$pessoa_model['pes_possui_moto'] = $_GET['pes_possui_moto'];
$pessoa_model['pes_dispensado_servico_militar'] = $_GET['pes_dispensado_servico_militar'];

####################################################################################################

if ($resultado_numero_registros == 0) {
    $resultado_inserir = inserir('pessoa', $pessoa_model);
    
    if ($resultado_inserir == TRUE) {
        header('location:..\view\sucesso.php');
        exit;
	} else {
        header('location: ..\view\erro.php?e=OPN');
        exit;
	} 
} else {	
    
    $condicao['usu_id'] = $_SESSION['usu_id'];
    $resultado_atualizar = atualizar('pessoa', $pessoa_model, $condicao);

    if ($resultado_atualizar == TRUE) {
        header('location:..\view\sucesso.php');
        exit;
    } else {
        header('location: ..\view\erro.php?e=OPN');
        exit;
    }    
}

####################################################################################################

CARREGAR:
{   
    $pessoa_model = array();
    $pessoa_model['usu_id'] = $_SESSION['usu_id'];    
    $pessoa_json = json_decode(selecionar('pessoa', $pessoa_model));      
 
    foreach($pessoa_json as $registro) {            
        $pessoa_model['usu_id'] = $registro->usu_id;
        $pessoa_model['pes_nome'] = $registro->pes_nome;
        $pessoa_model['pes_url_repositorio_codigos'] = $registro->pes_url_repositorio_codigos;
        $pessoa_model['pes_url_linkedin'] = $registro->pes_url_linkedin;
        $pessoa_model['pes_data_nascimento'] = $registro->pes_data_nascimento;
        $pessoa_model['pes_celular_numero'] = $registro->pes_celular_numero;
        $pessoa_model['pes_sexo'] = $registro->pes_sexo;
        $pessoa_model['pes_escolaridade'] = $registro->pes_escolaridade;
        $pessoa_model['pes_estado_civil'] = $registro->pes_estado_civil;
        $pessoa_model['pes_nacionalidade'] = $registro->pes_nacionalidade;
        $pessoa_model['pes_possui_filhos'] = $registro->pes_possui_filhos;
        $pessoa_model['pes_possui_deficiencia'] = $registro->pes_possui_deficiencia;
        $pessoa_model['pes_pais'] = $registro->pes_pais;
        $pessoa_model['pes_estado'] = $registro->pes_estado;
        $pessoa_model['pes_cidade'] = $registro->pes_cidade;
        $pessoa_model['pes_cnh'] = $registro->pes_cnh;
        $pessoa_model['pes_ultimo_salario_mensal'] = $registro->pes_ultimo_salario_mensal;
        $pessoa_model['pes_empregado_atualmente'] = $registro->pes_empregado_atualmente;
        $pessoa_model['pes_procurando_emprego_atualmente'] = $registro->pes_procurando_emprego_atualmente;
        $pessoa_model['pes_disponivel_viagens'] = $registro->pes_disponivel_viagens;
        $pessoa_model['pes_trabalha_outras_cidades'] = $registro->pes_trabalha_outras_cidades;
        $pessoa_model['pes_trabalha_exterior'] = $registro->pes_trabalha_exterior;
        $pessoa_model['pes_trabalha_home_office'] = $registro->pes_trabalha_home_office;
        $pessoa_model['pes_possui_carro'] = $registro->pes_possui_carro;
        $pessoa_model['pes_possui_moto'] = $registro->pes_possui_moto;
        $pessoa_model['pes_dispensado_servico_militar'] = $registro->pes_dispensado_servico_militar;
        
    }

    $str = '';
    foreach ($pessoa_model as $k=>$v){ 
        $str .= "pessoa_model[$k]" . "=" . $v . "&";                        
    }
    header('location: ..\view\pessoa.php?'. $str. "'");
    exit;
}
####################################################################################################