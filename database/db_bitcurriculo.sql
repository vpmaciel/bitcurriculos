-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Nov-2020 às 21:43
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_bitcurriculo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_certificacao`
--

CREATE TABLE `tb_certificacao` (
  `cer_int_id` int(11) NOT NULL,
  `usu_int_id` int(11) NOT NULL,
  `cer_char_certificacao` varchar(50) NOT NULL,
  `cer_char_instituicao` varchar(50) NOT NULL,
  `cer_year_ano_obtencao` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_curso`
--

CREATE TABLE `tb_curso` (
  `cur_int_id` int(11) NOT NULL,
  `usu_int_id` int(11) NOT NULL,
  `cur_char_nome` varchar(50) NOT NULL,
  `cur_char_instituicao` varchar(50) NOT NULL,
  `cur_year_ano_inicio` year(4) NOT NULL,
  `cur_year_ano_conclusao` year(4) NOT NULL,
  `cur_int_situacao` tinyint(4) NOT NULL,
  `cur_int_nivel` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_experiencia_profissional`
--

CREATE TABLE `tb_experiencia_profissional` (
  `exp_prof_int_id` int(11) NOT NULL,
  `usu_int_id` int(11) NOT NULL,
  `exp_prof_char_empresa` varchar(50) NOT NULL,
  `exp_prof_char_cargo` varchar(50) NOT NULL,
  `exp_prof_date_data_admissao` date NOT NULL,
  `exp_prof_date_data_saida` date NOT NULL,
  `exp_prof_char_funcoes` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_habilidade`
--

CREATE TABLE `tb_habilidade` (
  `hab_int_id` int(11) NOT NULL,
  `usu_int_id` int(11) NOT NULL,
  `hab_char_habilidade` varchar(50) NOT NULL,
  `hab_int_nivel_conhecimento` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_idioma`
--

CREATE TABLE `tb_idioma` (
  `idi_int_id` int(11) NOT NULL,
  `usu_int_id` int(11) NOT NULL,
  `idi_int_idioma` tinyint(4) NOT NULL,
  `idi_int_nivel_conhecimento` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_objetivo_profissional`
--

CREATE TABLE `tb_objetivo_profissional` (
  `obj_pro_int_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `obj_pro_int_char_cargo` varchar(50) NOT NULL,
  `obj_pro_int_pretensao_salarial` tinyint(4) NOT NULL,
  `obj_pro_int_contrato` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pessoa`
--

CREATE TABLE `tb_pessoa` (
  `usu_int_id` int(11) NOT NULL,
  `pes_char_nome` varchar(50) NOT NULL,
  `pes_char_url_repositorio_codigos` varchar(500) NOT NULL,
  `pes_char_url_linkedin` varchar(500) NOT NULL,
  `pes_date_data_nascimento` date NOT NULL,
  `pes_char_celular_numero` char(15) NOT NULL,
  `pes_bit_sexo` tinyint(4) NOT NULL,
  `pes_int_escolaridade` tinyint(4) NOT NULL,
  `pes_int_estado_civil` tinyint(4) NOT NULL,
  `pes_int_nacionalidade` tinyint(4) NOT NULL,
  `pes_bit_possui_filhos` tinyint(4) NOT NULL,
  `pes_bit_possui_deficiencia` tinyint(4) NOT NULL,
  `pes_int_pais` tinyint(4) NOT NULL,
  `pes_int_estado` tinyint(4) NOT NULL,
  `pes_int_cidade` smallint(6) NOT NULL,
  `pes_int_cnh` tinyint(4) NOT NULL,
  `pes_int_ultimo_salario_mensal` tinyint(4) NOT NULL,
  `pes_bit_empregado_atualmente` tinyint(4) NOT NULL,
  `pes_bit_procurando_emprego_atualmente` tinyint(4) NOT NULL,
  `pes_bit_disponivel_viagens` tinyint(4) NOT NULL,
  `pes_bit_trabalha_outras_cidades` tinyint(4) NOT NULL,
  `pes_bit_trabalha_exterior` tinyint(4) NOT NULL,
  `pes_bit_trabalha_home_office` tinyint(4) NOT NULL,
  `pes_bit_possui_carro` tinyint(4) NOT NULL,
  `pes_bit_possui_moto` tinyint(4) NOT NULL,
  `pes_bit_dispensado_servico_militar` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_publica_vaga`
--

CREATE TABLE `tb_publica_vaga` (
  `pub_vag_int_id` int(11) NOT NULL,
  `pub_vag_int_usuario_id` int(11) NOT NULL,
  `pub_vag_char_empresa` varchar(50) NOT NULL,
  `pub_vag_char_cargo` varchar(50) NOT NULL,
  `pub_vag_char_requisitos` varchar(500) NOT NULL,
  `pub_vag_char_funcoes` varchar(500) NOT NULL,
  `pub_vag_char_beneficios` varchar(500) NOT NULL,
  `pub_vag_date_data_publicacao` date NOT NULL,
  `pub_vag_int_vagas` smallint(6) NOT NULL,
  `pub_vag_int_contrato` tinyint(4) NOT NULL,
  `pub_vag_dec_salario_mensal` float NOT NULL,
  `pub_vag_int_estado` smallint(6) NOT NULL,
  `pub_vag_int_cidade` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `usu_int_id` int(11) NOT NULL,
  `usu_char_email` varchar(100) NOT NULL,
  `usu_char_senha` char(4) NOT NULL,
  `usu_date_ultimo_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_certificacao`
--
ALTER TABLE `tb_certificacao`
  ADD PRIMARY KEY (`cer_int_id`);

--
-- Índices para tabela `tb_curso`
--
ALTER TABLE `tb_curso`
  ADD PRIMARY KEY (`cur_int_id`);

--
-- Índices para tabela `tb_experiencia_profissional`
--
ALTER TABLE `tb_experiencia_profissional`
  ADD PRIMARY KEY (`exp_prof_int_id`);

--
-- Índices para tabela `tb_habilidade`
--
ALTER TABLE `tb_habilidade`
  ADD PRIMARY KEY (`hab_int_id`);

--
-- Índices para tabela `tb_idioma`
--
ALTER TABLE `tb_idioma`
  ADD PRIMARY KEY (`idi_int_id`);

--
-- Índices para tabela `tb_objetivo_profissional`
--
ALTER TABLE `tb_objetivo_profissional`
  ADD PRIMARY KEY (`obj_pro_int_id`);

--
-- Índices para tabela `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  ADD PRIMARY KEY (`usu_int_id`);

--
-- Índices para tabela `tb_publica_vaga`
--
ALTER TABLE `tb_publica_vaga`
  ADD PRIMARY KEY (`pub_vag_int_id`);

--
-- Índices para tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`usu_int_id`),
  ADD UNIQUE KEY `idx_usuario_char_email` (`usu_char_email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_certificacao`
--
ALTER TABLE `tb_certificacao`
  MODIFY `cer_int_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_curso`
--
ALTER TABLE `tb_curso`
  MODIFY `cur_int_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_experiencia_profissional`
--
ALTER TABLE `tb_experiencia_profissional`
  MODIFY `exp_prof_int_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_habilidade`
--
ALTER TABLE `tb_habilidade`
  MODIFY `hab_int_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_idioma`
--
ALTER TABLE `tb_idioma`
  MODIFY `idi_int_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_objetivo_profissional`
--
ALTER TABLE `tb_objetivo_profissional`
  MODIFY `obj_pro_int_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_publica_vaga`
--
ALTER TABLE `tb_publica_vaga`
  MODIFY `pub_vag_int_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `usu_int_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
