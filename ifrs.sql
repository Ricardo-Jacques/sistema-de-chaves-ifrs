-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Nov-2023 às 21:20
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ifrs`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `chaves`
--

CREATE TABLE `chaves` (
  `created` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `nome` varchar(50) NOT NULL,
  `pessoa` varchar(50) NOT NULL,
  `data_retirada` date NOT NULL,
  `hora_retirada` time NOT NULL,
  `data_devolucao` date NOT NULL,
  `hora_devolucao` time NOT NULL,
  `estado` varchar(50) NOT NULL DEFAULT 'Disponível'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `chaves`
--

INSERT INTO `chaves` (`created`, `nome`, `pessoa`, `data_retirada`, `hora_retirada`, `data_devolucao`, `hora_devolucao`, `estado`) VALUES
('2023-10-16 23:39:21.917195', 'Auditório A01', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-16 23:54:25.910755', 'Auditório A02', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-16 23:54:33.743364', 'Espaço de Línguas e Culturas - A11', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-16 23:54:40.807599', 'Espaço Lúdico-esportivo', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-16 23:54:48.117907', 'Estúdio NEaD', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-16 23:54:58.444773', 'Laboratório B02 (LEMA)', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-16 23:55:20.462385', 'Laboratório D05 (Informática)', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-16 23:57:36.085661', 'Laboratório D06 (Informática)', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-16 23:57:49.046646', 'Laboratório D10 (Informática)', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-16 23:57:55.567085', 'Laboratório de Biologia e Química', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-16 23:58:02.580335', 'Laboratório de Física', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-16 23:58:09.652491', 'Laboratório E01 (Eletrônica/Automação)', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-16 23:58:16.680515', 'Laboratório E02 (Eletrônica/Automação)', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-16 23:58:23.860614', 'Laboratório E05 (Eletrônica)', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-16 23:58:29.648948', 'Laboratório E06 (Eletrônica)', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:05:32.820444', 'Laboratório E07 (Informática)', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:05:39.442274', 'Laboratório E08 (Informática)', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:05:48.729432', 'Laboratório E09 (Informática)', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:05:55.078110', 'Laboratório E10 (Informática)', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:06:02.311761', 'Laboratório Maker', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:06:09.062143', 'Sala A01', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:06:16.735683', 'Sala B01', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:06:22.134601', 'Sala B03', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:08:33.167700', 'Sala B04', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:08:46.440485', 'Sala C2 (Sala de Expressões)', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:08:52.871717', 'Sala D01', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:08:59.517275', 'Sala D02', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:09:08.069946', 'Sala D03', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:09:13.979395', 'Sala D04', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:09:19.100971', 'Sala D08', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:09:25.860153', 'Sala D09', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:09:35.580932', 'Sala de reuniões (F)', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:09:44.603824', 'Sala F002 (térreo)', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:09:51.171708', 'Sala F003 (térreo)', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:09:56.357248', 'Sala F004 (térreo)', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:10:02.797195', 'Sala F005 (térreo)', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:10:08.924154', 'Sala F006 (térreo)', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:10:17.826113', 'Sala F007 (térreo)', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:10:36.910343', 'Sala F008 (térreo)', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:10:43.019846', 'Sala F009 (térreo)', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:10:48.940147', 'Sala F010 (térreo)', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:10:54.163295', 'Sala F011 (térreo)', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:11:00.077050', 'Sala F101 (2º piso)', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível'),
('2023-10-17 00:11:07.428134', 'Sala F102 (2º piso)', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'Disponível');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico_chaves`
--

CREATE TABLE `historico_chaves` (
  `nome` varchar(50) NOT NULL,
  `pessoa` varchar(50) NOT NULL,
  `data_retirada` date NOT NULL,
  `hora_retirada` time NOT NULL,
  `data_devolucao` date NOT NULL,
  `hora_devolucao` time NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(30) NOT NULL,
  `senha` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `senha`) VALUES
('RecepcaoIF', '34681674');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `chaves`
--
ALTER TABLE `chaves`
  ADD PRIMARY KEY (`nome`);

--
-- Índices para tabela `historico_chaves`
--
ALTER TABLE `historico_chaves`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `historico_chaves`
--
ALTER TABLE `historico_chaves`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
