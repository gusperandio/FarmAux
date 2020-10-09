-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Nov-2019 às 08:18
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farm_aux`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alta`
--

CREATE TABLE `alta` (
  `id_solicitacao_alta` int(11) NOT NULL,
  `hora_atual_alta` varchar(5) NOT NULL,
  `nome_pctAlta` varchar(30) DEFAULT NULL,
  `nome_respAlta` varchar(30) DEFAULT NULL,
  `nome_IntAngtiga` varchar(15) DEFAULT NULL,
  `nome_Intnova` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `devolucao`
--

CREATE TABLE `devolucao` (
  `id_solicitacao_dev` int(11) NOT NULL,
  `hora_atual_dev` varchar(5) NOT NULL,
  `nome_pct_dev` varchar(30) DEFAULT NULL,
  `nome_resp_dev` varchar(30) DEFAULT NULL,
  `nome_med_dev` varchar(30) DEFAULT NULL,
  `motivo_dev` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `falta`
--

CREATE TABLE `falta` (
  `id_solicitacao_falta` int(11) NOT NULL,
  `hora_atual_falta` varchar(5) DEFAULT NULL,
  `nome_pct_falta` varchar(40) DEFAULT NULL,
  `nome_resp_falta` varchar(40) DEFAULT NULL,
  `nome_med_falta` varchar(30) DEFAULT NULL,
  `hour_med_falta` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario`
--

CREATE TABLE `horario` (
  `id_solicitacao_hora` int(11) NOT NULL,
  `hora_atual_horario` varchar(5) NOT NULL,
  `nome_pct_hora` varchar(30) DEFAULT NULL,
  `nome_resp_hora` varchar(30) DEFAULT NULL,
  `nome_med_hora` varchar(30) DEFAULT NULL,
  `hour_med_ant` varchar(5) DEFAULT NULL,
  `hour_med_novo` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `senha`) VALUES
(1, 'gustavofusco', '044ab5058e8cf4165d280e37297a7c4d'),
(2, 'farmacia', 'dbc3c50848d0018bc557251940feade3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alta`
--
ALTER TABLE `alta`
  ADD PRIMARY KEY (`id_solicitacao_alta`);

--
-- Indexes for table `devolucao`
--
ALTER TABLE `devolucao`
  ADD PRIMARY KEY (`id_solicitacao_dev`);

--
-- Indexes for table `falta`
--
ALTER TABLE `falta`
  ADD PRIMARY KEY (`id_solicitacao_falta`);

--
-- Indexes for table `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_solicitacao_hora`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alta`
--
ALTER TABLE `alta`
  MODIFY `id_solicitacao_alta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `devolucao`
--
ALTER TABLE `devolucao`
  MODIFY `id_solicitacao_dev` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `falta`
--
ALTER TABLE `falta`
  MODIFY `id_solicitacao_falta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `horario`
--
ALTER TABLE `horario`
  MODIFY `id_solicitacao_hora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
