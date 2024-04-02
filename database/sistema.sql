-- phpMyAdmin SQL Dump
-- version 5.2.1deb1ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 16/03/2024 às 13:00
-- Versão do servidor: 8.0.36-0ubuntu0.23.10.1
-- Versão do PHP: 8.3.3-1+ubuntu22.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int NOT NULL,
  `nome` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `cpf` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `bairro` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `telefone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `whatsapp` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  `isDeleted` varchar(1) COLLATE utf8mb4_bin NOT NULL,
  `cadastradoEm` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `cpf`, `bairro`, `telefone`, `whatsapp`, `ativo`, `isDeleted`, `cadastradoEm`) VALUES
(1, 'Zezim Quantas', 'zezim@email.com', '78945613297', 'Two Brothers Park', '85996328820', '85998587', 0, '*', '2024-02-02 22:44:05'),
(2, 'Luizim Quantas', 'huizim@email.com', '78945613298', 'Good Gardem', '85210', '852114', 0, '*', '2024-02-02 22:44:05'),
(3, 'Hugim Quantas', 'hugim@email.com', '789456132979', 'Two Brothers Park', '8520140', '801200', 0, '*', '2024-02-02 22:44:05'),
(4, 'Maria das Quantas', 'mariadas@email.com', '78945613295', 'Good Gardem', '0', '0', 1, '*', '2024-02-02 22:44:05'),
(5, 'Joaquina Quantas', 'joaquina@email.com', '78945613294', 'Miss Jane', '0', '0', 1, '*', '2024-02-02 22:44:05'),
(6, 'joao do pulo', 'pulo@email.com', '123456', '8520', '52', '82', 1, '', '2024-03-16 01:37:52'),
(7, 'teste', 'teset', 'teset', '153135', '232213', '2', 1, '*', '2024-03-16 02:52:35'),
(8, 'test', 'et', 'testet', 'tetset', '', '', 0, '*', '2024-03-16 03:24:02');

-- --------------------------------------------------------

--
-- Estrutura para tabela `itensvenda`
--

CREATE TABLE `itensvenda` (
  `id` int NOT NULL,
  `qtd` int DEFAULT NULL,
  `idVenda` int DEFAULT NULL,
  `idProduto` int DEFAULT NULL,
  `cadastradoEm` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `itensvenda`
--

INSERT INTO `itensvenda` (`id`, `qtd`, `idVenda`, `idProduto`, `cadastradoEm`) VALUES
(1, 2, 1, 1, '2024-02-02 22:49:14'),
(2, 2, 1, 2, '2024-02-02 22:49:14'),
(3, 3, 1, 6, '2024-02-02 22:49:14'),
(4, 2, 1, 8, '2024-02-02 22:49:14'),
(5, 3, 1, 15, '2024-02-02 22:49:14'),
(6, 10, 2, 1, '2024-02-02 22:55:02'),
(7, 2, 2, 2, '2024-02-02 22:55:02'),
(8, 4, 2, 6, '2024-02-02 22:55:02'),
(9, 2, 2, 8, '2024-02-02 22:55:02'),
(10, 8, 2, 15, '2024-02-02 22:55:02');

-- --------------------------------------------------------

--
-- Estrutura para tabela `logs`
--

CREATE TABLE `logs` (
  `id` int NOT NULL,
  `log_tipo` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `log_conteudo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `criadoEm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `logs`
--

INSERT INTO `logs` (`id`, `log_tipo`, `log_conteudo`, `criadoEm`) VALUES
(4, 'Alteraçaõ de Status', 'Produto com o id 1 foi marcado como 0 pelo usuario XXXXXXX', '2024-02-08 22:49:50'),
(5, 'Alteraçaõ de Status', 'Produto com o id 2 foi marcado como 0 pelo usuario XXXXXXX', '2024-02-08 22:49:53'),
(6, 'Alteraçaõ de Status', 'Produto com o id 3 foi marcado como 0 pelo usuario XXXXXXX', '2024-02-08 22:49:55'),
(7, 'Alteraçaõ de Status', 'Produto com o id 1 foi marcado como 1 pelo usuario XXXXXXX', '2024-02-08 22:50:23'),
(8, 'Exclusao de Produto', 'Produto com o id 11 foi marcado como deletado pelo usuario XXXXXXX', '2024-02-08 22:51:14'),
(9, 'Exclusao de Produto', 'Produto com o id 11 foi marcado como deletado pelo usuario XXXXXXX', '2024-02-08 22:51:21'),
(10, 'Exclusao de Produto', 'Produto com o id 11 foi marcado como deletado pelo usuario XXXXXXX', '2024-02-08 22:51:28'),
(12, 'Inserção de Registros', 'O produto com código 1243255353454 foi inserido pelo usuario XXXXXXX', '2024-02-08 23:09:02'),
(13, 'Alteraçaõ de Status', 'Produto com o id 19 foi marcado como 1 pelo usuario XXXXXXX', '2024-02-08 23:14:07'),
(14, 'Alteraçaõ de Status', 'Produto com o id 20 foi marcado como 0 pelo usuario XXXXXXX', '2024-02-08 23:14:10'),
(15, 'Alteraçaõ de Status', 'Produto com o id 18 foi marcado como 0 pelo usuario XXXXXXX', '2024-02-08 23:14:11'),
(16, 'Exclusao de Produto', 'Produto com o id 3 foi marcado como deletado pelo usuario XXXXXXX', '2024-02-08 23:14:13'),
(17, 'Alteraçaõ de Status', 'Produto com o id 2 foi marcado como 1 pelo usuario XXXXXXX', '2024-02-08 23:14:25'),
(18, 'Alteraçaõ de Status', 'Produto com o id 5 foi marcado como 1 pelo usuario XXXXXXX', '2024-02-08 23:14:28'),
(19, 'Alteraçaõ de Status', 'Produto com o id 20 foi marcado como 1 pelo usuario XXXXXXX', '2024-02-08 23:14:33');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int NOT NULL,
  `nome` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `codigo` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `preco` float(7,2) DEFAULT NULL,
  `estoque` int DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  `isDeleted` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `cadastradoEm` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `codigo`, `preco`, `estoque`, `ativo`, `isDeleted`, `cadastradoEm`) VALUES
(3, 'Biscoito Recheado Amori Escureto', '000000000000003', 2000.00, 50000, 0, '*', '2024-02-05 22:38:04'),
(5, 'Refrigerante Lata 300ml Coca-Cola', '000000000000005', 3.29, 20, 1, '*', '2024-02-05 22:38:04'),
(11, 'Salgadinho Cheetos Onda Requeijão P', '000000000000011', 1.99, 2, 1, '*', '2024-02-05 22:38:04'),
(13, 'Salgadinho Cheetos Bola Mussarela P', '000000000000013', 1.99, 480, 1, '*', '2024-02-05 22:38:04'),
(14, 'Chocolate Barra Lacta Diamante Negro 300g', '000000000000014', 5.99, 480, 1, '*', '2024-02-05 22:38:04'),
(20, 'Pastel de Misto 25 cm', 'PST00000000003', 3.99, 100, 1, '*', '2024-02-06 22:59:33'),
(22, 'Risole de Carne', 'SAL00000000001', 3.99, 100, 1, '*', '2024-02-06 23:18:22'),
(23, 'Produto Teste', 'XXXXXXXXXXXX', 19.99, 1800, 1, '*', '2024-02-07 22:47:57'),
(24, 'Café 200ml Puro', 'CFZ00000000003', 2.00, 10, 1, '*', '2024-02-07 23:02:23'),
(26, 'Açucar Cristal Fibra', '00014987654871', 3.99, 100, 1, '*', '2024-02-08 23:07:30'),
(27, 'Arroz Branco 101', '1243255353454', 4.99, 100, 1, '*', '2024-02-08 23:09:02'),
(28, 'Produto Teste POO', '1243255353454', 7.99, 10000, 1, '*', '2024-02-29 23:42:16'),
(29, '213weqew', 'q', 10.00, 10, 1, '*', '2024-03-04 22:27:54'),
(30, 'Teste 2', '234632465', 230.00, 1, 1, '*', '2024-03-11 20:53:46'),
(31, 'teste hoje', '1324684', 1.00, 1, 1, '*', '2024-03-11 21:56:30'),
(33, 'testar 15/03/2024', 'testar', 12.00, 1, 1, '*', '2024-03-15 03:04:03'),
(34, 'test', 'teste', 1.00, 1, 1, '*', '2024-03-15 03:38:56'),
(35, 'Guia do wordprass', '22155', 1200.00, 1, 1, '', '2024-03-15 23:02:08'),
(36, 'Biscoito hoje', '12325215', 1.00, 10, 1, '*', '2024-03-16 00:35:36'),
(37, 'teste', 'teste', 1.00, 1, 1, '', '2024-03-16 00:44:40');

-- --------------------------------------------------------

--
-- Estrutura para tabela `registros`
--

CREATE TABLE `registros` (
  `id` int NOT NULL,
  `conteudo` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `valor` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `registros`
--

INSERT INTO `registros` (`id`, `conteudo`, `valor`) VALUES
(1, 'Conteudo 1', 10.20),
(2, 'Conteudo 2', 10.30),
(3, 'Conteudo 3', 10.20),
(4, 'Conteudo 4', 10.40);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nome` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `senha` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `tipoAcesso` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `criadoEm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `tipoAcesso`, `criadoEm`, `isDeleted`) VALUES
(1, 'Adminstrador', 'admin@admin.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'admin', '2024-02-28 22:42:15', 0),
(2, 'Antony', 'anthony@email.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'func', '2024-02-28 23:17:42', 0),
(3, 'jferreira', 'jferreira@email.com', 'f4ee7415066b23ed0c5555e3a10aa76726a995d7', 'admin', '2024-02-28 23:17:42', 0),
(4, 'anthony', 'anthony@admin.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', '2024-02-28 23:17:42', 0),
(5, 'anthony', 'anthony@client.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'client', '2024-03-10 03:42:40', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int NOT NULL,
  `dataVenda` date DEFAULT NULL,
  `idCliente` int DEFAULT NULL,
  `cadastradoEm` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `vendas`
--

INSERT INTO `vendas` (`id`, `dataVenda`, `idCliente`, `cadastradoEm`, `isDeleted`) VALUES
(1, '2024-02-02', 5, '2024-02-02 22:48:51', ''),
(2, '2024-02-01', 3, '2024-02-02 22:55:00', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Índices de tabela `itensvenda`
--
ALTER TABLE `itensvenda`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `itensvenda`
--
ALTER TABLE `itensvenda`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
