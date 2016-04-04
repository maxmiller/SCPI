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



DROP TABLE IF EXISTS `servidor`;
CREATE TABLE IF NOT EXISTS `servidor` (
  `siape` varchar(7) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL

) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

ALTER TABLE `servidor`
ADD PRIMARY KEY (`siape`);

ALTER TABLE planejamento ADD CONSTRAINT planejamento_servidor FOREIGN KEY (siape) REFERENCES servidor(siape);

DROP TABLE IF EXISTS `requisicao_materiais`;
CREATE TABLE IF NOT EXISTS `requisicao_materiais` (
  `id` int(11) NOT NULL,
  `siape` varchar(7) NOT NULL,
  `material` varchar(200) NOT NULL,
  `especificacao` varchar(5000) NOT NULL,
  `empresa_um` varchar(500) NOT NULL,
  `cnpj_um` varchar(14) NOT NULL,
  `preco_um` decimal(10,2) NOT NULL,
  `site_um` varchar(100) ,
  `anexo_um` varchar(200) ,

  `empresa_dois` varchar(500) NOT NULL,
  `cnpj_dois` varchar(14) NOT NULL,
  `preco_dois` decimal(10,2) NOT NULL,
  `site_dois` varchar(100) ,
  `anexo_dois` varchar(200) ,

  `empresa_tres` varchar(500) NOT NULL,
  `cnpj_tres` varchar(14) NOT NULL,
  `preco_tres` decimal(10,2) NOT NULL,
  `site_tres` varchar(100) ,
  `anexo_tres` varchar(200) ,
  `status` integer default 0
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

ALTER TABLE requisicao_materiais ADD CONSTRAINT requisicao_materiais_servidor FOREIGN KEY (siape) REFERENCES servidor(siape);

ALTER TABLE copeinca.requisicao_materiais DROP COLUMN anexo_dois;

ALTER TABLE copeinca.requisicao_materiais DROP COLUMN anexo_tres;

ALTER TABLE copeinca.requisicao_materiais DROP COLUMN anexo_um;

ALTER TABLE copeinca.requisicao_materiais DROP COLUMN cnpj_dois;

ALTER TABLE copeinca.requisicao_materiais DROP COLUMN cnpj_tres;

ALTER TABLE copeinca.requisicao_materiais DROP COLUMN cnpj_um;

ALTER TABLE copeinca.requisicao_materiais DROP COLUMN empresa_dois;

ALTER TABLE copeinca.requisicao_materiais DROP COLUMN empresa_tres;

ALTER TABLE copeinca.requisicao_materiais DROP COLUMN empresa_um;

ALTER TABLE copeinca.requisicao_materiais DROP COLUMN preco_dois;

ALTER TABLE copeinca.requisicao_materiais DROP COLUMN preco_tres;

ALTER TABLE copeinca.requisicao_materiais DROP COLUMN preco_um;

ALTER TABLE copeinca.requisicao_materiais DROP COLUMN site_dois;

ALTER TABLE copeinca.requisicao_materiais DROP COLUMN site_tres;

ALTER TABLE copeinca.requisicao_materiais DROP COLUMN site_um;

ALTER TABLE copeinca.requisicao_materiais ADD PRIMARY KEY (id);

CREATE TABLE copeinca.requisicao_material_item (
  id INT NOT NULL,
  nome_empresa VARCHAR(200) NOT NULL,
  cnpj VARCHAR(14) NOT NULL,
  id_requisicao INT NOT NULL,
  preco DECIMAL(10,2) NOT NULL,
  site VARCHAR(200),
  anexo VARCHAR(250) NOT NULL,
  PRIMARY KEY (id)
);


ALTER TABLE copeinca.requisicao_material_item ADD CONSTRAINT requisicao_materiais_requisicao_material_item_fk
FOREIGN KEY (id_requisicao)
REFERENCES copeinca.requisicao_materiais (id)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE copeinca.login_sistema ADD CONSTRAINT servidor_login_sistema_fk
FOREIGN KEY (siape)
REFERENCES copeinca.servidor (siape)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;



ALTER TABLE copeinca.requisicao_materiais ADD COLUMN tipo INT NOT NULL AFTER status;

ALTER TABLE copeinca.requisicao_materiais ADD COLUMN observacao VARCHAR(5000) NOT NULL AFTER tipo;

ALTER TABLE copeinca.requisicao_materiais ADD COLUMN quantidade INT NOT NULL AFTER observacao;

ALTER TABLE copeinca.requisicao_materiais ADD COLUMN finalidade VARCHAR(1000) NOT NULL AFTER quantidade;



