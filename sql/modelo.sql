-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 17-Mar-2016 às 13:50
-- Versão do servidor: 10.0.23-MariaDB-0+deb8u1
-- PHP Version: 5.6.17-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `copeinca`
--
CREATE DATABASE IF NOT EXISTS `copeinca` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `copeinca`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_sistema`
--

DROP TABLE IF EXISTS `login_sistema`;
CREATE TABLE IF NOT EXISTS `login_sistema` (
`id` int(11) NOT NULL,
  `siape` varchar(7) NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `planejamento`
--

DROP TABLE IF EXISTS `planejamento`;
CREATE TABLE IF NOT EXISTS `planejamento` (
`id` int(11) NOT NULL,
  `siape` varchar(7) NOT NULL,
  `nome_evento` varchar(200) NOT NULL,
  `cidade_evento` varchar(100) NOT NULL,
  `data_inicio_evento` date NOT NULL,
  `data_fim_evento` date NOT NULL,
  `valor_passagem` decimal(10,0) DEFAULT NULL,
  `justificativa_evento_relevancia` text NOT NULL,
  `sitio_evento` varchar(200) DEFAULT NULL,
  `relevancia_evento` int(11) NOT NULL,
  `projeto_institucional` int(11) NOT NULL,
  `estudando` int(11) NOT NULL,
  `numero_evento_nacional` int(11) NOT NULL,
  `numero_evento_internacional` int(11) NOT NULL,
  `titulacao` int(11) NOT NULL,
  `tempo_servico` int(11) NOT NULL,
  `tipo_evento_capacitacao` int(11) NOT NULL,
  `inscricao` decimal(10,0) DEFAULT '0',
  `data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total_diarias` decimal(10,0) DEFAULT NULL,
  `total_pontos` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_sistema`
--
ALTER TABLE `login_sistema`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planejamento`
--
ALTER TABLE `planejamento`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_sistema`
--
ALTER TABLE `login_sistema`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `planejamento`
--
ALTER TABLE `planejamento`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

ALTER TABLE planejamento ADD COLUMN status int(2) AFTER total_pontos;
UPDATE planejamento set status = 0;

ALTER TABLE planejamento ADD COLUMN status int(2) AFTER prioridade;
UPDATE planejamento set prioridade = 0;
