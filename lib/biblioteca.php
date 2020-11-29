<?php
require_once 'retonar_cidade.php';
require_once 'remover_acento.php';
require_once 'retornar_cotacao_dolar.php';
require_once 'retornar_idioma.php';
require_once 'retornar_idioma.php';
require_once 'retornar_idioma.php';
require_once 'retornar_idioma.php';
require_once 'retornar_idioma.php';
require_once 'retornar_idioma.php';
require_once 'retornar_idioma.php';
require_once 'retornar_idioma.php';
require_once 'retornar_idioma.php';
require_once 'retornar_idioma.php';
require_once 'retornar_idioma.php';
require_once 'retornar_idioma.php';
require_once 'retornar_idioma.php';
require_once 'retornar_idioma.php';
require_once 'retornar_idioma.php';
require_once 'retornar_idioma.php';
require_once 'retornar_idioma.php';
require_once 'retornar_idioma.php';







function retornar_contrato() : array
{
    $VALOR = array(
        0 => 'TODOS',
        1 => 'EFETIVO (CLT)',
        2 => 'ESTÁGIO',
        3 => 'TEMPORÁRIO',
        4 => 'AUTÔNOMO',
        5 => 'PRESTADOR DE SERVIÇOS (PJ)',
        6 => 'TRAINEE',
        7 => 'COOPERADO',
        8 => 'OUTROS'
    );
    return $VALOR;
}

function retornar_escolaridade() : array {
    $VALOR = array(
        0 => 'TODOS',
        1 => 'PÓS DOUTORADO', 
        2 => 'DOUTORADO', 
        3 => 'MESTRADO', 
        4 => 'PÓS GRADUAÇÃO', 
        5 => 'MBA', 
        6 => 'SUPERIOR',            
        7 => 'TECNÓLOGO', 
        8 => 'TÉCNICO',
        9 => 'SEGUNDO GRAU',
        10 => 'PRIMEIRO GRAU',
    );
    return $VALOR;
}

function retornar_estado() : array {
    $VALOR = array(
        0 => 'TODOS',
        1 => 'ACRE',
        2 => 'ALAGOAS',
        3 => 'AMAPÁ',
        4 => 'AMAZONAS',
        5 => 'BAHIA',
        6 => 'CEARÁ',
        7 => 'DISTRITO FEDERAL',
        8 => 'ESPÍRITO SANTO',
        9 => 'GOIÁS',
        10 => 'MARANHÃO',
        11 => 'MATO GROSSO',
        12 => 'MATO GROSSO DO SUL',
        13 => 'MINAS GERAIS',
        14 => 'PARÁ',
        15 => 'PARAÍBA',
        16 => 'PARANÁ',
        17 => 'PERNAMBUCO',
        18 => 'PIAUÍ',
        19 => 'RIO DE JANEIRO',
        20 => 'RIO GRANDE DO NORTE',
        21 => 'RIO GRANDE DO SUL',
        22 => 'RONDÔNIA',
        23 => 'RORAIMA',
        24 => 'SANTA CATARINA',
        25 => 'SÃO PAULO',
        26 => 'SERGIPE',
        27 => 'TOCANTINS'
    );
    return $VALOR;
}

function retornar_estado_civil() : array {
    $VALOR = array(
        0 => 'TODOS',
        1 => 'SOLTEIRO',
        2 => 'CASADO',
        3 => 'SEPARADO',
        4 => 'DIVORCIADO',
        5 => 'VIÚVO'
    );
    return $VALOR;
}

function retornar_nacionalidade() : array{
    $VALOR = array(
        0 => 'TODAS',
        1 => 'BRASILEIRO(A) NATO (A)',
        2 => 'BRASILEIRO(A) NATURALIZADO (A)',
        3 => 'ESTRANGEIRO'
    );
    return $VALOR;
}

function retornar_nivel_conhecimento() : array {
    $VALOR = array(
        0 => 'TODOS',
        1 => 'BÁSICO',
        2 => 'INTERMEDIÁRIO',
        3 => 'AVANÇADO'
    );
    return $VALOR;
}

function retornar_nivel_conhecimento_idioma() : array {
    $VALOR = array(
        0 => 'TODOS',
        1 => 'BÁSICO',
        2 => 'INTERMEDIÁRIO',
        3 => 'AVANÇADO',
        4 => 'FLUENTE',
    );
    return $VALOR;
}
function retornar_pais() : array {
    $VALOR = array(
        0 => 'TODOS',
        1 => 'BRASIL',
        2 => 'EXTERIOR'
    );
    return $VALOR;
}

