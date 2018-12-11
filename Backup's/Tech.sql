-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
<<<<<<< HEAD
-- Tempo de geração: 11/12/2018 às 18:29
=======
-- Tempo de geração: 11/12/2018 às 10:25
>>>>>>> 01719d94bbecfe5104d704f1eba63a57be2428bf
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
-- Estrutura para tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `nome`, `email`, `comentario`) VALUES
(1, 'Teste', 'tester@gmail.com', 'Só comentando...'),
(2, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando o sitema 17'),
(3, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando o sistema 20'),
(4, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando o sistema 21'),
(5, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando o sistema 22'),
(6, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando o sistema 23'),
(7, 'Luiz', 'luizcanf@gmail.com', 'NÃ£o funciona! NOTA 0!!'),
(8, 'Cleiton', 'cleitonbraga56@gmail.com', 'Faz isso comigo n, velho'),
(9, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando sem o SELECT * FROM'),
(10, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando o alert do cadastro'),
(11, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios'),
(12, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 2'),
(13, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 3'),
(14, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 4'),
(15, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 5'),
(16, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 6'),
(17, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 7'),
(18, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 8'),
(19, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 9'),
(20, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 10'),
(21, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 11'),
(22, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 12'),
(23, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 14'),
(24, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 15'),
(25, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 16'),
(26, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 17\r\n'),
(27, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 18'),
(28, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 19'),
(29, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 19'),
(30, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 20'),
(31, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 21'),
(32, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 22'),
(33, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 23'),
(34, 'UsuÃ¡rio', 'user@gmail.com', 'Testando para ver se ainda funciona'),
(35, '', '', ''),
(36, 'UsuÃ¡rio', 'user@gmail.com', 'Testando para ver se ainda funciona'),
(37, 'UsuÃ¡rio', 'user@gmail.com', 'Sistema de comentÃ¡rios 1.0'),
(38, '', '', ''),
(39, '', '', ''),
(40, 'Cleiton', 'user@gmail.com', 'Sistema de comentÃ¡rios 1.0'),
(41, 'Cleiton', 'cleitonbraga56@gmail.com', 'nmbvdajkda dada dajkdaj sda'),
(42, '', 'cleitonbraga56@gmail.com', 'nmbvdajkda dada dajkdaj sda'),
(43, 'Cleiton', '', 'nmbvdajkda dada dajkdaj sda'),
(44, 'Roger', 'cleitonbraga56@gmail.com', 'oi guys'),
(45, 'CGLM', 'geral@gmail.com', 'Todos os nossos sistemas estÃ£o funcionando!'),
(46, 'CGLM', 'geral@gmail.com', 'Todos os nossos sistemas estÃ£o funcionando!'),
(47, 'Real Madrid', 'RealMadridOfficial@gmail.com', 'O Real Madrid Club de FÃºtbol, mais conhecido como Real Madrid ou simplesmente Real, Ã© um clube polidesportivo espanhol, com sede em Madrid. Foi fundado oficialmente no dia 6 de marÃ§o de 1902 pelos irmÃ£os Juan PadrÃ³s e Carlos PadrÃ³s, com o nome de (Sociedad) Madrid Foot-Ball Club.[2][nota 1] Iniciado como um clube de futebol, logo adquiriu um carÃ¡ter polidesportivo que o levou a desenvolver vÃ¡rios departamentos esportivos dentro da entidade, embora a maioria destes departamentos estejam desativados atualmente. Participa da Primeira DivisÃ£o da Espanha, a mais alta categoria do Campeonato Espanhol de Futebol, desde a sua fundaÃ§Ã£o, em 1929, sendo um dos trÃªs Ãºnicos clubes que nunca foram rebaixados, assim como o Athletic Club e o Barcelona.[3]\r\n\r\nDisputa suas partidas como mandante desde 1947 no EstÃ¡dio Santiago BernabÃ©u, anteriormente chamado Novo EstÃ¡dio de ChamartÃ­n, que conta com uma capacidade de 81.044 espectadores, o terceiro maior em capacidade da Europa. Ã‰ um dos clubes mais populares de seu paÃ­s.[4][5] A relevÃ¢ncia do clube, que se estende para fora da Espanha tornando-o um dos mais aclamados mundialmente,[6] e uma das entidades esportivas de maior valor de mercado e detentora de uma das maiores receitas anuais.[7][8] A propriedade do clube recai sobre seus mais de 100.000 mil membros associados e organizados, sendo um dos quatro Ãºnicos clubes profissionais da Espanha cuja entidade jurÃ­dica nÃ£o Ã© a de Sociedade AnÃ´nima Esportiva (S. A. D.).['),
(48, 'Instituto Federal Fluminense', 'institutoiff@gmail.com', 'Alunos, hoje serÃ¡ mais um glorioso dia de aula. Aproveitem!!!'),
(49, 'Alunos do IFF', 'alunosIFF@gmail.com', 'Eu sÃ³ quero sair daqui e ter longas fÃ©rias. Faz isso comigo nÃ£o, velho. '),
(50, 'Testando', 'cleitonbraga56@gmail.com', 'Testando por dÃºvida'),
(51, 'Cleitinho', 'cleitonbraga56@gmail.com', 'Fiz uma bagunÃ§a. Quero saber se ainda funciona'),
(52, 'Nome:', 'dfh', 'sdg'),
(53, 'Oi', 'Rapaziada!', 'Tudo bem com vocÃªs?!'),
(54, 'Cleiton', 'de Jesus', 'Braga'),
(55, 'Luiz', 'Cesar', 'Semana que vem Ã© o visto'),
(56, 'Luiz', 'Cesar', 'Semana que vem Ã© o visto');

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

<<<<<<< HEAD
INSERT INTO `usuario` (`nome`, `dt_nascimento`, `email`, `estado`, `cidade`, `senha`, `cpf`, `rg`, `cod_usuario`, `username`) VALUES
('helloworld', NULL, 'nein@gmail.com', NULL, NULL, '123', NULL, NULL, 1, 'hittler'),
('SEUQENCIA', NULL, 'flIFFamengo@gmail.com', NULL, NULL, '12546563', NULL, NULL, 2, ''),
('algumnome', NULL, 'EFSDWEH@gmail.com', NULL, NULL, '12546563', NULL, NULL, 3, ''),
('BRFJJKFe', NULL, 'EFSTRTGHH@gmail.com', NULL, NULL, '12546563', NULL, NULL, 4, ''),
('BRFJJKFSFFFe', NULL, 'EFSTRTGHTDGRSDGH@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 5, ''),
('OUTLOOK', NULL, 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 6, ''),
('OUTLfdffK', NULL, 'Gkbhjhj@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 7, ''),
('OUTLfdNNNNNNNNNNNNNNNNNffK', NULL, 'GkbNNNNNNhjhj@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 8, ''),
('OUTLOOK', NULL, 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 9, ''),
('OUTLOOK', NULL, 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 10, ''),
('OUTLOOK', NULL, 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 11, ''),
('OUTLOOK', NULL, 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 12, ''),
('OUTLOOK', NULL, 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 13, ''),
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14, ''),
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15, ''),
('2018-03-01', NULL, 'gfthgfh@gmail.com', NULL, NULL, 'frgftgfthgfh', NULL, NULL, 16, ''),
(NULL, NULL, 'FUNCIONA@gmail.com', NULL, NULL, 'DGHGFHFH', NULL, NULL, 17, ''),
('FUNCIONADISGRACA', NULL, 'FUNCIONADISGRACA@GMAIL.COM', NULL, NULL, 'DFHDFJKHDFJKG', NULL, NULL, 18, ''),
('PRIMEIROCLIENTEBIANKA', NULL, 'UYGYUH@GMAIL.COM', NULL, NULL, 'RTHGFRBHBGF', NULL, NULL, 19, ''),
('JOSEVALDO', NULL, 'SONSERINA.NAO.DRAGO@GMAIL.COM', NULL, NULL, 'BERRO123', NULL, NULL, 20, ''),
('OUTLOOK', NULL, 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 21, ''),
('Jonny', NULL, 'jonny@gmailo.com', NULL, NULL, 'gfghjhjgh', NULL, NULL, 22, ''),
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, ''),
('khjkhjkh', NULL, 'gdjk@gmail.com', NULL, NULL, 'jfljrflkd', NULL, NULL, 24, ''),
('FUNCIONANDO', NULL, 'FUNCIONANDOAGORA@GMAIL.COM', NULL, NULL, 'DJFREFKLEJ', NULL, NULL, 25, ''),
('kjhkjhjk', NULL, 'jdfjkdjh@gmail.com', NULL, NULL, 'rwfjhljfdl', NULL, NULL, 26, ''),
('OUTLOOK', NULL, 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 27, ''),
('FDGBFB', NULL, 'gdjFk@gmail.com', 'RJ', NULL, 'jfljrflkd', NULL, NULL, 28, ''),
('testando', NULL, 'testando@gmail.com', 'Rio de Janeiro', NULL, '123123', NULL, NULL, 29, ''),
('giyukyuk', NULL, 'uykyukuy@gmail.com', '8978987', NULL, 'jfljrflkd', NULL, NULL, 30, ''),
('Gabriel souza', NULL, 'cadastrando@gmail.com', 'Rio De Janeiro', NULL, 'senhasenhando', NULL, NULL, 31, ''),
('name', NULL, 'PASSEI@gmail.com', 'RJ', NULL, 'senha', '5874126982', '2365412879', 32, ''),
('Data', NULL, 'gmaill@hotmail.com', 'RJ', NULL, '123', '9856321470', '9856321470', 33, ''),
('Nome', NULL, 'mein@gmail.com', 'Rj', NULL, 'senha', '12345678', '87654321', 34, ''),
('Cadastre', NULL, 'ajn@gmail.com', 'RJ', 'QuissamÃ£', 'senha', '9876543', '12345678', 35, ''),
('Marcos', NULL, 'marquinhos2@gmail.com', 'RJ', 'quissamÃ£', '123', '12345678923', '13642371368', 36, '');
=======
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
>>>>>>> 01719d94bbecfe5104d704f1eba63a57be2428bf

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD KEY `id_agendamento` (`id_agendamento`);

--
-- Índices de tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

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
<<<<<<< HEAD
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
=======
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `idempresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
>>>>>>> 01719d94bbecfe5104d704f1eba63a57be2428bf
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
