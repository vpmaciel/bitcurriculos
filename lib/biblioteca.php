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




$array_escolaridade = Escolaridade::$VALOR;

$array_contrato = Contrato::$VALOR;

$array_estado = Estado::$VALOR;

$array_estado_civil = EstadoCivil::$VALOR;

$array_nacionalidade = Nacionalidade::$VALOR;

$array_pais = Pais::$VALOR;

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