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
	$saida = "Nome: ". $pessoa_model['pes_char_nome'];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
	$pdf->Ln(10);
	$saida = "URL de repositório de códigos: ". $pessoa_model['pes_char_url_repositorio_codigos'];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
	$pdf->Ln(10);
	$saida = "URL do linkedin: ". $pessoa_model['pes_char_url_linkedin'];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');	
	$pdf->Ln(10);
	$saida = "Data de nascimento: ". $pessoa_model['pes_char_data_nascimento'];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
	$pdf->Ln(10);
	$saida = "Celular: ". $pessoa_model['pes_char_celular_numero'];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
	$pdf->Ln(10);
	$saida = "Sexo: ". $pessoa_model['pes_bit_sexo'];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
	$pdf->Ln(10);
	$saida = "Escolaridade: ". $pessoa_model['pes_int_escolaridade'];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
	$pdf->Ln(10);
	$saida = "Estado civil: ". $pessoa_model['pes_int_estado_civil'];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
	$pdf->Ln(10);
	$saida = "Nacionalidade: ". $pessoa_model['pes_int_nacionalidade'];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
	$pdf->Ln(10);
	$saida = "Possui filhos: ". $pessoa_model['pes_bit_possui_filhos'];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
	$pdf->Ln(10);
	$saida = "Possui deficiência: ". $pessoa_model['pes_bit_possui_deficiencia'];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
	$pdf->Ln(10);
	$saida = "País: ". $pessoa_model['pes_int_pais'];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
	$pdf->Ln(10);
	$saida = "Estado: ". $pessoa_model['pes_int_estado'];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
	$pdf->Ln(10);
	$saida = "Cidade: ". $pessoa_model['pes_int_cidade'];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
	$pdf->Ln(10);
	$saida = "CNH: ". $pessoa_model['pes_int_cnh'];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
	$pdf->Ln(10);
	$saida = "Último salário mensal (R$): ". $pessoa_model['pes_int_ultimo_salario_mensal'];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
	$pdf->Ln(10);
	$saida = "Está empregado atualmente: ". $pessoa_model['pes_bit_empregado_atualmente'];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
	$pdf->Ln(10);
	$saida = "Está porcurando emprego atualmente: ". $pessoa_model['pes_bit_procurando_emprego_atualmente'];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
	$pdf->Ln(10);
	$saida = "Está disponível para viagem: ". $pessoa_model['pes_bit_disponivel_viagens'];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
	$pdf->Ln(10);
	$saida = "Pode trabalhar em outras cidades: ". $pessoa_model['pes_bit_trabalha_outras_cidades'];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
	$pdf->Ln(10);
	$saida = "Pode trabalhar em outros países: ". $pessoa_model['pes_bit_trabalha_exterior'];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
	$pdf->Ln(10);
	$saida = "Pode trabalhar home office: ". $pessoa_model['pes_bit_trabalha_home_office'];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
	$pdf->Ln(10);
	$saida = "Possui carro: ". $pessoa_model['pes_bit_possui_carro'];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
	$pdf->Ln(10);
	$saida = "Possui moto: ". $pessoa_model['pes_bit_possui_moto'];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
	$pdf->Ln(10);
	$saida = "Foi dispensado do serviço militar: ". $pessoa_model['pes_bit_dispensado_servico_militar'];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $saida), 0, 1, 'L');
