-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Nov-2020 às 01:17
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
  `int_id` int(11) NOT NULL,
  `int_tb_usuario_id` int(11) NOT NULL,
  `char_certificacao` varchar(50) NOT NULL,
  `char_instituicao` varchar(50) NOT NULL,
  `year_ano_obtencao` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_curso`
--

CREATE TABLE `tb_curso` (
  `int_id` int(11) NOT NULL,
  `int_tb_usuario_id` int(11) NOT NULL,
  `char_nome` varchar(50) NOT NULL,
  `char_instituicao` varchar(50) NOT NULL,
  `year_ano_inicio` year(4) NOT NULL,
  `year_ano_conclusao` year(4) NOT NULL,
  `int_situacao` tinyint(4) NOT NULL,
  `int_nivel` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_experiencia_profissional`
--

CREATE TABLE `tb_experiencia_profissional` (
  `int_id` int(11) NOT NULL,
  `int_tb_usuario_id` int(11) NOT NULL,
  `char_empresa` varchar(50) NOT NULL,
  `char_cargo` varchar(50) NOT NULL,
  `date_data_admissao` date NOT NULL,
  `date_data_saida` date NOT NULL,
  `char_funcoes` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_habilidade`
--

CREATE TABLE `tb_habilidade` (
  `int_id` int(11) NOT NULL,
  `int_usuario_id` int(11) NOT NULL,
  `char_habilidade` varchar(50) NOT NULL,
  `char_nivel` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_idioma`
--

CREATE TABLE `tb_idioma` (
  `int_id` int(11) NOT NULL,
  `int_tb_usuario_id` int(11) NOT NULL,
  `int_idioma` tinyint(4) NOT NULL,
  `int_nivel_conhecimento` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_objetivo_profissional`
--

CREATE TABLE `tb_objetivo_profissional` (
  `int_id` int(11) NOT NULL,
  `int_tb_usuario_id` int(11) NOT NULL,
  `char_cargo` varchar(50) NOT NULL,
  `int_pretensao_salarial` tinyint(4) NOT NULL,
  `int_contrato` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pessoa`
--

CREATE TABLE `tb_pessoa` (
  `int_tb_usuario_id` int(11) NOT NULL,
  `char_nome` varchar(50) NOT NULL,
  `char_url_repositorio_codigos` varchar(500) NOT NULL,
  `char_url_linkedin` varchar(500) NOT NULL,
  `date_data_nascimento` date NOT NULL,
  `char_celular_numero` char(15) NOT NULL,
  `bit_sexo` tinyint(4) NOT NULL,
  `int_escolaridade` tinyint(4) NOT NULL,
  `int_estado_civil` tinyint(4) NOT NULL,
  `int_nacionalidade` tinyint(4) NOT NULL,
  `int_possui_filhos` tinyint(4) NOT NULL,
  `int_possui_deficiencia` tinyint(4) NOT NULL,
  `int_pais` tinyint(4) NOT NULL,
  `int_estado` tinyint(4) NOT NULL,
  `int_cidade` smallint(6) NOT NULL,
  `int_cnh` tinyint(4) NOT NULL,
  `int_ultimo_salario_mensal` tinyint(4) NOT NULL,
  `bit_empregado_atualmente` tinyint(4) NOT NULL,
  `bit_procurando_emprego_atualmente` tinyint(4) NOT NULL,
  `bit_disponivel_viagens` tinyint(4) NOT NULL,
  `bit_trabalha_outras_cidades` tinyint(4) NOT NULL,
  `bit_trabalha_exterior` tinyint(4) NOT NULL,
  `bit_trabalha_home_office` tinyint(4) NOT NULL,
  `bit_possui_carro` tinyint(4) NOT NULL,
  `bit_possui_moto` tinyint(4) NOT NULL,
  `bit_dispensado_servico_militar` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_publica_vaga`
--

CREATE TABLE `tb_publica_vaga` (
  `int_id` int(11) NOT NULL,
  `int_usuario_id` int(11) NOT NULL,
  `char_empresa` varchar(50) NOT NULL,
  `char_cargo` varchar(50) NOT NULL,
  `char_requisitos` varchar(500) NOT NULL,
  `char_funcoes` varchar(500) NOT NULL,
  `char_beneficios` varchar(500) NOT NULL,
  `date_data_publicacao` date NOT NULL,
  `int_vagas` smallint(6) NOT NULL,
  `int_contrato` tinyint(4) NOT NULL,
  `dec_salario_mensal` float NOT NULL,
  `int_estado` smallint(6) NOT NULL,
  `int_cidade` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `int_id` int(11) NOT NULL,
  `char_email` varchar(100) NOT NULL,
  `char_senha` char(8) NOT NULL,
  `bit_tipo` tinyint(4) NOT NULL,
  `date_ultimo_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_certificacao`
--
ALTER TABLE `tb_certificacao`
  ADD PRIMARY KEY (`int_id`);

--
-- Índices para tabela `tb_curso`
--
ALTER TABLE `tb_curso`
  ADD PRIMARY KEY (`int_id`);

--
-- Índices para tabela `tb_experiencia_profissional`
--
ALTER TABLE `tb_experiencia_profissional`
  ADD PRIMARY KEY (`int_id`);

--
-- Índices para tabela `tb_habilidade`
--
ALTER TABLE `tb_habilidade`
  ADD PRIMARY KEY (`int_id`);

--
-- Índices para tabela `tb_idioma`
--
ALTER TABLE `tb_idioma`
  ADD PRIMARY KEY (`int_id`);

--
-- Índices para tabela `tb_objetivo_profissional`
--
ALTER TABLE `tb_objetivo_profissional`
  ADD PRIMARY KEY (`int_id`);

--
-- Índices para tabela `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  ADD PRIMARY KEY (`int_tb_usuario_id`);

--
-- Índices para tabela `tb_publica_vaga`
--
ALTER TABLE `tb_publica_vaga`
  ADD PRIMARY KEY (`int_id`);

--
-- Índices para tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`int_id`),
  ADD UNIQUE KEY `idx_usuario_char_email` (`char_email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_certificacao`
--
ALTER TABLE `tb_certificacao`
  MODIFY `int_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_curso`
--
ALTER TABLE `tb_curso`
  MODIFY `int_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_experiencia_profissional`
--
ALTER TABLE `tb_experiencia_profissional`
  MODIFY `int_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_habilidade`
--
ALTER TABLE `tb_habilidade`
  MODIFY `int_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_idioma`
--
ALTER TABLE `tb_idioma`
  MODIFY `int_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_objetivo_profissional`
--
ALTER TABLE `tb_objetivo_profissional`
  MODIFY `int_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_publica_vaga`
--
ALTER TABLE `tb_publica_vaga`
  MODIFY `int_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `int_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
