-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Jan-2021 às 02:51
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
-- Banco de dados: `bitcurriculos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `certificacao`
--

CREATE TABLE `certificacao` (
  `cer_int_id` int(11) UNSIGNED NOT NULL,
  `usu_int_id` int(11) UNSIGNED NOT NULL,
  `cer_char_certificacao` varchar(50) NOT NULL,
  `cer_char_instituicao` varchar(50) NOT NULL,
  `cer_year_ano_obtencao` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `cur_int_id` int(11) UNSIGNED NOT NULL,
  `usu_int_id` int(11) UNSIGNED NOT NULL,
  `cur_char_nome` varchar(50) NOT NULL,
  `cur_char_instituicao` varchar(50) NOT NULL,
  `cur_year_ano_inicio` year(4) NOT NULL,
  `cur_year_ano_conclusao` year(4) NOT NULL,
  `cur_int_situacao` tinyint(4) UNSIGNED NOT NULL,
  `cur_int_nivel` tinyint(4) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `experiencia_profissional`
--

CREATE TABLE `experiencia_profissional` (
  `exp_prof_int_id` int(11) UNSIGNED NOT NULL,
  `usu_int_id` int(11) UNSIGNED NOT NULL,
  `exp_prof_char_empresa` varchar(50) NOT NULL,
  `exp_prof_char_cargo` varchar(50) NOT NULL,
  `exp_prof_char_data_admissao` char(10) NOT NULL,
  `exp_prof_char_data_saida` char(10) NOT NULL,
  `exp_prof_char_funcoes` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `habilidade`
--

CREATE TABLE `habilidade` (
  `hab_int_id` int(11) UNSIGNED NOT NULL,
  `usu_int_id` int(11) UNSIGNED NOT NULL,
  `hab_char_habilidade` varchar(50) NOT NULL,
  `hab_int_nivel_conhecimento` tinyint(4) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `idioma`
--

CREATE TABLE `idioma` (
  `idi_int_id` int(11) UNSIGNED NOT NULL,
  `usu_int_id` int(11) UNSIGNED NOT NULL,
  `idi_int_idioma` tinyint(4) UNSIGNED NOT NULL,
  `idi_int_nivel_conhecimento` tinyint(4) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `objetivo_profissional`
--

CREATE TABLE `objetivo_profissional` (
  `obj_pro_int_id` int(11) UNSIGNED NOT NULL,
  `usu_int_id` int(11) UNSIGNED NOT NULL,
  `obj_pro_char_cargo` varchar(50) NOT NULL,
  `obj_pro_int_pretensao_salarial` tinyint(4) UNSIGNED NOT NULL,
  `obj_pro_int_contrato` tinyint(4) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `usu_int_id` int(11) UNSIGNED NOT NULL,
  `pes_char_nome` varchar(50) NOT NULL,
  `pes_char_url_repositorio_codigos` varchar(500) NOT NULL,
  `pes_char_url_linkedin` varchar(500) NOT NULL,
  `pes_char_data_nascimento` char(10) NOT NULL,
  `pes_char_celular_numero` char(15) NOT NULL,
  `pes_bit_sexo` tinyint(4) UNSIGNED NOT NULL,
  `pes_int_escolaridade` tinyint(4) UNSIGNED NOT NULL,
  `pes_int_estado_civil` tinyint(4) UNSIGNED NOT NULL,
  `pes_int_nacionalidade` tinyint(4) UNSIGNED NOT NULL,
  `pes_bit_possui_filhos` tinyint(4) UNSIGNED NOT NULL,
  `pes_bit_possui_deficiencia` tinyint(4) UNSIGNED NOT NULL,
  `pes_int_pais` tinyint(4) UNSIGNED NOT NULL,
  `pes_int_estado` tinyint(4) UNSIGNED NOT NULL,
  `pes_int_cidade` smallint(6) UNSIGNED NOT NULL,
  `pes_int_cnh` tinyint(4) UNSIGNED NOT NULL,
  `pes_int_ultimo_salario_mensal` tinyint(4) UNSIGNED NOT NULL,
  `pes_bit_empregado_atualmente` tinyint(4) UNSIGNED NOT NULL,
  `pes_bit_procurando_emprego_atualmente` tinyint(4) UNSIGNED NOT NULL,
  `pes_bit_disponivel_viagens` tinyint(4) UNSIGNED NOT NULL,
  `pes_bit_trabalha_outras_cidades` tinyint(4) UNSIGNED NOT NULL,
  `pes_bit_trabalha_exterior` tinyint(4) UNSIGNED NOT NULL,
  `pes_bit_trabalha_home_office` tinyint(4) UNSIGNED NOT NULL,
  `pes_bit_possui_carro` tinyint(4) UNSIGNED NOT NULL,
  `pes_bit_possui_moto` tinyint(4) UNSIGNED NOT NULL,
  `pes_bit_dispensado_servico_militar` tinyint(4) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `publica_vaga`
--

CREATE TABLE `publica_vaga` (
  `pub_vag_int_id` int(11) UNSIGNED NOT NULL,
  `usu_int_id` int(11) UNSIGNED NOT NULL,
  `pub_char_date_data` char(10) NOT NULL,
  `pub_vag_char_empresa` varchar(50) NOT NULL,
  `pub_vag_char_cargo` varchar(50) NOT NULL,
  `pub_vag_char_requisitos` varchar(500) NOT NULL,
  `pub_vag_char_funcoes` varchar(500) NOT NULL,
  `pub_vag_char_beneficios` varchar(500) NOT NULL,
  `pub_vag_char_data_publicacao` char(10) NOT NULL,
  `pub_vag_int_vagas` smallint(6) UNSIGNED NOT NULL,
  `pub_vag_int_contrato` tinyint(4) UNSIGNED NOT NULL,
  `pub_vag_dec_salario_mensal` float NOT NULL,
  `pub_vag_int_estado` smallint(6) UNSIGNED NOT NULL,
  `pub_vag_int_cidade` smallint(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usu_int_id` int(11) UNSIGNED NOT NULL,
  `usu_char_email` varchar(100) NOT NULL,
  `usu_int_senha` smallint(6) UNSIGNED NOT NULL,
  `usu_date_ultimo_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `certificacao`
--
ALTER TABLE `certificacao`
  ADD PRIMARY KEY (`cer_int_id`),
  ADD KEY `usu_int_id` (`usu_int_id`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`cur_int_id`),
  ADD KEY `usu_int_id` (`usu_int_id`);

--
-- Índices para tabela `experiencia_profissional`
--
ALTER TABLE `experiencia_profissional`
  ADD PRIMARY KEY (`exp_prof_int_id`),
  ADD KEY `usu_int_id` (`usu_int_id`);

--
-- Índices para tabela `habilidade`
--
ALTER TABLE `habilidade`
  ADD PRIMARY KEY (`hab_int_id`),
  ADD KEY `usu_int_id` (`usu_int_id`);

--
-- Índices para tabela `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`idi_int_id`),
  ADD KEY `usu_int_id` (`usu_int_id`);