/*
$lista = $this->PessoaModel->ObterRegistro($usuario);

while ($cadastro = array_shift($lista)) {
	$nome = $cadastro[Constante::NOME];
	$pdf->SetFont('arial', 'B', 14);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $cadastro[Constante::NOME]), 0, 1, 'C');
	$pdf->SetFont('arial', 'B', 8);
	$pdf->Ln(10);
	$mensagem = $escolaridade_array[$cadastro[Constante::ESCOLARIDADE]] . ", " . $estado_civil_array[$cadastro[Constante::ESTADO_CIVIL]] . ", " . $cadastro[Constante::IDADE] ." ANOS";
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', $mensagem), 0, 1, 'C');
}


$lista = $this->PessoaModel->ObterRegistro($usuario);
while ($cadastro = array_shift($lista)) {
	$pdf->Ln(15);
	$pdf->SetFont('arial', '', 12);
	$mensagem = $nacionalidade_array[$cadastro[Constante::NACIONALIDADE]];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "NACIONALIDADE: $mensagem"), 0, 1, 'L');
	$pdf->Ln(10);
	$lista_usuario = $this->UsuarioModel->ObterRegistro($usuario, NULL);
	
	
	while ($cadastro_usuario = array_shift($lista_usuario)) {
		$email = $cadastro_usuario[Constante::E_MAIL];
		$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "E-MAIL: $email"), 0, 1, 'L');
	}
	
}

$lista = $this->ObjetivoProfissionalModel->ObterRegistro(null, $usuario);;
	
if (count($lista) > 0) {
	$pdf->Ln(20);
	$pdf->SetFont('arial', 'B', 12);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "OBJETIVO PROFISSIONAL"), 0, 1, 'L');
}
while ($cadastro = array_shift($lista)) {
	$pdf->Ln(15);
	$pdf->SetFont('arial', '', 12);
	$cargo = $cadastro[Constante::CARGO];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "CARGO: $cargo"), 0, 1, 'L');
	$pdf->Ln(10);            
	$contrato = $contrato_array[$cadastro[Constante::CONTRATO]];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "CONTRATO: $contrato"), 0, 1, 'L');
	$pdf->Ln(10);
	$pretensao_salarial = $pretensao_salarial_array[$cadastro[Constante::PRETENSAO_SALARIAL]];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "PRETENSÃO SALARIAL: $pretensao_salarial"), 0, 1, 'L');
	$pdf->Ln(10);
	$nivel_hierarquico = $nivel_hierarquico_array[$cadastro[Constante::NIVEL_HIERARQUICO]];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "NÍVEL HIERÁRQUICO: $nivel_hierarquico"), 0, 1, 'L');
	$pdf->Ln(10);
	$area_interesse = $area_interesse_array[$cadastro[Constante::AREA_INTERESSE]];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "ÁREA DE INTERESSE: $area_interesse"), 0, 1, 'L');
}

$lista = $this->CursoModel->ObterRegistro(null, $usuario);
if (count($lista) > 0) {
	$pdf->Ln(20);
	$pdf->SetFont('arial', 'B', 12);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "CURSOS"), 0, 1, 'L');
}
$pdf->SetFont('arial', '', 12);
while ($cadastro = array_shift($lista)) {
	$pdf->Ln(15);            
	$instituicao = $cadastro[Constante::INSTITUICAO];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "INSTITUIÇÃO: $instituicao"), 0, 1, 'L');
	$pdf->Ln(10);            
	$curso = $cadastro[Constante::CURSO];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "CURSO: $curso"), 0, 1, 'L');
	$pdf->Ln(10);
	$ano_inicio = $cadastro[Constante::ANO_INICIO];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "ANO DE INÍCIO: $ano_inicio"), 0, 1, 'L');
	$pdf->Ln(10);
	$ano_conclusao = $cadastro[Constante::ANO_CONCLUSAO];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "ANO DE CONCLUSÃO: $ano_conclusao"), 0, 1, 'L');
	$pdf->Ln(10);
	$situacao = $situacao_array[$cadastro[Constante::SITUACAO]];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "SITUAÇÃO: $situacao"), 0, 1, 'L');
	$pdf->Ln(10);
	$modalidade = $modalidade_array[$cadastro[Constante::MODALIDADE]];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "MODALIDADE: $modalidade"), 0, 1, 'L');
	$pdf->Ln(10);
	$nivel = $nivel_array[$cadastro[Constante::NIVEL]];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "NÍVEL: $nivel"), 0, 1, 'L');
}

$lista = $this->IdiomaModel->ObterRegistro(null, $usuario);
if (count($lista) > 0) {
	$pdf->Ln(20);
	$pdf->SetFont('arial', 'B', 12);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "IDIOMAS"), 0, 1, 'L');
}
$pdf->SetFont('arial', '', 12);
while ($cadastro = array_shift($lista)) {
	$pdf->Ln(15);
	$idioma = $cadastro[Constante::IDIOMA];            
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "LÍNGUA: $idioma"), 0, 1, 'L');
	$pdf->Ln(10);            
	$nivel_conhecimento = $nivel_conhecimento_array[$cadastro[Constante::NIVEL_CONHECIMENTO]];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "NÍVEL DE CONHECIMENTO: $nivel_conhecimento"), 0, 1, 'L');
}

$lista = $this->ExperienciaProfissionalModel->ObterRegistro(null, $usuario);
if (count($lista) > 0) {
	$pdf->Ln(20);
	$pdf->SetFont('arial', 'B', 12);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "EXPERIÊNCIA PROFISSIONAL"), 0, 1, 'L');
}
$pdf->SetFont('arial', '', 12);
while ($cadastro = array_shift($lista)) {
	$pdf->Ln(15);            
	$empresa = $cadastro[Constante::EMPRESA];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "EMPRESA: $empresa"), 0, 1, 'L');
	$pdf->Ln(10);            
	$cargo = $cadastro[Constante::CARGO];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "CARGO: $cargo"), 0, 1, 'L');
	$pdf->Ln(10);
	$data_admissao = $cadastro[Constante::DATA_ADMISSAO];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "DATA DE ADMISSÃO: $data_admissao"), 0, 1, 'L');
	$pdf->Ln(10);
	$data_saida = $cadastro[Constante::DATA_SAIDA];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "DATA DE SAIDA: $data_saida"), 0, 1, 'L');
	$pdf->Ln(10);
	$nivel_hierarquico = $nivel_hierarquico_array[$cadastro[Constante::NIVEL_HIERARQUICO]];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "NÍVEL HIERÁRQUICO: $nivel_hierarquico"), 0, 1, 'L');
	$pdf->Ln(5);
	$funcoes = $cadastro[Constante::FUNCOES];
	$pdf->MultiCell(0, 15, iconv('utf-8', 'iso-8859-1', "FUNÇÕES: $funcoes"), 0, 'J', false);
}

$lista = $this->HabilidadeModel->ObterRegistro(null, $usuario);
if (count($lista) > 0) {
	$pdf->Ln(20);
	$pdf->SetFont('arial', 'B', 12);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "HABILIDADES"), 0, 1, 'L');
}
$pdf->SetFont('arial', '', 12);
while ($cadastro = array_shift($lista)) {
	$pdf->Ln(15);            
	$conhecimento = $cadastro[Constante::CONHECIMENTO];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "CONHECIMENTO: $conhecimento"), 0, 1, 'L');
	$pdf->Ln(10);            
	$nivel_conhecimento = $nivel_conhecimento_array[$cadastro[Constante::NIVEL_CONHECIMENTO]];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "NÍVEL DE CONHECIMENTO: $nivel_conhecimento"), 0, 1, 'L');
}
$lista = $this->CertificadoModel->ObterRegistro(null, $usuario);
if (count($lista) > 0) {
	$pdf->Ln(20);
	$pdf->SetFont('arial', 'B', 12);
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "CERTIFICADOS"), 0, 1, 'L');
}
$pdf->SetFont('arial', '', 12);
while ($cadastro = array_shift($lista)) {
	$pdf->Ln(15);            
	$instituicao = $cadastro[Constante::INSTITUICAO];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "INSTITUIÇÃO: $instituicao"), 0, 1, 'L');
	$pdf->Ln(10);            
	$curso = $cadastro[Constante::CURSO];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "CURSO: $curso"), 0, 1, 'L');
	$pdf->Ln(10);
	$carga_horaria = $cadastro[Constante::CARGA_HORARIA];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "CARGA HORÁRIA (HORAS): $carga_horaria"), 0, 1, 'L');
	$pdf->Ln(10);
	$ano_conclusao = $cadastro[Constante::ANO_CONCLUSAO];
	$pdf->Cell(0, 5, iconv('utf-8', 'iso-8859-1', "ANO DE CONCLUSÃO: $ano_conclusao"), 0, 1, 'L');
}

if (isset($nome)) {
*/	
$caminhoCompletoArquivo = "../file/curriculo" . $_SESSION['usu_int_id'] . ".pdf";
	/* executa a geração do seu PDF*/
$pdf->Output('f', $caminhoCompletoArquivo);

/* adiciona o arquivo físico ao e-mail */
if (smtpmailer('thallescakan@outlook.com.br', 'vpmaciel@gmail.com', 'BitCurriculos', 'Sua Senha','Candidato', 'curriculo'. $_SESSION['usu_int_id'] .'.pdf')) {
	header("location:..\\view\\sucesso.php?msg=Sua senha é foi enviada para seu e-mail !");
}

/* exclui o arquivo pdf do servidor */
if (file_exists ($caminhoCompletoArquivo)) {
	sleep(5);
	//unlink($caminhoCompletoArquivo);
}
//}
