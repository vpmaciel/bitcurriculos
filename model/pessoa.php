<?php
$pessoa = array(
    'usuario' => '',
    'nome' => 'vicente paulo maciel',
    'data_nascimento' => '',
    'celular_numero' => '',
    'sexo' => '',
    'escolaridade' => '',
    'estado_civil' => '',
    'nacionalidade' => '',
    'possui_filhos' => '',
    'possui_deficiencia' => '',
    'pais' => '',
    'estado' => '',
    'cidade' => '',
    'cnh' => '',
    'ultimo_salario' => '',
    'empregado_atualmente' => '',
    'procurando_emprego_atualmente' => '',
    'disponivel_viagens' => '',
    'trabalha_outras_cidades' => '',
    'trabalha_exterior' => '',
    'trabalha_home_office' => '',
    'possui_carro' => '',
    'possui_moto' => ''
);
$condicao = array(
    'usuario' => '1',
    'nome' => 'vicente paulo maciel',
);
foreach($pessoa as $chave => $valor){
         echo "{$chave}: {$valor}\n";
 }
 echo "<br><hr><br>";
require_once '../model/sql.php';
SQL::inserir($pessoa,'pessoa');
echo "<br><hr><br>";
SQL::atualizar($pessoa,'pessoa',$condicao);