function retornar_pretensao_salarial() : array {
    $VALOR = array(        
        0 => 'TODOS',
        1 => 'MÍNIMO DE R$ 1.000,00',
        2 => 'MÍNIMO DE R$ 1.500,00',
        3 => 'MÍNIMO DE R$ 2.000,00',
        4 => 'MÍNIMO DE R$ 2.500,00',
        5 => 'MÍNIMO DE R$ 3.000,00',
        6 => 'MÍNIMO DE R$ 3.500,00',
        7 => 'MÍNIMO DE R$ 4.000,00',
        8 => 'MÍNIMO DE R$ 4.500,00',
        9 => 'MÍNIMO DE R$ 5.000,00',
        10 => 'MÍNIMO DE R$ 5.500,00',
        11 => 'MÍNIMO DE R$ 6.000,00',
        12 => 'MÍNIMO DE R$ 6.500,00',
        13 => 'MÍNIMO DE R$ 7.000,00',
        14 => 'MÍNIMO DE R$ 7.500,00',
        15 => 'MÍNIMO DE R$ 8.000,00',
        16 => 'MÍNIMO DE R$ 8.500,00',
        17 => 'MÍNIMO DE R$ 9.000,00',
        18 => 'MÍNIMO DE R$ 9.500,00',
        19 => 'MÍNIMO DE R$ 10.000,00',
        20 => 'MÍNIMO DE R$ 11.000,00',
        21 => 'MÍNIMO DE R$ 12.000,00',
        22 => 'MÍNIMO DE R$ 13.000,00',
        23 => 'MÍNIMO DE R$ 14.000,00',
        24 => 'MÍNIMO DE R$ 15.000,00',
        25 => 'MÍNIMO DE R$ 16.000,00',
        26 => 'MÍNIMO DE R$ 17.000,00',
        27 => 'MÍNIMO DE R$ 18.000,00',
        28 => 'MÍNIMO DE R$ 19.000,00',
        29 => 'MÍNIMO DE R$ 20.000,00',
        30 => 'MÍNIMO DE R$ 25.000,00',
        31 => 'MÍNIMO DE R$ 30.000,00',
        32 => 'MÍNIMO DE R$ 35.000,00',
        33 => 'MÍNIMO DE R$ 40.000,00',
        34 => 'MÍNIMO DE R$ 45.000,00',
        35 => 'MÍNIMO DE R$ 50.000,00',
    );
    return $VALOR;
}

function retornar_ultimo_salario() : array {
    $VALOR = array(        
        0 => 'TODOS',
        1 => 'DE R$ 1.000,00 ATÉ R$ 1.999,99',
        2 => 'DE R$ 2.000,00 ATÉ R$ 2.999,99',
        3 => 'DE R$ 3.000,00 ATÉ R$ 3.999,99',
        4 => 'DE R$ 4.000,00 ATÉ R$ 4.999,99',
        5 => 'DE R$ 5.000,00 ATÉ R$ 5.999,99',
        6 => 'DE R$ 6.000,00 ATÉ R$ 6.999,99',
        7 => 'DE R$ 7.000,00 ATÉ R$ 7.999,99',
        8 => 'DE R$ 8.000,00 ATÉ R$ 8.999,99',
        9 => 'DE R$ 9.000,00 ATÉ R$ 9.999,99',
        10 => 'DE R$ 10.000,00 ATÉ R$ 19.999,99',
        11 => 'DE R$ 20.000,00 ATÉ R$ 29.999,99',
        12 => 'DE R$ 30.000,00 ATÉ R$ 39.999,99',
        13 => 'DE R$ 40.000,00 ATÉ R$ 49.999,99',
        14 => 'ACIMA R$ 50.000,00',
    );
    return $VALOR;
}
function retornar_resposta() : array {
    $VALOR = array(
        0 => 'TODOS',
        1 => 'SIM',
        2 => 'NÃO'
    );
    return $VALOR;
}

function retornar_sexo() : array {
    $VALOR = array(
        0 => 'TODOS',
        1 => 'MASCULINO',
        2 => 'FEMININO'
    );
    return $VALOR;
}

function retornar_situacao() : array {
    $VALOR = array(
        0 => 'TODOS',
        1 => 'CONCLUÍDO',
        2 => 'NÃO CONCLUÍDO',
        3 => 'EM ANDAMENTO'
    );
    return $VALOR;
}






$array_sexo = Sexo::$VALOR;

$array_escolaridade = Escolaridade::$VALOR;

$array_contrato = Contrato::$VALOR;

$array_pretensao_salarial = PretensaoSalarial::$VALOR;

$array_ultimo_salario = UltimoSalario::$VALOR;

$array_estado = Estado::$VALOR;



$array_estado_civil = EstadoCivil::$VALOR;

$array_nacionalidade = Nacionalidade::$VALOR;

$array_pais = Pais::$VALOR;

$array_resposta = Resposta::$VALOR;

$array_situacao = Situacao::$VALOR;

$array_usuario = Usuario::$VALOR;

$array_nivel_conhecimento = NivelConhecimento::$VALOR;

$array_nivel_conhecimento_idioma = NivelConhecimentoIdioma::$VALOR;





$DOCTYPE = '<!DOCTYPE html>';

$HTML = '<html>';

$HTML_ = '</html>';

$HEAD = '<head>';

$HEAD_ = '</head>';

$BODY = '<body>';

$BODY_ = '</body>';

$DIV_ = '</div>';

$DIV_MAIN = '<div function="coluna direita">';

$TD = '<td>';

$TD_ = '</td>';

$TR = '<tr>';

$TR_ = '</tr>';

$H1 = '<h1>';

$H1_ = '</h1>';

$FORM_ = '</form>';

$TABLE = '<table align="center">';

$TABLE_ = '</table>';

$LABEL = '<label>';

$LABEL_ = '</label>';

$SELECT_ = '</select>';