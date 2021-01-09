<?php
session_start();

if(!isset($_SESSION['usu_int_id'])) {
	header('location:..\view\erro.php?e=UNL');
}

require_once '../lib/biblioteca.php';
require_once '../model/model.php';
require_once '../sql/sql.php';

define('FPDF_FONTPATH', '../fpdf/font/');
require ('../fpdf/fpdf.php');
$pdf = new FPDF("P", "pt", "A4");
$pdf->AddPage();

$pdf->SetFont('arial', 'B', 12);
$pdf->Ln(20);
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "CURRÍCULO"), 0, 1, 'C'); 

$pdf->SetFont('arial', 'B', 12);
$pdf->Ln(20);
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "DADOS PESSOAIS"), 0, 1, 'L'); 

$pessoa_model['usu_int_id'] = $_SESSION['usu_int_id'];
$condicao = $pessoa_model['usu_int_id'];
$pessoa_json = json_decode(selecionar('pessoa', $pessoa_model));      
$pessoa_model = array();
foreach($pessoa_json as $registro) {            
	$pessoa_model['usu_int_id'] = $registro->usu_int_id;
	$pessoa_model['pes_char_nome'] = $registro->pes_char_nome;
	$pessoa_model['pes_char_url_repositorio_codigos'] = $registro->pes_char_url_repositorio_codigos;
	$pessoa_model['pes_char_url_linkedin'] = $registro->pes_char_url_linkedin;
	$pessoa_model['pes_char_data_nascimento'] = $registro->pes_char_data_nascimento;
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

$pdf->Ln(10);
$saida = "NOME: ". $pessoa_model['pes_char_nome'];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "REPOSITÓRIO DE CÓDIGOS: ". urldecode($pessoa_model['pes_char_url_repositorio_codigos']);	
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "LINKEDIN: ". urldecode($pessoa_model['pes_char_url_linkedin']);
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "DATA DE NASCIMENTO: ". $pessoa_model['pes_char_data_nascimento'];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "CELULAR: ". $pessoa_model['pes_char_celular_numero'];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "SEXO: ". $array_sexo[$pessoa_model['pes_bit_sexo']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "ESCOLARIDADE: ". $array_escolaridade[$pessoa_model['pes_int_escolaridade']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "ESTADO CIVÍL: ". $array_estado_civil[$pessoa_model['pes_int_estado_civil']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "NACIONALIDADE: ". $array_nacionalidade[$pessoa_model['pes_int_nacionalidade']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "POSSUI FILHOS: ". $array_resposta[$pessoa_model['pes_bit_possui_filhos']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "POSSUI DEFICIÊNCIA: ". $array_resposta[$pessoa_model['pes_bit_possui_deficiencia']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "PAÍS: ". $array_pais[$pessoa_model['pes_int_pais']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "ESTADO: ". $array_estado[$pessoa_model['pes_int_estado']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "CIDADE: ". $array_cidade[$pessoa_model['pes_int_cidade']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "CNH: ". $array_cnh[$pessoa_model['pes_int_cnh']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "ÚTIMO SALÁRIO MENSAL (R$): ". $array_ultimo_salario[$pessoa_model['pes_int_ultimo_salario_mensal']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "EMPREGADO ATUALMENTE: ". $array_resposta[$pessoa_model['pes_bit_empregado_atualmente']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "PROCUANDO EMPREGO ATUALMENTE: ". $array_resposta[$pessoa_model['pes_bit_procurando_emprego_atualmente']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "DISPONÍVEL PARA VIAGEM: ". $array_resposta[$pessoa_model['pes_bit_disponivel_viagens']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "PODE TRABALHAR EM OUTRAS CIDADES: ". $array_resposta[$pessoa_model['pes_bit_trabalha_outras_cidades']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "PODE TRABALHAR EM OUTROS PAÍSES: ". $array_resposta[$pessoa_model['pes_bit_trabalha_exterior']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "PODE TRABALHAR HOME OFFICE: ". $array_resposta[$pessoa_model['pes_bit_trabalha_home_office']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "POSSUI CARRO: ". $array_resposta[$pessoa_model['pes_bit_possui_carro']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "POSSUI MOTO: ". $array_resposta[$pessoa_model['pes_bit_possui_moto']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
$pdf->Ln(10);
$saida = "FOI DISPENSADO DO SERVIÇO MILITAR: ". $array_resposta[$pessoa_model['pes_bit_dispensado_servico_militar']];
$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');

####################################################################################################

$pessoa_model['usu_int_id'] = $_SESSION['usu_int_id'];
$condicao = $pessoa_model['usu_int_id'];
$pessoa_json = json_decode(selecionar('objetivo_profissional', $pessoa_model));      

if (!empty($pessoa_json)) {
	$pdf->Ln(20);	
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "OBJETIVO PROFISSIONAL"), 0, 1, 'L');
}

$objetivo_profissional_model = array();
foreach($pessoa_json as $registro) {            
	$objetivo_profissional_model['obj_pro_char_cargo'] = $registro->obj_pro_char_cargo;
	$objetivo_profissional_model['obj_pro_int_pretensao_salarial'] = $registro->obj_pro_int_pretensao_salarial;
	$objetivo_profissional_model['obj_pro_int_contrato'] = $registro->obj_pro_int_contrato;
}


$lista = $this->ObjetivoProfissionalModel->ObterRegistro(null, $usuario);;
	
if (count($lista) > 0) {
	$pdf->Ln(20);
	$pdf->SetFont('arial', 'B', 12);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "OBJETIVO PROFISSIONAL"), 0, 1, 'L');
}

$caminhoCompletoArquivo = "../file/curriculo" . $_SESSION['usu_int_id'] . ".pdf";
	/* executa a geração do seu PDF*/
$pdf->Output('f', $caminhoCompletoArquivo);

/* adiciona o arquivo físico ao e-mail */
if (smtpmailer('vpmaciel@live.com', 'vpmaciel@gmail.com', 'BitCurriculos', 'Sua Senha','Candidato', 'curriculo'. $_SESSION['usu_int_id'] .'.pdf')) {
	header("location:..\\view\\sucesso.php?msg=Sua senha é foi enviada para seu e-mail !");
}

/* exclui o arquivo pdf do servidor */
if (file_exists ($caminhoCompletoArquivo)) {
	sleep(5);
	//unlink($caminhoCompletoArquivo);
}
//}
