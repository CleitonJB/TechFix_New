-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 27/11/2018 às 09:23
-- Versão do servidor: 5.7.18-0ubuntu0.16.04.1
-- Versão do PHP: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `Tech`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `data` date DEFAULT NULL,
  `hora` datetime(6) DEFAULT NULL,
  `descricao_problema` text,
  `nome_usuario` varchar(100) DEFAULT NULL,
  `fk_id_empresa` double DEFAULT NULL,
  `fk_usuario` double DEFAULT NULL,
  `id_agendamento` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` double NOT NULL,
  `fk_empresa` double DEFAULT NULL,
  `fk_usuario` double DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` datetime(6) DEFAULT NULL,
  `comentario` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` double NOT NULL,
  `nome` varchar(20) DEFAULT NULL,
  `cnpj` decimal(20,0) DEFAULT NULL,
  `senha` longtext
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `endereco`
--

CREATE TABLE `endereco` (
  `id_endereco` double NOT NULL,
  `pais` varchar(20) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `rua` varchar(100) DEFAULT NULL,
  `numero_local` decimal(4,0) DEFAULT NULL,
  `cep` decimal(8,0) DEFAULT NULL,
  `complemento` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `endereco`
--

INSERT INTO `endereco` (`id_endereco`, `pais`, `estado`, `cidade`, `rua`, `numero_local`, `cep`, `complemento`) VALUES
(887454654, 'europa', 'ohio', 'Quissamã', 'visconde de quissamã', '100', '28735000', 'em frente ao iff'),
(65165165, 'PAIS', 'ESTADO', 'CIDADE', 'NUMERO ZERO', '0', '98652111', 'NENHUM');

-- --------------------------------------------------------

--
-- Estrutura para tabela `forum`
--

CREATE TABLE `forum` (
  `texto` longtext,
  `video` longblob,
  `foto` longblob,
  `id_forum` double NOT NULL,
  `fk_empresa` double DEFAULT NULL,
  `fk_usuario` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` double NOT NULL,
  `marca` varchar(10) DEFAULT NULL,
  `problema` text,
  `estado_preservacao` varchar(10) DEFAULT NULL,
  `tipo_equipamento` varchar(20) DEFAULT NULL,
  `fk_usuario` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `marca`, `problema`, `estado_preservacao`, `tipo_equipamento`, `fk_usuario`) VALUES
(362151651, 'positivo', 'Aquecendo Muito', 'Novo', 'Notebook', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `cidade` varchar(15) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `rg` varchar(15) DEFAULT NULL,
  `cod_usuario` int(11) NOT NULL,
  `username` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `email`, `estado`, `cidade`, `senha`, `cpf`, `rg`, `cod_usuario`, `username`) VALUES
('helloworld', 'nein@gmail.com', NULL, NULL, '123', NULL, NULL, 1, ''),
('SEUQENCIA', 'flIFFamengo@gmail.com', NULL, NULL, '12546563', NULL, NULL, 2, ''),
('algumnome', 'EFSDWEH@gmail.com', NULL, NULL, '12546563', NULL, NULL, 3, ''),
('BRFJJKFe', 'EFSTRTGHH@gmail.com', NULL, NULL, '12546563', NULL, NULL, 4, ''),
('BRFJJKFSFFFe', 'EFSTRTGHTDGRSDGH@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 5, ''),
('OUTLOOK', 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 6, ''),
('OUTLfdffK', 'Gkbhjhj@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 7, ''),
('OUTLfdNNNNNNNNNNNNNNNNNffK', 'GkbNNNNNNhjhj@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 8, ''),
('OUTLOOK', 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 9, ''),
('OUTLOOK', 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 10, ''),
('OUTLOOK', 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 11, ''),
('OUTLOOK', 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 12, ''),
('OUTLOOK', 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 13, ''),
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14, ''),
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15, ''),
('2018-03-01', 'gfthgfh@gmail.com', NULL, NULL, 'frgftgfthgfh', NULL, NULL, 16, ''),
(NULL, 'FUNCIONA@gmail.com', NULL, NULL, 'DGHGFHFH', NULL, NULL, 17, ''),
('FUNCIONADISGRACA', 'FUNCIONADISGRACA@GMAIL.COM', NULL, NULL, 'DFHDFJKHDFJKG', NULL, NULL, 18, ''),
('PRIMEIROCLIENTEBIANKA', 'UYGYUH@GMAIL.COM', NULL, NULL, 'RTHGFRBHBGF', NULL, NULL, 19, ''),
('JOSEVALDO', 'SONSERINA.NAO.DRAGO@GMAIL.COM', NULL, NULL, 'BERRO123', NULL, NULL, 20, ''),
('OUTLOOK', 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 21, ''),
('Jonny', 'jonny@gmailo.com', NULL, NULL, 'gfghjhjgh', NULL, NULL, 22, ''),
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, ''),
('khjkhjkh', 'gdjk@gmail.com', NULL, NULL, 'jfljrflkd', NULL, NULL, 24, ''),
('FUNCIONANDO', 'FUNCIONANDOAGORA@GMAIL.COM', NULL, NULL, 'DJFREFKLEJ', NULL, NULL, 25, ''),
('kjhkjhjk', 'jdfjkdjh@gmail.com', NULL, NULL, 'rwfjhljfdl', NULL, NULL, 26, ''),
('OUTLOOK', 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 27, ''),
('FDGBFB', 'gdjFk@gmail.com', 'RJ', NULL, 'jfljrflkd', NULL, NULL, 28, ''),
('testando', 'testando@gmail.com', 'Rio de Janeiro', NULL, '123123', NULL, NULL, 29, ''),
('giyukyuk', 'uykyukuy@gmail.com', '8978987', NULL, 'jfljrflkd', NULL, NULL, 30, ''),
('Gabriel souza', 'cadastrando@gmail.com', 'Rio De Janeiro', NULL, 'senhasenhando', NULL, NULL, 31, ''),
('name', 'PASSEI@gmail.com', 'RJ', NULL, 'senha', '5874126982', '2365412879', 32, ''),
('Data', 'gmaill@hotmail.com', 'RJ', NULL, '123', '9856321470', '9856321470', 33, ''),
('Nome', 'mein@gmail.com', 'Rj', NULL, 'senha', '12345678', '87654321', 34, ''),
('Cadastre', 'ajn@gmail.com', 'RJ', 'QuissamÃ£', 'senha', '9876543', '12345678', 35, ''),
('df', 'xc@gm.com', 'rj', 'quissa', '123', '025', '025', 36, ''),
('Cleitomn', 'cladasdashua@dla.com', 'tj', 'Rj', '123', '123141', '14141142', 37, ''),
('Gabriel', 'gabrielsilva@gmail.com', 'Rj', 'Quissama', '1234', '123456789', '123445678', 38, ''),
('Cleitinho', 'cleitinhobraga11@gmail.com', 'RJ', 'QuissamÃ£', '123', '13113131313131', '31313131313133', 39, ''),
('Ana Beatriz', 'biamaia@gmail.com', 'RJ', 'quissamÃ£', '123', '1312313361', '1356753877', 40, 'Beatriz');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD KEY `id_agendamento` (`id_agendamento`);

--
-- Índices de tabela `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Índices de tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Índices de tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id_endereco`);

--
-- Índices de tabela `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id_forum`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `id_agendamento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