--
-- Índices para tabela `objetivo_profissional`
--
ALTER TABLE `objetivo_profissional`
  ADD PRIMARY KEY (`obj_pro_int_id`),
  ADD KEY `usu_int_id` (`usu_int_id`);

--
-- Índices para tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`usu_int_id`);

--
-- Índices para tabela `publica_vaga`
--
ALTER TABLE `publica_vaga`
  ADD PRIMARY KEY (`pub_vag_int_id`),
  ADD KEY `usu_int_id` (`usu_int_id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_int_id`),
  ADD UNIQUE KEY `idx_usuario_usu_char_email` (`usu_char_email`) USING BTREE;

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `certificacao`
--
ALTER TABLE `certificacao`
  MODIFY `cer_int_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `cur_int_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `experiencia_profissional`
--
ALTER TABLE `experiencia_profissional`
  MODIFY `exp_prof_int_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `habilidade`
--
ALTER TABLE `habilidade`
  MODIFY `hab_int_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `idioma`
--
ALTER TABLE `idioma`
  MODIFY `idi_int_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `objetivo_profissional`
--
ALTER TABLE `objetivo_profissional`
  MODIFY `obj_pro_int_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `publica_vaga`
--
ALTER TABLE `publica_vaga`
  MODIFY `pub_vag_int_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usu_int_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `certificacao`
--
ALTER TABLE `certificacao`
  ADD CONSTRAINT `certificacao_ibfk_1` FOREIGN KEY (`usu_int_id`) REFERENCES `usuario` (`usu_int_id`);

--
-- Limitadores para a tabela `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`usu_int_id`) REFERENCES `usuario` (`usu_int_id`);

--
-- Limitadores para a tabela `experiencia_profissional`
--
ALTER TABLE `experiencia_profissional`
  ADD CONSTRAINT `experiencia_profissional_ibfk_1` FOREIGN KEY (`usu_int_id`) REFERENCES `usuario` (`usu_int_id`);

--
-- Limitadores para a tabela `habilidade`
--
ALTER TABLE `habilidade`
  ADD CONSTRAINT `habilidade_ibfk_1` FOREIGN KEY (`usu_int_id`) REFERENCES `usuario` (`usu_int_id`);

--
-- Limitadores para a tabela `idioma`
--
ALTER TABLE `idioma`
  ADD CONSTRAINT `idioma_ibfk_1` FOREIGN KEY (`usu_int_id`) REFERENCES `usuario` (`usu_int_id`);

--
-- Limitadores para a tabela `objetivo_profissional`
--
ALTER TABLE `objetivo_profissional`
  ADD CONSTRAINT `objetivo_profissional_ibfk_1` FOREIGN KEY (`usu_int_id`) REFERENCES `usuario` (`usu_int_id`);

--
-- Limitadores para a tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD CONSTRAINT `pessoa_ibfk_1` FOREIGN KEY (`usu_int_id`) REFERENCES `usuario` (`usu_int_id`);

--
-- Limitadores para a tabela `publica_vaga`
--
ALTER TABLE `publica_vaga`
  ADD CONSTRAINT `publica_vaga_ibfk_1` FOREIGN KEY (`usu_int_id`) REFERENCES `usuario` (`usu_int_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
