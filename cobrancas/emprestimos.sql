-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/06/2024 às 04:29
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
-- Banco de dados: `emprestimos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `acessos`
--

CREATE TABLE `acessos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `chave` varchar(50) NOT NULL,
  `grupo` int(11) NOT NULL,
  `pagina` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `acessos`
--

INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES
(1, 'Home', 'home', 0, 'Sim'),
(2, 'Configurações', 'configuracoes', 0, 'Não'),
(3, 'Usuários', 'usuarios', 1, 'Sim'),
(4, 'Acessos', 'acessos', 2, 'Sim'),
(5, 'Grupos Acesso', 'grupo_acessos', 2, 'Sim'),
(8, 'Clientes', 'clientes', 1, 'Sim'),
(9, 'Empréstimos', 'emprestimos', 0, 'Sim'),
(10, 'Formas de Pagamento', 'formas_pgto', 2, 'Sim'),
(11, 'Despesas / Pagamentos', 'pagar', 4, 'Sim'),
(12, 'Recebimentos', 'receber', 4, 'Sim'),
(13, 'Contas Vencidas', 'receber_vencidas', 4, 'Sim'),
(14, 'Relatórios Financeiros', 'relatorios_financeiro', 4, 'Não'),
(15, 'Frequências', 'frequencias', 2, 'Sim'),
(16, 'Cobranças Recorrentes', 'cobrancas', 0, 'Sim'),
(17, 'Feriados', 'feriados', 2, 'Sim'),
(18, 'Relatório de Débitos', 'relatorios_debitos', 4, 'Não'),
(19, 'Lucro Empréstimos', 'relatorios_lucros', 4, 'Sim'),
(20, 'Relatório Diário Caixa', 'relatorios_caixa', 4, 'Não'),
(21, 'Editar Contas', 'editar_contas', 4, 'Não');

-- --------------------------------------------------------

--
-- Estrutura para tabela `arquivos`
--

CREATE TABLE `arquivos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `arquivo` varchar(100) DEFAULT NULL,
  `data_cad` date NOT NULL,
  `registro` varchar(25) NOT NULL,
  `id_reg` int(11) NOT NULL,
  `usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `data_nasc` date NOT NULL,
  `data_cad` date NOT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `pix` varchar(50) DEFAULT NULL,
  `indicacao` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `telefone`, `cpf`, `email`, `endereco`, `data_nasc`, `data_cad`, `obs`, `pix`, `indicacao`, `bairro`, `cidade`, `estado`, `cep`) VALUES
