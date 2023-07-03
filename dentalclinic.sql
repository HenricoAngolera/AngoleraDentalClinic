-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Dez-2018 às 09:32
-- Versão do servidor: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dentalclinic`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `Codigo` int(11) NOT NULL,
  `Nome` varchar(60) NOT NULL,
  `Celular` varchar(15) NOT NULL,
  `Telefone` varchar(15) NOT NULL,
  `Senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`Codigo`, `Nome`, `Celular`, `Telefone`, `Senha`) VALUES
(1, 'Ivone Duarte Angolera', '55984321329', '5534228006', 'a5m6o7r8');

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `Codigo` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Horario` time NOT NULL,
  `Sintomas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `agendamento`
--

INSERT INTO `agendamento` (`Codigo`, `Data`, `Horario`, `Sintomas`) VALUES
(1, '2019-06-15', '09:00:00', 'Estou com dor no canino.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `Codigo` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sobrenome` varchar(30) NOT NULL,
  `datadenasc` date NOT NULL,
  `cel` varchar(15) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `rua` varchar(35) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `ndacasa` int(5) NOT NULL,
  `cidade` varchar(35) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `indic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`Codigo`, `nome`, `sobrenome`, `datadenasc`, `cel`, `tel`, `rua`, `bairro`, `ndacasa`, `cidade`, `senha`, `email`, `indic`) VALUES
(1, 'Henrico', 'Angolera', '2001-01-18', '2147483647', '2147483647', 'Rua dos Andradas, 153', 'Centro', 153, 'Alegrete', 'lindo', 'zoro97500@gmail.com', 'Nivaldinho');

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

CREATE TABLE `consulta` (
  `Codigo` int(11) NOT NULL,
  `procedimento` varchar(60) NOT NULL,
  `codigopaciente` int(11) NOT NULL,
  `horainicio` time NOT NULL,
  `horafim` time NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `consulta`
--

INSERT INTO `consulta` (`Codigo`, `procedimento`, `codigopaciente`, `horainicio`, `horafim`, `data`) VALUES
(1, 'RemoÃ§Ã£o de cÃ¡rie no canino', 1, '09:00:00', '11:00:00', '2019-05-06'),
(2, 'ManutenÃ§Ã£o ortodintica', 1, '13:00:00', '13:15:00', '2019-01-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indexes for table `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indexes for table `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`Codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `consulta`
--
ALTER TABLE `consulta`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
