<?php
session_start();

if(!isset($_SESSION['usu_id'])) {
	header('location:..\view\erro.php?e=UNL');
	exit;
}

require_once '../lib/biblioteca.php';
require_once '../model/model.php';
require_once '../sql/sql.php';

define('FPDF_FONTPATH', '../fpdf/font/');
require ('../fpdf/fpdf.php');
$pdf = new FPDF("P", "pt", "A4");
$pdf->AddPage();

$pdf->SetFont('arial', 'B', 10);
$pdf->Ln(20);
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "CURRÍCULO"), 0, 1, 'C'); 

$pdf->SetFont('arial', 'B', 10);
$pdf->Ln(20);
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "DADOS PESSOAIS"), 0, 1, 'L'); 
$pdf->Ln(10);
$pdf->SetFont('arial', '', 10);

$pessoa_model['usu_id'] = $_SESSION['usu_id'];
$condicao = $pessoa_model['usu_id'];
$pessoa_json = json_decode(selecionar('pessoa', $pessoa_model));      
$pessoa_model = array();
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

$pdf->Ln(10);
$saida = "NOME: ". $pessoa_model['pes_nome'];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "REPOSITÓRIO DE CÓDIGOS: ". urldecode($pessoa_model['pes_url_repositorio_codigos']);	
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "LINKEDIN: ". urldecode($pessoa_model['pes_url_linkedin']);
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "DATA DE NASCIMENTO: ". $pessoa_model['pes_data_nascimento'];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "CELULAR: ". $pessoa_model['pes_celular_numero'];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "SEXO: ". $array_sexo[$pessoa_model['pes_sexo']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "ESCOLARIDADE: ". $array_escolaridade[$pessoa_model['pes_escolaridade']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "ESTADO CIVÍL: ". $array_estado_civil[$pessoa_model['pes_estado_civil']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "NACIONALIDADE: ". $array_nacionalidade[$pessoa_model['pes_nacionalidade']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "POSSUI FILHOS: ". $array_resposta[$pessoa_model['pes_possui_filhos']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "POSSUI DEFICIÊNCIA: ". $array_resposta[$pessoa_model['pes_possui_deficiencia']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "PAÍS: ". $array_pais[$pessoa_model['pes_pais']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "ESTADO: ". $array_estado[$pessoa_model['pes_estado']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "CIDADE: ". $array_cidade[$pessoa_model['pes_cidade']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "CNH: ". $array_cnh[$pessoa_model['pes_cnh']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "ÚTIMO SALÁRIO MENSAL (R$): ". $array_ultimo_salario[$pessoa_model['pes_ultimo_salario_mensal']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "EMPREGADO ATUALMENTE: ". $array_resposta[$pessoa_model['pes_empregado_atualmente']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "PROCUANDO EMPREGO ATUALMENTE: ". $array_resposta[$pessoa_model['pes_procurando_emprego_atualmente']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "DISPONÍVEL PARA VIAGEM: ". $array_resposta[$pessoa_model['pes_disponivel_viagens']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "PODE TRABALHAR EM OUTRAS CIDADES: ". $array_resposta[$pessoa_model['pes_trabalha_outras_cidades']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "PODE TRABALHAR EM OUTROS PAÍSES: ". $array_resposta[$pessoa_model['pes_trabalha_exterior']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "PODE TRABALHAR HOME OFFICE: ". $array_resposta[$pessoa_model['pes_trabalha_home_office']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "POSSUI CARRO: ". $array_resposta[$pessoa_model['pes_possui_carro']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "POSSUI MOTO: ". $array_resposta[$pessoa_model['pes_possui_moto']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "FOI DISPENSADO DO SERVIÇO MILITAR: ". $array_resposta[$pessoa_model['pes_dispensado_servico_militar']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');

####################################################################################################

$usuario_model['usu_id'] = $_SESSION['usu_id'];
$pessoa_json = json_decode(selecionar('objetivo_profissional', $usuario_model));      

if (!empty($pessoa_json)) {
	$pdf->SetFont('arial', 'B', 10);
	$pdf->Ln(20);	
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "OBJETIVO PROFISSIONAL"), 0, 1, 'L');
	$pdf->Ln(10);
	$pdf->SetFont('arial', '', 10);
}

foreach($pessoa_json as $registro) {
	$valor = $registro->obj_pro_cargo;
	$pdf->Ln(20);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "CARGO: $valor"), 0, 1, 'L');
	$valor = $array_pretensao_salarial[$registro->obj_pro_pretensao_salarial];
	$pdf->Ln(10);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "PRETENSÃO SALARIAL: $valor"), 0, 1, 'L');
	$valor = $array_contrato[$registro->obj_pro_contrato];
	$pdf->Ln(10);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "CONTRATO: $valor"), 0, 1, 'L');
}

####################################################################################################

$usuario_model['usu_id'] = $_SESSION['usu_id'];
$pessoa_json = json_decode(selecionar('curso', $usuario_model));      

if (!empty($pessoa_json)) {
	$pdf->SetFont('arial', 'B', 10);
	$pdf->Ln(20);	
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "CURSOS"), 0, 1, 'L');
	$pdf->Ln(10);
	$pdf->SetFont('arial', '', 10);
}

foreach($pessoa_json as $registro) {
	$valor = $registro->cur_nome;
	$pdf->Ln(20);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "NOME DO CURSO: $valor"), 0, 1, 'L');
	$valor = $registro->cur_instituicao;
	$pdf->Ln(10);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "INSTITUIÇÃO: $valor"), 0, 1, 'L');
	$valor = $registro->cur_ano_inicio;
	$pdf->Ln(10);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "ANO DE INÍCIO: $valor"), 0, 1, 'L');
	$valor = $registro->cur_ano_conclusao;
	$pdf->Ln(10);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "ANO DE CONCLUSÃO: $valor"), 0, 1, 'L');
	$valor = $array_situacao[$registro->cur_situacao];
	$pdf->Ln(10);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "SITUAÇÃO: $valor"), 0, 1, 'L');
	$valor = $array_escolaridade[$registro->cur_nivel];
	$pdf->Ln(10);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "NÍVEL: $valor"), 0, 1, 'L');	
}

