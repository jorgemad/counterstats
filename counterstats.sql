-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Jan-2020 às 01:25
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `counterstats`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo`
--

CREATE TABLE `jogo` (
  `codjogo` int(11) NOT NULL,
  `codutilizador` int(11) NOT NULL,
  `datajogo` date NOT NULL,
  `kills` int(11) NOT NULL,
  `deaths` int(11) NOT NULL,
  `assist` int(11) NOT NULL,
  `kdr` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jogo`
--

INSERT INTO `jogo` (`codjogo`, `codutilizador`, `datajogo`, `kills`, `deaths`, `assist`, `kdr`) VALUES
(2, 1, '2020-01-23', 30, 15, 5, 2),
(15, 1, '2020-01-24', 30, 15, 5, 2),
(16, 1, '2020-01-24', 20, 20, 5, 1),
(18, 2, '2020-01-25', 30, 10, 5, 3),
(19, 2, '2020-01-24', 25, 25, 10, 1),
(20, 2, '2020-01-23', 35, 10, 5, 3.5),
(21, 1, '2020-01-21', 15, 10, 5, 1.5),
(22, 4, '2020-01-25', 26, 14, 8, 1.86),
(23, 4, '2020-01-24', 23, 18, 2, 1.28),
(24, 5, '2020-01-25', 40, 25, 6, 1.6),
(25, 5, '2020-01-23', 38, 8, 6, 4.75);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipoutilizador`
--

CREATE TABLE `tipoutilizador` (
  `codtipo` int(11) NOT NULL,
  `tipoutilzador` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipoutilizador`
--

INSERT INTO `tipoutilizador` (`codtipo`, `tipoutilzador`) VALUES
(1, 'Admin'),
(2, 'Utilizador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

CREATE TABLE `utilizadores` (
  `codutilizador` int(11) NOT NULL,
  `codtipo` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `steamuser` varchar(25) NOT NULL,
  `datanascimento` varchar(55) NOT NULL,
  `ranki` varchar(30) NOT NULL,
  `password` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `utilizadores`
--

INSERT INTO `utilizadores` (`codutilizador`, `codtipo`, `nome`, `email`, `steamuser`, `datanascimento`, `ranki`, `password`) VALUES
(1, 1, 'Jorge Duarte', 'jorgemiguelad@outlook.pt', 'MikeHawkPT', '1999-01-03', 'Silver 2', '123456'),
(2, 2, 'Daniel Ribeiro', 'dany.ribeiro.santos@hotmail.com', 'Dani', '17-06-1998', 'Global Elite', '123456'),
(3, 2, 'Diogo Silva', 'Ds1024.silva@gmail.com', 'T0X1C', '1999-01-01', 'Gold 1', '123456'),
(4, 2, 'Alexandra Lopes', 'mmb.xana@hotmail.com', 'mmb.xana', '1999-03-08', 'Silver 1', '123456'),
(5, 2, 'Alexandre Oliveira', 'alexandre.oliveira@hotmail.com', 'TrollerPT', '1998-01-08', 'Silver 4', '123456');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `jogo`
--
ALTER TABLE `jogo`
  ADD PRIMARY KEY (`codjogo`),
  ADD KEY `codutilizador` (`codutilizador`);

--
-- Índices para tabela `tipoutilizador`
--
ALTER TABLE `tipoutilizador`
  ADD PRIMARY KEY (`codtipo`);

--
-- Índices para tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD PRIMARY KEY (`codutilizador`),
  ADD KEY `codtutilizador` (`codtipo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `jogo`
--
ALTER TABLE `jogo`
  MODIFY `codjogo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `tipoutilizador`
--
ALTER TABLE `tipoutilizador`
  MODIFY `codtipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  MODIFY `codutilizador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `jogo`
--
ALTER TABLE `jogo`
  ADD CONSTRAINT `jogo_ibfk_1` FOREIGN KEY (`codutilizador`) REFERENCES `utilizadores` (`codutilizador`);

--
-- Limitadores para a tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD CONSTRAINT `utilizadores_ibfk_1` FOREIGN KEY (`codtipo`) REFERENCES `tipoutilizador` (`codtipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
