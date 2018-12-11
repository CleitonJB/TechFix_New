-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 11/12/2018 às 10:25
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
  `nome` varchar(200) DEFAULT NULL,
  `cnpj` varchar(200) DEFAULT NULL,
  `senha` varchar(200) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `endereco` varchar(300) NOT NULL,
  `idempresa` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `estado` varchar(200) NOT NULL,
  `cidadeemp` varchar(200) NOT NULL,
  `fundador` varchar(200) NOT NULL,
  `bairro` varchar(200) NOT NULL,
  `telefone` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `empresa`
--

INSERT INTO `empresa` (`nome`, `cnpj`, `senha`, `email`, `endereco`, `idempresa`, `username`, `estado`, `cidadeemp`, `fundador`, `bairro`, `telefone`) VALUES
('Apple', '2514', 'senha', 'AppleCompany@icloud.com', 'Wall Strret', 1, 'Tech', 'WS', '', 'Steve Jobs', 'Broklyin', '2415'),
('escola', '12345678', '123', 'deus@derus', 'aur', 8, 'iff', 'jr', '', 'dono', 'good', '123456789'),
('Petrobras', '1234', '123', 'Petro@gmail.com', 'rua', 5, 'Petro', 'rj', 'Quissa', 'eu', 'Alto', ''),
('Serve Bem', '12345678', 'cliente', 'Isabelcsgv@gmail.com', '12 de setembro', 7, 'Acougue', 'rio de janeiro', 'quissama', 'Alessandro', 'caxias', '1234567890');

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
  `cod_usuario` double NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `dt_nascimento` date DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `cidade` varchar(15) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `rg` varchar(15) DEFAULT NULL,
  `username` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`cod_usuario`, `nome`, `dt_nascimento`, `email`, `estado`, `cidade`, `senha`, `cpf`, `rg`, `username`) VALUES
(0, 'helloworld', NULL, 'nein@gmail.com', NULL, NULL, '123', NULL, NULL, 'world'),
(5, 'SEUQENCIA', NULL, 'flIFFamengo@gmail.com', NULL, NULL, '12546563', NULL, NULL, ''),
(6, 'algumnome', NULL, 'EFSDWEH@gmail.com', NULL, NULL, '12546563', NULL, NULL, ''),
(7, 'BRFJJKFe', NULL, 'EFSTRTGHH@gmail.com', NULL, NULL, '12546563', NULL, NULL, ''),
(8, 'BRFJJKFSFFFe', NULL, 'EFSTRTGHTDGRSDGH@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, ''),
(9, 'OUTLOOK', NULL, 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, ''),
(10, 'OUTLfdffK', NULL, 'Gkbhjhj@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, ''),
(11, 'OUTLfdNNNNNNNNNNNNNNNNNffK', NULL, 'GkbNNNNNNhjhj@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, ''),
(12, 'OUTLOOK', NULL, 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, ''),
(13, 'OUTLOOK', NULL, 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, ''),
(14, 'OUTLOOK', NULL, 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, ''),
(15, 'OUTLOOK', NULL, 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, ''),
(16, 'OUTLOOK', NULL, 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, ''),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(20, '2018-03-01', NULL, 'gfthgfh@gmail.com', NULL, NULL, 'frgftgfthgfh', NULL, NULL, ''),
(21, NULL, NULL, 'FUNCIONA@gmail.com', NULL, NULL, 'DGHGFHFH', NULL, NULL, ''),
(22, 'FUNCIONADISGRACA', NULL, 'FUNCIONADISGRACA@GMAIL.COM', NULL, NULL, 'DFHDFJKHDFJKG', NULL, NULL, ''),
(23, 'PRIMEIROCLIENTEBIANKA', NULL, 'UYGYUH@GMAIL.COM', NULL, NULL, 'RTHGFRBHBGF', NULL, NULL, ''),
(24, 'JOSEVALDO', NULL, 'SONSERINA.NAO.DRAGO@GMAIL.COM', NULL, NULL, 'BERRO123', NULL, NULL, ''),
(25, 'OUTLOOK', NULL, 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, ''),
(26, 'Jonny', NULL, 'jonny@gmailo.com', NULL, NULL, 'gfghjhjgh', NULL, NULL, ''),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(29, 'khjkhjkh', NULL, 'gdjk@gmail.com', NULL, NULL, 'jfljrflkd', NULL, NULL, ''),
(30, 'FUNCIONANDO', NULL, 'FUNCIONANDOAGORA@GMAIL.COM', NULL, NULL, 'DJFREFKLEJ', NULL, NULL, 'funfa'),
(31, 'kjhkjhjk', NULL, 'jdfjkdjh@gmail.com', NULL, NULL, 'rwfjhljfdl', NULL, NULL, ''),
(32, 'OUTLOOK', NULL, 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, ''),
(33, 'FDGBFB', NULL, 'gdjFk@gmail.com', 'RJ', NULL, 'jfljrflkd', NULL, NULL, ''),
(34, 'testando', NULL, 'testando@gmail.com', 'Rio de Janeiro', NULL, '123123', NULL, NULL, ''),
(35, 'giyukyuk', NULL, 'uykyukuy@gmail.com', '8978987', NULL, 'jfljrflkd', NULL, NULL, ''),
(36, 'Gabriel souza', NULL, 'cadastrando@gmail.com', 'Rio De Janeiro', NULL, 'senhasenhando', NULL, NULL, ''),
(37, 'name', NULL, 'PASSEI@gmail.com', 'RJ', NULL, 'senha', '5874126982', '2365412879', ''),
(38, 'Data', NULL, 'gmaill@hotmail.com', 'RJ', NULL, '123', '9856321470', '9856321470', ''),
(39, 'Nome', NULL, 'mein@gmail.com', 'Rj', NULL, 'senha', '12345678', '87654321', ''),
(40, 'Cadastre', NULL, 'ajn@gmail.com', 'RJ', 'QuissamÃ£', 'senha', '9876543', '12345678', '');

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
  ADD PRIMARY KEY (`idempresa`);

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
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `idempresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