(2, 'Cliente Teste', '(31) 97527-5084', '111.111.111-11', 'cliente@hotmail.com', 'Rua Boa Vista', '2000-03-23', '2023-06-26', '', 'teste', 'tesste', 'Cabana do Pai Tomás', 'Belo Horizonte', 'MG', '30512-660'),
(4, 'Cliente Teste 2', '(31) 99534-8118', '123.000.000-00', 'clienteteste@hotmail.com', 'Rua Boa Vista 50', '2000-02-20', '2023-06-27', '', 'CPF 00000000', 'Teste Indicação', 'Cabana do Pai Tomás', 'Belo Horizonte', 'MG', '30512-660'),
(11, 'aaa', '(21) 22332-3333', '333.333.333-33', 'aaaaaa@hotmail.com', '', '0000-00-00', '2024-05-10', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cobrancas`
--

CREATE TABLE `cobrancas` (
  `id` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `parcelas` int(11) NOT NULL,
  `juros` decimal(8,2) DEFAULT NULL,
  `multa` decimal(8,2) DEFAULT NULL,
  `data` date NOT NULL,
  `usuario` int(11) NOT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `data_venc` date NOT NULL,
  `frequencia` varchar(25) NOT NULL,
  `valor_parcela` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `cobrancas`
--

INSERT INTO `cobrancas` (`id`, `cliente`, `valor`, `parcelas`, `juros`, `multa`, `data`, `usuario`, `obs`, `data_venc`, `frequencia`, `valor_parcela`) VALUES
(1, 2, 200.00, 2, NULL, NULL, '2024-05-24', 1, '', '2024-05-01', 'Diária', 200.00),
(2, 11, 100.00, 1, NULL, NULL, '2024-06-03', 1, '', '2024-06-03', 'Mensal', 100.00),
(3, 2, 100.00, 1, NULL, NULL, '2024-06-03', 1, '', '2024-06-03', 'Mensal', 100.00),
(4, 2, 20.00, 1, NULL, NULL, '2024-06-03', 1, '', '2024-06-01', 'Mensal', 20.00),
(5, 2, 130.00, 1, NULL, NULL, '2024-06-04', 13, '', '2024-06-04', 'Mensal', 130.00),
(6, 2, 250.00, 2, NULL, NULL, '2024-06-04', 13, '', '2024-06-04', 'Diária', 250.00),
(7, 2, 200.00, 4, NULL, NULL, '2024-06-04', 13, '', '2024-06-04', 'Diária', 200.00),
(8, 2, 150.00, 4, NULL, NULL, '2024-06-04', 13, '', '2024-06-04', 'Diária', 150.00);

-- --------------------------------------------------------

--
-- Estrutura para tabela `config`
--

CREATE TABLE `config` (
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `icone` varchar(100) DEFAULT NULL,
  `logo_rel` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `ativo` varchar(5) DEFAULT NULL,
  `juros` decimal(8,2) DEFAULT NULL,
  `multa` decimal(8,2) DEFAULT NULL,
  `juros_emp` int(11) DEFAULT NULL,
  `taxa_sistema` varchar(20) DEFAULT NULL,
  `token` varchar(100) DEFAULT NULL,
  `instancia` varchar(100) DEFAULT NULL,
  `dias_aviso` int(11) DEFAULT NULL,
  `cnpj` varchar(20) DEFAULT NULL,
  `marca_dagua` varchar(5) DEFAULT NULL,
  `dias_criar_parcelas` varchar(20) DEFAULT NULL,
  `pix_sistema` varchar(50) DEFAULT NULL,
  `saldo_inicial` decimal(8,2) DEFAULT NULL,
  `verificar_pagamentos` varchar(5) DEFAULT NULL,
  `seletor_api` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `config`
--

INSERT INTO `config` (`nome`, `email`, `telefone`, `endereco`, `instagram`, `logo`, `icone`, `logo_rel`, `id`, `ativo`, `juros`, `multa`, `juros_emp`, `taxa_sistema`, `token`, `instancia`, `dias_aviso`, `cnpj`, `marca_dagua`, `dias_criar_parcelas`, `pix_sistema`, `saldo_inicial`, `verificar_pagamentos`, `seletor_api`) VALUES
('Sys-Cobrança', 'contato@hugocursos.com.br', '(31) 97527-5084', 'Rua X Número 150 - Bairro Centro Belo Horizonte - MG', '', 'logo.png', 'icone.png', 'logo.jpg', 1, 'Sim', 0.50, 5.00, 10, 'Cliente', '10bd1156-02ea-46f6-afd6-9273dd59e579', 'v9t7zpp51nsSCMeqqJWfI4lj8iGG12tyMqW8PwvBH3CojiUaHM', 3, '11.111.111/1111-11', 'Sim', 'Final de Semana', '', 0.00, 'Não', 'menuia');

-- --------------------------------------------------------

--
-- Estrutura para tabela `emprestimos`
--

CREATE TABLE `emprestimos` (
  `id` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `parcelas` int(11) NOT NULL,
  `juros` decimal(8,2) DEFAULT NULL,
  `multa` decimal(8,2) DEFAULT NULL,
  `data` date NOT NULL,
  `usuario` int(11) NOT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `juros_emp` decimal(8,2) DEFAULT NULL,
  `data_venc` date NOT NULL,
  `frequencia` varchar(25) NOT NULL,
  `tipo_juros` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `valor_parcela` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `emprestimos`
--

INSERT INTO `emprestimos` (`id`, `cliente`, `valor`, `parcelas`, `juros`, `multa`, `data`, `usuario`, `obs`, `juros_emp`, `data_venc`, `frequencia`, `tipo_juros`, `status`, `valor_parcela`) VALUES
(1, 4, 100.00, 5, 0.50, 5.00, '2024-03-21', 1, '', 10.00, '2023-10-04', 'Diária', 'Padrão', NULL, 22.00),
(2, 4, 200.00, 6, 0.50, 5.00, '2024-03-21', 1, '', 10.00, '2023-10-04', 'Diária', 'Padrão', NULL, 36.67),
(3, 4, 250.00, 4, 0.50, 5.00, '2024-03-21', 1, '', 10.00, '2023-10-04', 'Diária', 'Padrão', NULL, 68.75),
(4, 2, 100.00, 4, 0.50, 5.00, '2024-03-23', 1, '', 10.00, '2024-03-23', 'Quinzenal', 'Padrão', NULL, 27.50),
(5, 4, 400.00, 4, 0.50, 5.00, '2024-03-23', 1, '', 10.00, '2024-03-23', 'Quinzenal', 'Padrão', NULL, 110.00),
(6, 4, 100.00, 1, 0.50, 5.00, '2024-03-28', 1, '', 10.00, '2024-03-28', 'Mensal', 'Padrão', NULL, 110.00),
(7, 4, 600.00, 3, 0.50, 5.00, '2024-03-28', 1, '', 10.00, '2024-03-28', 'Mensal', 'Padrão', NULL, 220.00),
(8, 4, 1000.00, 1, 0.50, 5.00, '2024-04-18', 1, '', 10.00, '2024-04-18', 'Diária', 'Somente Júros', NULL, 100.00),
(9, 4, 1000.00, 10, 0.50, 5.00, '2024-04-18', 1, '', 0.00, '2024-04-18', 'Diária', 'Sem Júros', NULL, 100.00),
(10, 4, 1000.00, 5, 0.50, 5.00, '2024-04-18', 1, '', 10.00, '2024-04-18', 'Mensal', 'Composto_Price', NULL, 263.80),
(11, 2, 1000.00, 1, 0.50, 5.00, '2024-05-06', 1, '', 10.00, '2024-05-06', 'Diária', 'Somente Júros', 'Finalizado', 100.00),
(12, 4, 1000.00, 10, 0.50, 5.00, '2024-05-26', 1, '', 20.00, '2024-05-26', 'Mensal', 'Padrão', NULL, 120.00),
(13, 4, 1000.00, 2, 0.50, 5.00, '2024-05-26', 1, '', 20.00, '2024-05-26', 'Mensal', 'Somente Júros', NULL, 200.00),
(14, 2, 120.00, 2, 0.50, 5.00, '2024-06-03', 1, '', 10.00, '2024-06-01', 'Mensal', 'Padrão', NULL, 66.00),
(15, 2, 120.00, 2, 0.50, 5.00, '2024-06-03', 13, '', 10.00, '2024-06-04', 'Diária', 'Sim', NULL, 0.00),
(16, 2, 120.00, 3, 0.50, 5.00, '2024-06-03', 13, '', 10.00, '2024-06-04', 'Diária', 'Padrão', NULL, 44.00),
(17, 2, 165.00, 2, 0.50, 5.00, '2024-06-04', 13, '', 10.00, '2024-06-04', 'Diária', 'Padrão', NULL, 90.75),
(18, 2, 200.00, 6, 0.50, 5.00, '2024-06-03', 13, '', 10.00, '2024-06-04', 'Diária', 'Padrão', NULL, 55.00),
(19, 2, 233.00, 1, 0.50, 5.00, '2024-06-04', 13, '', 10.00, '2024-06-04', 'Diária', 'Padrão', NULL, 256.30),
(20, 2, 245.00, 4, 0.50, 5.00, '2024-06-04', 13, '', 10.00, '2024-06-19', 'Diária', 'Padrão', NULL, 269.50),
(21, 2, 200.00, 4, 0.50, 5.00, '2024-06-04', 13, '', 10.00, '2024-06-26', 'Diária', 'Padrão', NULL, 55.00);

-- --------------------------------------------------------

--
-- Estrutura para tabela `feriados`
--

CREATE TABLE `feriados` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `feriados`
--

INSERT INTO `feriados` (`id`, `data`) VALUES
(1, '2024-01-01'),
(2, '2024-02-28'),
(4, '2024-02-27'),
(5, '2024-02-26'),
(6, '2024-03-28');

-- --------------------------------------------------------

--
-- Estrutura para tabela `formas_pgto`
--

CREATE TABLE `formas_pgto` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `taxa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `formas_pgto`
--

INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`) VALUES
(1, 'Pix', 0),
(2, 'Dinheiro', 0),
(3, 'Cartão de Crédito', 10),
(4, 'Cartão de Débito', 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `frequencias`
--

CREATE TABLE `frequencias` (
  `id` int(11) NOT NULL,
  `frequencia` varchar(30) NOT NULL,
  `dias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `frequencias`
--

INSERT INTO `frequencias` (`id`, `frequencia`, `dias`) VALUES
(1, 'Nenhuma', 0),
(2, 'Diária', 1),
(3, 'Semanal', 7),
(4, 'Mensal', 30),
(5, 'Trimestral', 90),
(6, 'Semestral', 180),
(7, 'Anual', 365),
(8, 'Quinzenal', 15);

-- --------------------------------------------------------

--
-- Estrutura para tabela `grupo_acessos`
--

CREATE TABLE `grupo_acessos` (
  `id` int(11) NOT NULL,
  `nome` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `grupo_acessos`
--

INSERT INTO `grupo_acessos` (`id`, `nome`) VALUES
(1, 'Pessoas'),
(2, 'Cadastros'),
(4, 'Financeiro');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pagar`
--

CREATE TABLE `pagar` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `valor` decimal(8,2) NOT NULL,
  `data` date NOT NULL,
  `data_venc` date NOT NULL,
  `data_pgto` date DEFAULT NULL,
  `usuario_lanc` int(11) NOT NULL,
  `usuario_pgto` int(11) DEFAULT NULL,
  `referencia` varchar(25) DEFAULT NULL,
  `id_ref` int(11) DEFAULT NULL,
  `pago` varchar(5) DEFAULT NULL,
  `obs` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `pagar`
--

INSERT INTO `pagar` (`id`, `descricao`, `valor`, `data`, `data_venc`, `data_pgto`, `usuario_lanc`, `usuario_pgto`, `referencia`, `id_ref`, `pago`, `obs`) VALUES
(1, 'Cliente Teste 2', 100.00, '2024-03-21', '2024-03-21', '2024-03-21', 1, 1, 'Empréstimo', 1, 'Sim', NULL),
(2, 'Cliente Teste 2', 200.00, '2024-03-21', '2024-03-21', '2024-03-21', 1, 1, 'Empréstimo', 2, 'Sim', NULL),
(3, 'Cliente Teste 2', 250.00, '2024-03-21', '2024-03-21', '2024-03-21', 1, 1, 'Empréstimo', 3, 'Sim', NULL),
(4, 'Cliente Teste', 100.00, '2024-03-23', '2024-03-23', '2024-03-23', 1, 1, 'Empréstimo', 4, 'Sim', NULL),
(5, 'Cliente Teste 2', 400.00, '2024-03-23', '2024-03-23', '2024-03-23', 1, 1, 'Empréstimo', 5, 'Sim', NULL),
(6, 'Cliente Teste 2', 100.00, '2024-03-28', '2024-03-28', '2024-03-28', 1, 1, 'Empréstimo', 6, 'Sim', NULL),
(7, 'Cliente Teste 2', 600.00, '2024-03-28', '2024-03-28', '2024-03-28', 1, 1, 'Empréstimo', 7, 'Sim', NULL),
(8, 'Cliente Teste 2', 1000.00, '2024-04-18', '2024-04-18', '2024-04-18', 1, 1, 'Empréstimo', 8, 'Sim', NULL),
(9, 'Cliente Teste 2', 1000.00, '2024-04-18', '2024-04-18', '2024-04-18', 1, 1, 'Empréstimo', 9, 'Sim', NULL),
(10, 'Cliente Teste 2', 1000.00, '2024-04-18', '2024-04-18', '2024-04-18', 1, 1, 'Empréstimo', 10, 'Sim', NULL),
(11, 'Cliente Teste', 1000.00, '2024-05-06', '2024-05-06', '2024-05-06', 1, 1, 'Empréstimo', 11, 'Sim', NULL),
(12, 'Cliente Teste 2', 1000.00, '2024-05-26', '2024-05-26', '2024-05-26', 1, 1, 'Empréstimo', 12, 'Sim', NULL),
(13, 'Cliente Teste 2', 1000.00, '2024-05-26', '2024-05-26', '2024-05-26', 1, 1, 'Empréstimo', 13, 'Sim', NULL),
(14, 'Cliente Teste', 120.00, '2024-06-03', '2024-06-03', '2024-06-03', 1, 1, 'Empréstimo', 14, 'Sim', NULL),
(15, 'Cliente Teste', 120.00, '2024-06-04', '2024-06-04', '2024-06-04', 13, 13, 'Empréstimo', 15, 'Sim', NULL),
(16, 'Cliente Teste', 120.00, '2024-06-04', '2024-06-04', '2024-06-04', 13, 13, 'Empréstimo', 16, 'Sim', NULL),
(17, 'Cliente Teste', 165.00, '2024-06-04', '2024-06-04', '2024-06-04', 13, 13, 'Empréstimo', 17, 'Sim', NULL),
(18, 'Cliente Teste', 200.00, '2024-06-04', '2024-06-04', '2024-06-04', 13, 13, 'Empréstimo', 18, 'Sim', NULL),
(19, 'Cliente Teste', 233.00, '2024-06-04', '2024-06-04', '2024-06-04', 13, 13, 'Empréstimo', 19, 'Sim', NULL),
(20, 'Cliente Teste', 245.00, '2024-06-04', '2024-06-04', '2024-06-04', 13, 13, 'Empréstimo', 20, 'Sim', NULL),
(21, 'Cliente Teste', 200.00, '2024-06-04', '2024-06-04', '2024-06-04', 13, 13, 'Empréstimo', 21, 'Sim', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `receber`
--

CREATE TABLE `receber` (
  `id` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `referencia` varchar(30) NOT NULL,
  `id_ref` int(11) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `parcela` int(11) NOT NULL,
  `usuario_lanc` int(11) NOT NULL,
  `usuario_pgto` int(11) DEFAULT NULL,
  `data` date NOT NULL,
  `data_venc` date NOT NULL,
  `data_pgto` date DEFAULT NULL,
  `pago` varchar(5) NOT NULL,
  `forma_pgto` varchar(30) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `hash` varchar(100) DEFAULT NULL,
  `ref_pix` varchar(60) DEFAULT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `frequencia` int(11) DEFAULT NULL,
  `recorrencia` varchar(5) DEFAULT NULL,
  `hash2` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `receber`
--

INSERT INTO `receber` (`id`, `cliente`, `referencia`, `id_ref`, `valor`, `parcela`, `usuario_lanc`, `usuario_pgto`, `data`, `data_venc`, `data_pgto`, `pago`, `forma_pgto`, `descricao`, `hash`, `ref_pix`, `obs`, `frequencia`, `recorrencia`, `hash2`) VALUES
(1, 4, 'Empréstimo', 1, 22.00, 1, 1, NULL, '2024-03-21', '2023-10-05', NULL, 'Não', NULL, 'Cliente Teste 2 (1)', '58302', NULL, NULL, 0, '', NULL),
(2, 4, 'Empréstimo', 1, 22.00, 2, 1, NULL, '2024-03-21', '2023-10-06', NULL, 'Não', NULL, 'Cliente Teste 2 (2)', '58303', NULL, NULL, 0, '', NULL),
(3, 4, 'Empréstimo', 1, 22.00, 3, 1, NULL, '2024-03-21', '2023-10-09', NULL, 'Não', NULL, 'Cliente Teste 2 (3)', '58304', NULL, NULL, 0, '', NULL),
(4, 4, 'Empréstimo', 1, 22.00, 4, 1, NULL, '2024-03-21', '2023-10-10', NULL, 'Não', NULL, 'Cliente Teste 2 (4)', '58305', NULL, NULL, 0, '', NULL),
(5, 4, 'Empréstimo', 1, 22.00, 5, 1, NULL, '2024-03-21', '2023-10-11', NULL, 'Não', NULL, 'Cliente Teste 2 (5)', '58306', NULL, NULL, 0, '', NULL),
(6, 4, 'Empréstimo', 2, 36.67, 1, 1, NULL, '2024-03-21', '2023-10-05', NULL, 'Não', NULL, 'Cliente Teste 2 (1)', '', NULL, NULL, 0, '', NULL),
(7, 4, 'Empréstimo', 2, 36.67, 2, 1, NULL, '2024-03-21', '2023-10-06', NULL, 'Não', NULL, 'Cliente Teste 2 (2)', '', NULL, NULL, 0, '', NULL),
(8, 4, 'Empréstimo', 2, 36.67, 3, 1, NULL, '2024-03-21', '2023-10-09', NULL, 'Não', NULL, 'Cliente Teste 2 (3)', '', NULL, NULL, 0, '', NULL),
(9, 4, 'Empréstimo', 2, 36.67, 4, 1, NULL, '2024-03-21', '2023-10-10', NULL, 'Não', NULL, 'Cliente Teste 2 (4)', '', NULL, NULL, 0, '', NULL),
(10, 4, 'Empréstimo', 2, 36.67, 5, 1, NULL, '2024-03-21', '2023-10-11', NULL, 'Não', NULL, 'Cliente Teste 2 (5)', '', NULL, NULL, 0, '', NULL),
(11, 4, 'Empréstimo', 2, 36.67, 6, 1, NULL, '2024-03-21', '2023-10-12', NULL, 'Não', NULL, 'Cliente Teste 2 (6)', '', NULL, NULL, 0, '', NULL),
(12, 4, 'Empréstimo', 3, 68.75, 1, 1, NULL, '2024-03-21', '2023-10-05', NULL, 'Não', NULL, 'Cliente Teste 2 (1)', NULL, NULL, NULL, 0, '', NULL),
(13, 4, 'Empréstimo', 3, 68.75, 2, 1, NULL, '2024-03-21', '2023-10-06', NULL, 'Não', NULL, 'Cliente Teste 2 (2)', NULL, NULL, NULL, 0, '', NULL),
(14, 4, 'Empréstimo', 3, 68.75, 3, 1, NULL, '2024-03-21', '2023-10-09', NULL, 'Não', NULL, 'Cliente Teste 2 (3)', NULL, NULL, NULL, 0, '', NULL),
(15, 4, 'Empréstimo', 3, 68.75, 4, 1, NULL, '2024-03-21', '2023-10-10', NULL, 'Não', NULL, 'Cliente Teste 2 (4)', NULL, NULL, NULL, 0, '', NULL),
(16, 2, 'Empréstimo', 4, 27.50, 1, 1, NULL, '2024-03-23', '2024-03-25', NULL, 'Não', 'Pix', 'Cliente Teste (1)', '61540', '79786030750', NULL, 0, '', NULL),
(17, 2, 'Empréstimo', 4, 27.50, 2, 1, NULL, '2024-03-23', '2024-04-09', NULL, 'Não', NULL, 'Cliente Teste (2)', '61542', NULL, NULL, 0, '', '61541'),
(18, 2, 'Empréstimo', 4, 27.50, 3, 1, NULL, '2024-03-23', '2024-04-24', NULL, 'Não', NULL, 'Cliente Teste (3)', '61544', NULL, NULL, 0, '', '61543'),
(19, 2, 'Empréstimo', 4, 27.50, 4, 1, NULL, '2024-03-23', '2024-05-09', NULL, 'Não', 'Pix', 'Cliente Teste (4)', '61546', '79529328097', NULL, 0, '', '61545'),
(20, 4, 'Empréstimo', 5, 110.00, 1, 1, NULL, '2024-03-23', '2024-03-25', NULL, 'Não', NULL, 'Cliente Teste 2 (1)', '61555', NULL, NULL, 0, '', NULL),
(21, 4, 'Empréstimo', 5, 110.00, 2, 1, NULL, '2024-03-23', '2024-04-09', NULL, 'Não', NULL, 'Cliente Teste 2 (2)', '61557', NULL, NULL, 0, '', '61556'),
(22, 4, 'Empréstimo', 5, 110.00, 3, 1, NULL, '2024-03-23', '2024-04-24', NULL, 'Não', NULL, 'Cliente Teste 2 (3)', '61559', NULL, NULL, 0, '', '61558'),
(23, 4, 'Empréstimo', 5, 110.00, 4, 1, NULL, '2024-03-23', '2024-05-09', '2024-06-04', 'Sim', NULL, 'Cliente Teste 2 (4)', '61561', '79502821214', NULL, 0, '', '61560'),
(24, 4, 'Empréstimo', 6, 110.00, 1, 1, 1, '2024-03-28', '2024-03-29', '2024-03-28', 'Sim', '', 'Cliente Teste 2 (1)', '', NULL, NULL, 0, '', NULL),
(25, 4, 'Empréstimo', 7, 220.00, 1, 1, NULL, '2024-03-28', '2024-03-29', '2024-06-04', 'Sim', NULL, 'Cliente Teste 2 (1)', '79748', '79502821214', NULL, 0, '', NULL),
(26, 4, 'Empréstimo', 7, 220.00, 2, 1, NULL, '2024-03-28', '2024-04-29', NULL, 'Não', NULL, 'Cliente Teste 2 (2)', '79750', NULL, NULL, 0, '', '79749'),
(27, 4, 'Empréstimo', 7, 220.00, 3, 1, NULL, '2024-03-28', '2024-05-28', NULL, 'Não', NULL, 'Cliente Teste 2 (3)', '79752', NULL, NULL, 0, '', '79751'),
(28, 4, 'Empréstimo', 8, 100.00, 1, 1, NULL, '2024-04-18', '2024-04-19', NULL, 'Não', NULL, 'Cliente Teste 2 (1)', '200330', NULL, NULL, 1, 'Sim', NULL),
(29, 4, 'Empréstimo', 9, 100.00, 1, 1, NULL, '2024-04-18', '2024-04-19', NULL, 'Não', NULL, 'Cliente Teste 2 (1)', '200331', NULL, NULL, 0, '', NULL),
(30, 4, 'Empréstimo', 9, 100.00, 2, 1, NULL, '2024-04-18', '2024-04-22', NULL, 'Não', NULL, 'Cliente Teste 2 (2)', '200333', NULL, NULL, 0, '', '200332'),
(31, 4, 'Empréstimo', 9, 100.00, 3, 1, NULL, '2024-04-18', '2024-04-23', NULL, 'Não', NULL, 'Cliente Teste 2 (3)', '200335', NULL, NULL, 0, '', '200334'),
(32, 4, 'Empréstimo', 9, 100.00, 4, 1, NULL, '2024-04-18', '2024-04-24', NULL, 'Não', NULL, 'Cliente Teste 2 (4)', '200337', NULL, NULL, 0, '', '200336'),
(33, 4, 'Empréstimo', 9, 100.00, 5, 1, NULL, '2024-04-18', '2024-04-25', NULL, 'Não', NULL, 'Cliente Teste 2 (5)', '200339', NULL, NULL, 0, '', '200338'),
(34, 4, 'Empréstimo', 9, 100.00, 6, 1, NULL, '2024-04-18', '2024-04-26', NULL, 'Não', NULL, 'Cliente Teste 2 (6)', '200341', NULL, NULL, 0, '', '200340'),
(35, 4, 'Empréstimo', 9, 100.00, 7, 1, NULL, '2024-04-18', '2024-04-29', NULL, 'Não', NULL, 'Cliente Teste 2 (7)', '200343', NULL, NULL, 0, '', '200342'),
(36, 4, 'Empréstimo', 9, 100.00, 8, 1, NULL, '2024-04-18', '2024-04-30', NULL, 'Não', NULL, 'Cliente Teste 2 (8)', '200345', NULL, NULL, 0, '', '200344'),
(37, 4, 'Empréstimo', 9, 100.00, 9, 1, NULL, '2024-04-18', '2024-05-01', NULL, 'Não', NULL, 'Cliente Teste 2 (9)', '200347', NULL, NULL, 0, '', '200346'),
(38, 4, 'Empréstimo', 9, 100.00, 10, 1, NULL, '2024-04-18', '2024-05-02', NULL, 'Não', NULL, 'Cliente Teste 2 (10)', '200349', NULL, NULL, 0, '', '200348'),
(39, 4, 'Empréstimo', 10, 300.00, 1, 1, 1, '2024-04-18', '2024-04-18', '2024-05-06', 'Sim', '', 'Cliente Teste 2 (1)', '', NULL, NULL, 0, '', NULL),
(40, 4, 'Empréstimo', 10, 263.80, 2, 1, NULL, '2024-04-18', '2024-05-20', NULL, 'Não', NULL, 'Cliente Teste 2 (2)', '', NULL, NULL, 0, '', ''),
(41, 4, 'Empréstimo', 10, 263.80, 3, 1, NULL, '2024-04-18', '2024-06-18', NULL, 'Não', NULL, 'Cliente Teste 2 (3)', '', NULL, NULL, 0, '', ''),
(42, 4, 'Empréstimo', 10, 263.80, 4, 1, NULL, '2024-04-18', '2024-07-18', NULL, 'Não', NULL, 'Cliente Teste 2 (4)', '', NULL, NULL, 0, '', ''),
(43, 4, 'Empréstimo', 10, 263.80, 5, 1, NULL, '2024-04-18', '2024-08-19', NULL, 'Não', NULL, 'Cliente Teste 2 (5)', '', NULL, NULL, 0, '', ''),
(44, 2, 'Empréstimo', 11, 80.00, 1, 1, 1, '2024-05-06', '2024-05-07', '2024-05-26', 'Sim', '', 'Cliente Teste (1)', '293166', NULL, NULL, 1, 'Sim', NULL),
(45, 2, 'Cobrança', 1, 200.00, 1, 1, NULL, '2024-05-24', '2024-05-02', NULL, 'Não', 'Pix', 'Cliente Teste (1)', '458898', '79528710805', NULL, 1, 'Não', NULL),
(46, 2, 'Cobrança', 1, 200.00, 2, 1, NULL, '2024-05-24', '2024-05-03', NULL, 'Não', NULL, 'Cliente Teste (2)', '458899', NULL, NULL, 1, 'Não', NULL),
(47, 2, 'Empréstimo', 11, 140.60, 2, 1, 1, '2024-05-26', '2024-05-08', '2024-06-03', 'Sim', '', 'Cliente Teste (1)', NULL, '79475470067', NULL, 1, 'Sim', NULL),
(48, 4, 'Empréstimo', 12, 120.00, 1, 1, NULL, '2024-05-26', '2024-05-27', NULL, 'Não', NULL, 'Cliente Teste 2 (1)', '474875', NULL, NULL, 0, '', NULL),
(49, 4, 'Empréstimo', 12, 120.00, 2, 1, NULL, '2024-05-26', '2024-06-26', NULL, 'Não', NULL, 'Cliente Teste 2 (2)', '474877', NULL, NULL, 0, '', '474876'),
(50, 4, 'Empréstimo', 12, 120.00, 3, 1, NULL, '2024-05-26', '2024-07-26', NULL, 'Não', NULL, 'Cliente Teste 2 (3)', '474879', NULL, NULL, 0, '', '474878'),
(51, 4, 'Empréstimo', 12, 120.00, 4, 1, NULL, '2024-05-26', '2024-08-26', NULL, 'Não', NULL, 'Cliente Teste 2 (4)', '474881', NULL, NULL, 0, '', '474880'),
(52, 4, 'Empréstimo', 12, 120.00, 5, 1, NULL, '2024-05-26', '2024-09-26', NULL, 'Não', NULL, 'Cliente Teste 2 (5)', '474883', NULL, NULL, 0, '', '474882'),
(53, 4, 'Empréstimo', 12, 120.00, 6, 1, NULL, '2024-05-26', '2024-10-28', NULL, 'Não', NULL, 'Cliente Teste 2 (6)', '474885', NULL, NULL, 0, '', '474884'),
(54, 4, 'Empréstimo', 12, 120.00, 7, 1, NULL, '2024-05-26', '2024-11-26', NULL, 'Não', NULL, 'Cliente Teste 2 (7)', '474887', NULL, NULL, 0, '', '474886'),
(55, 4, 'Empréstimo', 12, 120.00, 8, 1, NULL, '2024-05-26', '2024-12-26', NULL, 'Não', NULL, 'Cliente Teste 2 (8)', '474889', NULL, NULL, 0, '', '474888'),
(56, 4, 'Empréstimo', 12, 120.00, 9, 1, NULL, '2024-05-26', '2025-01-27', NULL, 'Não', NULL, 'Cliente Teste 2 (9)', '474891', NULL, NULL, 0, '', '474890'),
(57, 4, 'Empréstimo', 12, 120.00, 10, 1, NULL, '2024-05-26', '2025-02-26', NULL, 'Não', NULL, 'Cliente Teste 2 (10)', '474893', NULL, NULL, 0, '', '474892'),
(58, 4, 'Empréstimo', 13, 250.00, 1, 1, NULL, '2024-05-26', '2024-05-30', NULL, 'Não', NULL, 'Cliente Teste 2 (1)', '474894', '474892', NULL, 30, 'Sim', NULL),
(59, 2, 'Empréstimo', 11, 140.00, 3, 1, 1, '2024-06-03', '2024-05-09', '2024-06-03', 'Sim', '', 'Cliente Teste (1)', NULL, NULL, NULL, 1, 'Sim', NULL),
(60, 2, 'Empréstimo', 11, 139.40, 4, 1, 1, '2024-06-03', '2024-05-10', '2024-06-03', 'Sim', '', 'Cliente Teste (1)', NULL, NULL, NULL, 1, 'Sim', NULL),
(62, 11, 'Cobrança', 2, 100.00, 1, 1, NULL, '2024-06-03', '2024-06-03', NULL, 'Não', NULL, 'aaa (1)', '532822', '474892', NULL, 30, 'Sim', NULL),
(63, 2, 'Cobrança', 3, 100.00, 1, 1, NULL, '2024-06-03', '2024-06-03', NULL, 'Não', 'Pix', 'Cliente Teste (1)', '532823', '79475962605', NULL, 30, 'Sim', NULL),
(64, 2, 'Cobrança', 4, 20.00, 1, 1, NULL, '2024-06-03', '2024-06-03', NULL, 'Não', NULL, 'Cliente Teste (1)', '532824', '474892', NULL, 30, 'Sim', NULL),
(65, 2, 'Empréstimo', 14, 71.33, 1, 1, 1, '2024-06-03', '2024-06-03', '2024-06-04', 'Sim', '', 'Cliente Teste (1)', '532825', '532826', NULL, 0, '', NULL),
(66, 2, 'Empréstimo', 14, 66.00, 2, 1, 1, '2024-06-03', '2024-07-01', '2024-06-04', 'Sim', '', 'Cliente Teste (2)', '532827', NULL, NULL, 0, '', '532826'),
(67, 2, 'Empréstimo', 11, 1120.00, 0, 1, 1, '2024-06-04', '2024-06-04', '2024-06-04', 'Sim', 'Pix', 'Baixa Empréstimo', NULL, '532826', NULL, 0, NULL, NULL),
(68, 2, 'Empréstimo', 15, 0.00, 1, 13, NULL, '2024-06-04', '2024-06-05', NULL, 'Não', NULL, 'Cliente Teste (1)', NULL, NULL, NULL, 0, '', NULL),
(69, 2, 'Empréstimo', 15, 0.00, 2, 13, NULL, '2024-06-04', '2024-06-06', NULL, 'Não', NULL, 'Cliente Teste (2)', NULL, NULL, NULL, 0, '', NULL),
(70, 2, 'Empréstimo', 16, 44.00, 1, 13, NULL, '2024-06-04', '2024-06-05', NULL, 'Não', NULL, 'Cliente Teste (1)', '536448', NULL, NULL, 0, '', NULL),
(71, 2, 'Empréstimo', 16, 44.00, 2, 13, NULL, '2024-06-04', '2024-06-06', NULL, 'Não', NULL, 'Cliente Teste (2)', '536450', NULL, NULL, 0, '', NULL),
(72, 2, 'Empréstimo', 16, 44.00, 3, 13, NULL, '2024-06-04', '2024-06-07', NULL, 'Não', NULL, 'Cliente Teste (3)', '536452', NULL, NULL, 0, '', NULL),
(73, 2, 'Empréstimo', 17, 90.75, 1, 13, NULL, '2024-06-04', '2024-06-05', NULL, 'Não', NULL, 'Cliente Teste (1)', NULL, NULL, NULL, 0, '', NULL),
(74, 2, 'Empréstimo', 17, 90.75, 2, 13, NULL, '2024-06-04', '2024-06-06', NULL, 'Não', NULL, 'Cliente Teste (2)', NULL, NULL, NULL, 0, '', NULL),
(75, 2, 'Cobrança', 5, 130.00, 1, 13, NULL, '2024-06-03', '2024-06-04', NULL, 'Não', NULL, 'Cliente Teste (1)', '536511', NULL, NULL, 30, 'Sim', NULL),
(76, 2, 'Cobrança', 6, 250.00, 1, 13, NULL, '2024-06-03', '2024-06-05', NULL, 'Não', NULL, 'Cliente Teste (1)', NULL, NULL, NULL, 1, 'Não', NULL),
(77, 2, 'Cobrança', 6, 250.00, 2, 13, NULL, '2024-06-03', '2024-06-06', NULL, 'Não', NULL, 'Cliente Teste (2)', NULL, NULL, NULL, 1, 'Não', NULL),
(78, 2, 'Empréstimo', 18, 56.00, 1, 13, NULL, '2024-06-04', '2024-06-06', NULL, 'Não', NULL, 'Cliente Teste (1)', '536524', NULL, NULL, 0, '', NULL),
(79, 2, 'Empréstimo', 18, 55.00, 2, 13, NULL, '2024-06-04', '2024-06-06', NULL, 'Não', NULL, 'Cliente Teste (2)', '536525', NULL, NULL, 0, '', NULL),
(80, 2, 'Empréstimo', 18, 55.00, 3, 13, NULL, '2024-06-04', '2024-06-07', NULL, 'Não', NULL, 'Cliente Teste (3)', '536526', NULL, NULL, 0, '', NULL),
(81, 2, 'Empréstimo', 18, 62.00, 4, 13, NULL, '2024-06-04', '2024-06-12', NULL, 'Não', NULL, 'Cliente Teste (4)', '536528', NULL, NULL, 0, '', '536527'),
(82, 2, 'Cobrança', 7, 200.00, 1, 13, NULL, '2024-06-04', '2024-06-05', NULL, 'Não', NULL, 'Cliente Teste (1)', '536529', NULL, NULL, 1, 'Não', NULL),
(83, 2, 'Cobrança', 7, 200.00, 2, 13, NULL, '2024-06-04', '2024-06-06', NULL, 'Não', NULL, 'Cliente Teste (2)', '536530', NULL, NULL, 1, 'Não', NULL),
(84, 2, 'Cobrança', 7, 200.00, 3, 13, NULL, '2024-06-04', '2024-06-07', NULL, 'Não', NULL, 'Cliente Teste (3)', '536531', NULL, NULL, 1, 'Não', NULL),
(85, 2, 'Cobrança', 7, 200.00, 4, 13, NULL, '2024-06-04', '2024-06-10', NULL, 'Não', NULL, 'Cliente Teste (4)', '536533', NULL, NULL, 1, 'Não', '536532'),
(86, 2, 'Cobrança', 8, 135.00, 1, 13, NULL, '2024-06-04', '2024-06-04', NULL, 'Não', NULL, 'Cliente Teste (1)', '536535', NULL, NULL, 1, 'Não', NULL),
(87, 2, 'Cobrança', 8, 150.00, 2, 13, NULL, '2024-06-04', '2024-06-06', NULL, 'Não', NULL, 'Cliente Teste (2)', '536536', NULL, NULL, 1, 'Não', NULL),
(88, 2, 'Cobrança', 8, 150.00, 3, 13, NULL, '2024-06-04', '2024-06-07', NULL, 'Não', NULL, 'Cliente Teste (3)', '536537', NULL, NULL, 1, 'Não', NULL),
(89, 2, 'Cobrança', 8, 150.00, 4, 13, NULL, '2024-06-04', '2024-06-10', NULL, 'Não', NULL, 'Cliente Teste (4)', '536539', NULL, NULL, 1, 'Não', '536538'),
(90, 2, 'Empréstimo', 19, 260.00, 1, 13, NULL, '2024-06-04', '2024-06-07', NULL, 'Não', NULL, 'Cliente Teste (1)', '536600', NULL, NULL, 0, '', NULL),
(91, 2, 'Empréstimo', 20, 270.00, 1, 13, NULL, '2024-06-04', '2024-06-19', NULL, 'Não', NULL, 'Cliente Teste (1)', '536609', NULL, NULL, 0, '', '536608'),
(92, 2, 'Empréstimo', 18, 230.00, 5, 13, NULL, '2024-06-04', '2024-06-05', NULL, 'Não', NULL, 'Parcela de Multa', NULL, NULL, NULL, 0, '', NULL),
(93, 2, 'Empréstimo', 18, 260.00, 6, 13, NULL, '2024-06-04', '2024-06-04', NULL, 'Não', NULL, 'Teste', NULL, NULL, NULL, 0, '', NULL),
(94, 2, 'Empréstimo', 20, 250.00, 2, 13, NULL, '2024-06-04', '2024-06-28', NULL, 'Não', NULL, 'Teste', '536660', NULL, NULL, 0, '', '536659'),
(95, 2, 'Empréstimo', 20, 250.00, 3, 13, NULL, '2024-06-04', '2024-06-25', NULL, 'Não', NULL, 'Teste', '536662', NULL, NULL, 0, '', '536661'),
(96, 2, 'Empréstimo', 20, 365.00, 4, 13, NULL, '2024-06-04', '2024-06-04', NULL, 'Não', NULL, 'Teste', '536712', NULL, NULL, 0, '', NULL),
(97, 4, 'Conta', 0, 250.00, 0, 13, NULL, '2024-06-04', '2024-06-04', NULL, 'Não', NULL, 'Pagamento', NULL, NULL, '', NULL, NULL, NULL),
(98, 4, 'Conta', 0, 250.00, 0, 13, NULL, '2024-06-04', '2024-06-04', NULL, 'Não', NULL, 'Pagamento', NULL, NULL, '', NULL, NULL, NULL),
(99, 2, 'Empréstimo', 21, 55.00, 1, 13, 13, '2024-06-04', '2024-06-27', '2024-06-04', 'Sim', '', 'Cliente Teste (1)', '536757', NULL, NULL, 0, '', '536756'),
(100, 2, 'Empréstimo', 21, 65.00, 2, 13, NULL, '2024-06-04', '2024-06-28', NULL, 'Não', 'Pix', 'Cliente Teste (2)', '536765', '79804505766', NULL, 0, '', '536764'),
(101, 2, 'Empréstimo', 21, 55.00, 3, 13, NULL, '2024-06-04', '2024-07-01', NULL, 'Não', NULL, 'Cliente Teste (3)', '536761', NULL, NULL, 0, '', '536760'),
(102, 2, 'Empréstimo', 21, 55.00, 4, 13, NULL, '2024-06-04', '2024-07-02', NULL, 'Não', NULL, 'Cliente Teste (4)', '536763', NULL, NULL, 0, '', '536762'),
(103, 4, 'Empréstimo', 13, 120.00, 2, 13, NULL, '2024-06-04', '2024-06-20', NULL, 'Não', NULL, 'Multa', '536770', NULL, NULL, 0, '', '536769');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `senha_crip` varchar(130) NOT NULL,
  `nivel` varchar(25) NOT NULL,
  `ativo` varchar(5) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `endereco` varchar(150) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`) VALUES
(11, 'Marcela Recepcionista', 'marcela@hotmail.com', '', '$2y$10$b9tPINMYhs4VHeF/HClKZet1oFAR/XIZjq65z.t5rQHdc7Ptx9aQK', 'Comum', 'Sim', '(33) 33333-3333', 'Rua C', 'sem-foto.jpg', '2023-05-08'),
(13, 'Sys-Cobrança', 'contato@hugocursos.com.br', '', '$2y$10$UX9U0Rj9MS8iLeyz9q1hGOP.6v8dZZft5eTgYNZBOYfpT2R70dTKi', 'Administrador', 'Sim', '(31) 97527-5084', '', 'sem-foto.jpg', '2024-06-04');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios_permissoes`
--

CREATE TABLE `usuarios_permissoes` (
  `id` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `permissao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `usuarios_permissoes`
--

INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES
(76, 11, 2),
(77, 11, 4),
(78, 11, 11),
(79, 11, 12),
(80, 11, 13),
(81, 11, 19),
(82, 11, 8),
(83, 11, 21);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `acessos`
--
ALTER TABLE `acessos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `arquivos`
--
ALTER TABLE `arquivos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cobrancas`
--
ALTER TABLE `cobrancas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `emprestimos`
--
ALTER TABLE `emprestimos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `feriados`
--
ALTER TABLE `feriados`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `formas_pgto`
--
ALTER TABLE `formas_pgto`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `frequencias`
--
ALTER TABLE `frequencias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `grupo_acessos`
--
ALTER TABLE `grupo_acessos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pagar`
--
ALTER TABLE `pagar`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `receber`
--
ALTER TABLE `receber`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios_permissoes`
--
ALTER TABLE `usuarios_permissoes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acessos`
--
ALTER TABLE `acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `arquivos`
--
ALTER TABLE `arquivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `cobrancas`
--
ALTER TABLE `cobrancas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `emprestimos`
--
ALTER TABLE `emprestimos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `feriados`
--
ALTER TABLE `feriados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `formas_pgto`
--
ALTER TABLE `formas_pgto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `frequencias`
--
ALTER TABLE `frequencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `grupo_acessos`
--
ALTER TABLE `grupo_acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `pagar`
--
ALTER TABLE `pagar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `receber`
--
ALTER TABLE `receber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `usuarios_permissoes`
--
ALTER TABLE `usuarios_permissoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
