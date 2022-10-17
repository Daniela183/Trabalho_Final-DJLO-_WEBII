-- phpMyAdmin SQL Dump
-- version 5.1.3
-- httpswww.phpmyadmin.net
--
-- Host 127.0.0.1
-- Tempo de geração 27-Jul-2022 às 1529
-- Versão do servidor 10.4.24-MariaDB
-- versão do PHP 8.1.4

SET SQL_MODE = NO_AUTO_VALUE_ON_ZERO;
START TRANSACTION;
SET time_zone = +0000;

--
-- Banco de dados `db_trabalhofinal`
--
CREATE DATABASE IF NOT EXISTS `db_trabalhofinal` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_trabalhofinal`;

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
(1, 'joao', '123', '7891027127961', '123.233.123-12', 'joao@gmail.com'),
(2, 'Luan', '123', '07898931331200', '123.123.123-12', 'teste@gmail.com');

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
(3, 'Palestra Robótica', 'sfdgsd', '21111-03-23', '120300', '120300', 31, 8),
(6, 'fasdf', 'sfdgsd', '2022-07-06', '085000', '115000', 20, 31);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_evento_aluno`
--

CREATE TABLE `tb_evento_aluno` (
  `id` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `checkin` time NOT NULL,
  `checkout` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_evento_aluno`
--

INSERT INTO `tb_evento_aluno` (`id`, `id_evento`, `id_aluno`, `status`, `checkin`, `checkout`) VALUES
(1, 3, 1, 1, '093140', '093152'),
(2, 6, 1, 0, '000000', '000000'),
(3, 6, 2, 1, '101756', '101803');

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `vw_evento`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `vw_evento` (
`nome` varchar(200)
,`horas` int(11)
,`titulo` varchar(200)
);

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `vw_nome`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `vw_nome` (
`nome` varchar(200)
);

-- --------------------------------------------------------

--
-- Estrutura para vista `vw_evento`
--
DROP TABLE IF EXISTS `vw_evento`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_evento`  AS SELECT `b`.`nome` AS `nome`, `c`.`horas` AS `horas`, `c`.`titulo` AS `titulo` FROM ((`tb_evento_aluno` `a` left join `tb_aluno` `b` on(`a`.`id_aluno` = `b`.`id`)) left join `tb_evento` `c` on(`a`.`id_evento` = `c`.`id`))  ;

-- --------------------------------------------------------

--
-- Estrutura para vista `vw_nome`
--
DROP TABLE IF EXISTS `vw_nome`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_nome`  AS SELECT DISTINCT `b`.`nome` AS `nome` FROM ((`tb_evento_aluno` `a` left join `tb_aluno` `b` on(`a`.`id_aluno` = `b`.`id`)) left join `tb_evento` `c` on(`a`.`id_evento` = `c`.`id`))  ;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_evento`
--
ALTER TABLE `tb_evento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tb_evento_aluno`
--
ALTER TABLE `tb_evento_aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