####################################################################################################

$usuario_model['usu_id'] = $_SESSION['usu_id'];
$pessoa_json = json_decode(selecionar('certificacao', $usuario_model));      

if (!empty($pessoa_json)) {
	$pdf->SetFont('arial', 'B', 10);
	$pdf->Ln(20);	
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "CETIFICAÇÃO"), 0, 1, 'L');
	$pdf->Ln(10);
	$pdf->SetFont('arial', '', 10);
}

foreach($pessoa_json as $registro) {
	$valor = $registro->cer_certificacao;
	$pdf->Ln(20);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "CERTIFICAÇÃO: $valor"), 0, 1, 'L');
	$valor = $registro->cer_instituicao;
	$pdf->Ln(10);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "INSTITUIÇÃO: $valor"), 0, 1, 'L');
	$valor = $registro->cer_ano_obtencao;
	$pdf->Ln(10);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "ANO DE OBTENÇÃO: $valor"), 0, 1, 'L');
}

####################################################################################################

$usuario_model['usu_id'] = $_SESSION['usu_id'];
$pessoa_json = json_decode(selecionar('idioma', $usuario_model));      

if (!empty($pessoa_json)) {
	$pdf->SetFont('arial', 'B', 10);
	$pdf->Ln(20);	
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "IDIOMAS"), 0, 1, 'L');
	$pdf->Ln(10);
	$pdf->SetFont('arial', '', 10);
}

foreach($pessoa_json as $registro) {
	$valor = $array_idioma[$registro->idi_idioma];
	$pdf->Ln(20);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "IDIOMA: $valor"), 0, 1, 'L');
	$valor = $array_nivel_conhecimento_idioma[$registro->idi_nivel_conhecimento];
	$pdf->Ln(10);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "NÍVEL DE CONHECIMENTO: $valor"), 0, 1, 'L');
}

####################################################################################################

$usuario_model['usu_id'] = $_SESSION['usu_id'];
$pessoa_json = json_decode(selecionar('habilidade', $usuario_model));      

if (!empty($pessoa_json)) {
	$pdf->SetFont('arial', 'B', 10);
	$pdf->Ln(20);	
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "HABILIDADES"), 0, 1, 'L');
	$pdf->Ln(10);
	$pdf->SetFont('arial', '', 10);
}

foreach($pessoa_json as $registro) {
	$valor = $registro->hab_habilidade;
	$pdf->Ln(20);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "HABILIDADE: $valor"), 0, 1, 'L');
	$valor = $array_nivel_conhecimento[$registro->hab_nivel_conhecimento];
	$pdf->Ln(10);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "NÍVEL: $valor"), 0, 1, 'L');
}

####################################################################################################

$usuario_model['usu_id'] = $_SESSION['usu_id'];
$pessoa_json = json_decode(selecionar('experiencia_profissional', $usuario_model));      

if (!empty($pessoa_json)) {
	$pdf->SetFont('arial', 'B', 10);
	$pdf->Ln(20);	
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "EXPERIÊNCIA PROFISSIONAL"), 0, 1, 'L');
	$pdf->Ln(10);
	$pdf->SetFont('arial', '', 10);
}

foreach($pessoa_json as $registro) {
	$valor = $registro->exp_prof_empresa;
	$pdf->Ln(20);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "EMPRESA: $valor"), 0, 1, 'L');
	$valor = $registro->exp_prof_cargo;
	$pdf->Ln(10);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "CARGO: $valor"), 0, 1, 'L');
	$valor = $registro->exp_prof_data_admissao;
	$pdf->Ln(10);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "DATA DE ADMISSÃO: $valor"), 0, 1, 'L');
	$valor = $registro->exp_prof_data_saida;
	$pdf->Ln(10);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "DATA DE SAÍDA: $valor"), 0, 1, 'L');
	$valor = $registro->exp_prof_funcoes;
	$pdf->Ln(10);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "FUNÇÕES: $valor"), 0, 1, 'L');
}


$caminhoCompletoArquivo = "../file/curriculo" . $_SESSION['usu_id'] . ".pdf";
	/* executa a geração do seu PDF*/
$pdf->Output('f', $caminhoCompletoArquivo);

/* adiciona o arquivo físico ao e-mail */
if (smtpmailer('vpmaciel@live.com', 'vpmaciel@gmail.com', 'BitCurriculos', 'Sua Senha','Candidato', 'curriculo'. $_SESSION['usu_id'] .'.pdf')) {
	header("location:..\\view\\sucesso.php?msg=Seu currículo foi enviado para seu e-mail !");
}

/* exclui o arquivo pdf do servidor */
if (file_exists ($caminhoCompletoArquivo)) {
	sleep(5);
	//unlink($caminhoCompletoArquivo);
}
//}
