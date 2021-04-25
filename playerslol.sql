-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Nov-2020 às 01:51
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `playerslol`
--
CREATE DATABASE IF NOT EXISTS `playerslol` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `playerslol`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_players`
--

CREATE TABLE `tabela_players` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nick` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rota` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `elo` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temporada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tabela_players`
--

INSERT INTO `tabela_players` (`id`, `nome`, `nick`, `rota`, `elo`, `temporada`) VALUES
(1, 'David Matheus Rosa da Silva', 'Press R For GG', 'Suporte', 'Ouro 3', 3),
(2, 'Kethelyn Domingues', 'babyKet', 'Atirador', 'Ouro 4', 8),
(3, 'Braian Freitas de Lima', 'SurFizzTa GG', 'Meio', 'Prata 3', 2),
(4, 'Murilo Paes', 'Syeth', 'Topo', ' Ouro 2', 1),
(5, 'Alexandre Mareze', 'Äragorn', 'Jungle', 'Platina 1', 4),
(6, 'Vinícus Luz', 'TO SABENDO', 'Meio', 'Prata 1', 3),
(7, 'Daniel Krupniski', 'Daniéu', 'Suporte', 'Ouro 3', 5),
(8, 'Eduardo Lopes', 'Nabucondonosor', 'Atirador', 'Ouro 4', 4),
(9, 'Matheus Reina', 'Yoru No Oni', 'Atirador', 'Prata 4', 9),
(10, 'Lucas Portela', 'xGoiabaXDx', 'Atirador', 'Bronze 4', 10),
(11, 'Hellen Monteiro', 'Margot01', 'Suporte', 'Prata 4', 10);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tabela_players`
--
ALTER TABLE `tabela_players`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tabela_players`
--
ALTER TABLE `tabela_players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
