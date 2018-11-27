-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 23/11/2018 às 19:40
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
-- Estrutura para tabela `empresa`
--

CREATE TABLE `empresa` (
  `nome` varchar(20) DEFAULT NULL,
  `cnpj` decimal(20,0) DEFAULT NULL,
  `senha` longtext,
  `email` varchar(200) NOT NULL,
  `endereco` varchar(300) NOT NULL,
  `idempresa` int(11) NOT NULL,
  `username` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `empresa`
--

INSERT INTO `empresa` (`nome`, `cnpj`, `senha`, `email`, `endereco`, `idempresa`, `username`) VALUES
('apple', '52146', 'senha', 'Apple@icloud.com', 'Rua Street Apple', 1, 'Apple Company');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`idempresa`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `idempresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
