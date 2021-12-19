-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Dez-2021 às 18:16
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbestudante`
--

CREATE TABLE `tbestudante` (
  `idpessoa` int(11) NOT NULL,
  `escola` varchar(50) NOT NULL,
  `curso` varchar(50) NOT NULL,
  `turno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbestudantes`
--

CREATE TABLE `tbestudantes` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nascimento` date NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `endereco` varchar(20) NOT NULL,
  `tipoDocu` varchar(50) NOT NULL,
  `numDocu` varchar(20) DEFAULT NULL,
  `escola` varchar(50) NOT NULL,
  `curso` varchar(30) NOT NULL,
  `turno` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbestudantes`
--

INSERT INTO `tbestudantes` (`id`, `nome`, `nascimento`, `telefone`, `endereco`, `tipoDocu`, `numDocu`, `escola`, `curso`, `turno`) VALUES
(2, 'Gonçalo', '0000-00-00', '123', '', 'Admin', NULL, '', '', ''),
(6, 'Gonçalo', '0000-00-00', '565', '', 'BI', NULL, 'ISCAT', 'enginf', 'noite'),
(7, 'Teste', '0000-00-00', '45874', '', 'PassPort', '555', 'CARDEAL', 'Enferm', 'Manha'),
(8, 'Teste2', '0000-00-00', '87954', '', 'BI', '45521', 'CARDEAL', 'Sociologia', 'Manha'),
(9, 'Luis Próspero', '0000-00-00', '456', 'cat', 'BI', '45115', 'ISCAT', 'eng inf', 'noite'),
(10, 'Teste3', '0000-00-00', '9999', 'catepa1', 'SemDocumento', '4526', 'ISCAT', 'Enferm', 'Tarde'),
(11, 'Luis Próspero', '0000-00-00', '940599670', 'canambua', 'BI', '4565ME204', 'ISCAT', 'enginf', 'noite'),
(12, 'António', '2021-11-20', '95846822', 'Ritondo', 'BI', '2556655ME5', 'ISCAT', 'Pscologia', 'Manha'),
(13, 'Teste3', '1990-10-29', '925874569', 'CamPo', 'BI', '1262M002', 'CARDEAL', 'Sociologia', 'noite');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpessoa`
--

CREATE TABLE `tbpessoa` (
  `idpessoa` int(11) NOT NULL,
  `nome` varchar(52) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `tipoDocu` varchar(50) NOT NULL,
  `numDocu` varchar(50) NOT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `telefone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuarios`
--

CREATE TABLE `tbusuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `email` varchar(15) NOT NULL,
  `nivel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbusuarios`
--

INSERT INTO `tbusuarios` (`id`, `usuario`, `senha`, `email`, `nivel`) VALUES
(1, 'Próspero', 'admin', 'p@mail.com', 'Admin'),
(2, 'pro', '000', 'l@gmail.com', 'Admin'),
(3, 'Lopes Próspero', '111', 'l@hotmail.co', 'Admin'),
(4, '', '111', '', 'Admin'),
(5, 'Adão', '1234', 'adao@gmail.com', 'Estudante'),
(7, 'Luis', '222', 'llll@gmail.com', 'Prof');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbestudante`
--
ALTER TABLE `tbestudante`
  ADD PRIMARY KEY (`idpessoa`);

--
-- Índices para tabela `tbestudantes`
--
ALTER TABLE `tbestudantes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numDocu` (`numDocu`);

--
-- Índices para tabela `tbpessoa`
--
ALTER TABLE `tbpessoa`
  ADD PRIMARY KEY (`idpessoa`),
  ADD UNIQUE KEY `numDocu` (`numDocu`);

--
-- Índices para tabela `tbusuarios`
--
ALTER TABLE `tbusuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbestudante`
--
ALTER TABLE `tbestudante`
  MODIFY `idpessoa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbestudantes`
--
ALTER TABLE `tbestudantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tbpessoa`
--
ALTER TABLE `tbpessoa`
  MODIFY `idpessoa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbusuarios`
--
ALTER TABLE `tbusuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbestudante`
--
ALTER TABLE `tbestudante`
  ADD CONSTRAINT `tbEstudante` FOREIGN KEY (`idpessoa`) REFERENCES `tbpessoa` (`idpessoa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
