-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/11/2024 às 04:27
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste_banco`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(255) NOT NULL,
  `email_usuario` varchar(255) NOT NULL,
  `senha_usuario` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_usuario`, `email_usuario`, `senha_usuario`) VALUES
(1, 'João Gustavo', 'teste@gmail.com', '112cb04f8ddf9c7e695f7b896e33b22f'),
(2, 'Gabriel', 'gbr@gmail.com', '32a4b8c1511cea0eeae978f3fdaef24e'),
(3, 'João Pedro', 'joaopedro@gmail.com', '314e9e118b3026ce64b768b84a22d816'),
(4, 'teste', 'teste@gmail.com', '112cb04f8ddf9c7e695f7b896e33b22f'),
(5, 'Mamute', 'mamute@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'joao gustavo', 'joao@gmail.com', 'dd28e50635038e9cf3a648c2dd17ad0a'),
(7, 'lucas moura', 'lucas@gmail.com', 'dc53fc4f621c80bdc2fa0329a6123708'),
(8, 'lucas', 'lucas@gmail.com', 'dc53fc4f621c80bdc2fa0329a6123708'),
(9, 'alan', 'alan@gmail.com', '02558a70324e7c4f269c69825450cec8'),
(10, 'alisson', 'alisson@gmail.com', 'f201fe2faf492e9d354a279c6388a54f');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
