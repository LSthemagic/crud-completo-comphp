-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Mar-2023 às 20:04
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

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
-- Estrutura da tabela `informes`
--

CREATE TABLE `informes` (
  `id` int(11) NOT NULL,
  `f_nome` varchar(70) DEFAULT NULL,
  `f_senha` varchar(70) DEFAULT NULL,
  `f_data` varchar(70) DEFAULT NULL,
  `f_email` varchar(45) DEFAULT NULL,
  `f_cpf` varchar(20) DEFAULT NULL,
  `f_tel` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `informes`
--

INSERT INTO `informes` (`id`, `f_nome`, `f_senha`, `f_data`, `f_email`, `f_cpf`, `f_tel`) VALUES
(1, 'Railan Santana', '777xxx', '25/03/2005', 'railan@gmail.com', '000.000.000-00', '(75) 98215-6918'),
(3, 'José', '777xxx', '25/03/2005', 'toinho@gmail.com', '000.000.000-00', '(75) 98215-6918'),
(11, 'Silva Lemos', 'dezembro', '13/12/1981', 'dale@mengo.com', '999.999.999-99', '(12) 81128-1128'),
(16, 'Jorge Daniel', '7777', '22/10/1999', 'jorgindograu@gmail.com', '69.696.969-99', '(75) 84542-1452'),
(17, 'Cleitin Rasta', 'claeitin', '12/12/2012', 'dogera@gmail.com', '895.325.855-45', '(21) 98655-5965'),
(18, 'Daniel do Vava', 'valorant', '02/02/2002', 'dani@gmail.com', '211.545.454-84', '(75) 82453-6501');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `informes`
--
ALTER TABLE `informes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `informes`
--
ALTER TABLE `informes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
