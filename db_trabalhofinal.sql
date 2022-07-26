-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Jul-2022 às 15:12
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
-- Banco de dados: `db_trabalhofinal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aluno`
--

CREATE TABLE `tb_aluno` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `matricula` varchar(200) NOT NULL,
  `cpf` varchar(200) NOT NULL,
  `email` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_aluno`
--

INSERT INTO `tb_aluno` (`id`, `nome`, `senha`, `matricula`, `cpf`, `email`) VALUES
(1, 'Afrânio', '12345', '12345', '123.456.999-00', 'afranio@gmail.com'),
(2, 'Luan', '456', '4567', '789.555.666-17', 'luan@gmail.com'),
(3, 'joao', '123', '333', '123.123.123-12', 'joao@gmail.com'),
(4, 'Otávio', '123', '123', '000.001.009-12', 'profeta.katiane@gmail.com'),
(5, 'Daniela', '123', '20201070', '023.254.135-56', 'vania@gmail.com'),
(6, 'Arthur', '123', '123321', '123.123.123-19', 'arthur@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_evento`
--

CREATE TABLE `tb_evento` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `dia` varchar(14) NOT NULL,
  `horarioI` time NOT NULL,
  `horarioF` time NOT NULL,
  `vagas` int(11) NOT NULL,
  `horas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_evento`
--

INSERT INTO `tb_evento` (`id`, `titulo`, `descricao`, `dia`, `horarioI`, `horarioF`, `vagas`, `horas`) VALUES
(1, 'Palestra sobre o laguinho do vovô', 'banho comunitário', '2022-07-27', '08:00:00', '12:00:00', 0, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_evento_aluno`
--

CREATE TABLE `tb_evento_aluno` (
  `id` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `checkin` time DEFAULT NULL,
  `checkout` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_evento_aluno`
--

INSERT INTO `tb_evento_aluno` (`id`, `id_evento`, `id_aluno`, `status`, `checkin`, `checkout`) VALUES
(1, 1, 5, 0, '09:39:52', NULL),
(2, 1, 3, 0, '09:43:13', '09:45:27'),
(3, 1, 2, 0, NULL, NULL),
(4, 1, 1, 0, '09:48:18', NULL),
(5, 1, 4, 0, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_aluno`
--
ALTER TABLE `tb_aluno`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_evento`
--
ALTER TABLE `tb_evento`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_evento_aluno`
--
ALTER TABLE `tb_evento_aluno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_aluno` (`id_aluno`),
  ADD KEY `fk_evento` (`id_evento`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_aluno`
--
ALTER TABLE `tb_aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tb_evento`
--
ALTER TABLE `tb_evento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_evento_aluno`
--
ALTER TABLE `tb_evento_aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_evento_aluno`
--
ALTER TABLE `tb_evento_aluno`
  ADD CONSTRAINT `fk_aluno` FOREIGN KEY (`id_aluno`) REFERENCES `tb_aluno` (`id`),
  ADD CONSTRAINT `fk_evento` FOREIGN KEY (`id_evento`) REFERENCES `tb_evento` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
