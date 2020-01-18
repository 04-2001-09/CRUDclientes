-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 18-Jan-2020 às 05:22
-- Versão do servidor: 5.6.34
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `tipoEnd` varchar(100) NOT NULL,
  `nomeRua` varchar(100) NOT NULL,
  `numero` varchar(11) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `telefone1` varchar(14) NOT NULL,
  `telefone2` varchar(14) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `situation` int(1) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`nome`, `sobrenome`, `email`, `cep`, `tipoEnd`, `nomeRua`, `numero`, `bairro`, `telefone1`, `telefone2`, `senha`, `situation`, `id`) VALUES
('Ivan', 'Milani', 'allanoliveira9@hotmail.com', '14760000', 'alameda', 'Allan Milani', '2', 'Ibitiuva', '16994211662', '16994211662', '123', 1, 1),
('Luiz', 'Milani', 'allanoliveira9@hotmail.com', '14760000', 'avenida', 'Allan Milani', '2', 'Ibitiuva', '16994211662', '16994211662', '123', 1, 2),
('Allan', 'Milani', 'allanoliveira9@hotmail.com', '14760000', 'avenida', 'Allan Milani', '2', 'Ibitiuva', '16994211662', '16994211662', '123', 1, 3),
('Joao', 'Rissi', 'allan.milani582@gmail.com', '14760000', 'quadra', 'Allan Milani', '8', 'Ibitiuva', '16994211662', '16994211662', '123', 1, 4),
('Rubens', 'Camoleze', 'allnoliveira9@hotmail.com', '14760-000', 'rua', 'Allan Milani', '2', 'Ibitiuva', '(16) 99421-166', '(16) 99421-166', '456', 1, 5),
('Ivan', 'Camoleze', 'allnoliveira9@hotmail.com', '14760000', 'avenida', 'Allan Milani', '2', 'Ibitiuva', '16994211662', '16994211662', '456', 1, 6),
('Eduardo', 'Rissi', 'allan.milani582@gmail.com', '14760000', 'rua', 'Allan Milani', '8', 'Ibitiuva', '16994211662', '16994211662', '159', 1, 7),
('Eduardo', 'Rissi', 'allan.milani582@gmail.com', '14760000', 'rua', 'Allan Milani', '8', 'Ibitiuva', '16994211662', '16994211662', '159', 1, 8),
('Joaquim', 'Ribeiro', 'allan.milani582@gmail.com', '14760-000', 'quadra', 'Allan Milani', '8', 'Ibitiuva', '(16) 9942-1166', '(16) 9942-1166', '159', 0, 9),
('Luiza', 'Silva', 'allanoliveira9@hotmail.com', '14760000', 'rua', 'Allan Milani', '9', 'Ibitiuva', '16994211662', '16994211662', '123', 1, 10),
('Maria', 'Aparecida', 'maria@email.com', '14760-000', 'rua', 'Saudade', '8', 'Centro', '(16) 99421-166', '(16) 99345-767', '789456', 1, 11),
('Aliandro', 'Milani', 'aliandromilani@gmai.com', '14760-000', 'rua', '8', '54', 'centro', '(16) 99203-270', '(16) 99345-767', '7630', 0, 12),
('Allan', 'Milani', 'allanoliveira9@hotmail.com', '14760-000', 'praca', 'Allan Milani', '54', 'Ibitiuva', '(16) 99421-166', '(16) 99421-166', '56', 0, 13),
('Allan', 'Milani', 'allanoliveira9@hotmail.com', '14760-000', 'avenida', 'Allan Milani', '2', 'Ibitiuva', '(16) 99421-166', '(16) 99421-166', '123', 0, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
