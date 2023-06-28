-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Jun-2023 às 01:42
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastropacientes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamentos`
--

CREATE TABLE `agendamentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idmedico` int(11) DEFAULT NULL,
  `idpaciente` int(11) DEFAULT NULL,
  `datahora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `agendamentos`
--

INSERT INTO `agendamentos` (`id`, `idmedico`, `idpaciente`, `datahora`) VALUES
(6, 16, 1, '2023-06-28 20:18:00'),
(19, 18, 7, '2023-06-28 17:29:00'),
(22, 19, 4, '2023-06-30 11:30:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicamentos`
--

CREATE TABLE `medicamentos` (
  `id` int(10) UNSIGNED NOT NULL,
  `medicamento` varchar(100) NOT NULL,
  `conteudo` varchar(100) NOT NULL,
  `validade` date NOT NULL,
  `descricao` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `medicamentos`
--

INSERT INTO `medicamentos` (`id`, `medicamento`, `conteudo`, `validade`, `descricao`) VALUES
(3, 'Paracetamol', '500', '2025-04-24', 'Paracetamol é um medicamento indicado para o tratamento de febre e também colabora com auxílio temporário a dores leves e moderadas. Pode ser utilizado na redução de dores relacionadas à resfriados, como dor de cabeça e dor de garganta. Ainda é efetivo para reduzir o desconforto da dor de dente.'),
(4, 'Paracetamol', '750', '2025-04-24', 'Paracetamol é um medicamento indicado para o tratamento de febre e também colabora com auxílio temporário a dores leves e moderadas. Pode ser utilizado na redução de dores relacionadas à resfriados, como dor de cabeça e dor de garganta. Ainda é efetivo para reduzir o desconforto da dor de dente.'),
(5, 'Paco', '500mg', '2025-04-28', 'Paco® (paracetamol + fosfato de codeína) é indicado para o alívio de dores de grau moderado a intenso, como nas decorrentes de traumatismo (entorses, luxações, contusões, distensões, fraturas), pós-operatório, pós-extração dentária, neuralgia, lombalgia, dores de origem articular e condições similares.'),
(6, '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicos`
--

CREATE TABLE `medicos` (
  `id` int(11) NOT NULL,
  `crm` int(6) NOT NULL,
  `ufcrm` varchar(2) NOT NULL,
  `nomemedico` varchar(45) NOT NULL,
  `especialidade` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `medicos`
--

INSERT INTO `medicos` (`id`, `crm`, `ufcrm`, `nomemedico`, `especialidade`) VALUES
(9, 123456, 'SC', 'João da Silva Lopes', 'Cardiologia'),
(10, 123789, 'SC', 'Maria Carolina', 'Cardiologia'),
(12, 321456, 'PR', 'Anastacio Silva', 'Geriatria'),
(14, 456789, 'SP', 'Carlos de Jesus', 'Ortopedia'),
(15, 111111, 'SC', 'Juliano Rodrigues', 'Ortopedista'),
(16, 123456, 'SC', 'Julia Andrede', 'Cardiologia'),
(17, 456789, 'RJ', 'Maria Caroline', 'Teste deletar'),
(18, 154844, 'SC', 'Charles Baur', 'Ortopedia'),
(19, 987456, 'RJ', 'Julia da Silva e Souza', 'Ortopedia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `cpf` int(11) NOT NULL,
  `nomepaciente` varchar(200) NOT NULL,
  `cep` int(11) NOT NULL,
  `uf` varchar(4) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `datanascimento` date NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pacientes`
--

INSERT INTO `pacientes` (`id`, `cpf`, `nomepaciente`, `cep`, `uf`, `cidade`, `bairro`, `rua`, `datanascimento`, `numero`) VALUES
(1, 2147483647, 'Marcus Vinicius da Silva editado', 89230275, 'Sant', 'Joinville', 'joão Costa', 'Rua Israel', '2000-05-11', 132),
(3, 2147483647, 'Joãozinho', 10101100, 'SP', 'São Paulo', 'Teste', 'Teste', '1995-05-11', 402),
(4, 2147483647, 'Paulo da Silva', 89898989, 'SC', 'Lages', 'Centro', 'centro', '2010-01-14', 3525),
(7, 2147483647, 'Airton Medley', 89475224, 'DF', 'Brasilia', 'Alis', 'Asa Sul', '2000-10-15', 454);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `permissao` varchar(25) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `usuario`, `senha`, `permissao`, `data`) VALUES
(1, 'Administrador TI', 'teste@teste.com', 'admin', '123', 'Administrador', '2023-04-25');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ID` (`id`),
  ADD KEY `medico` (`idmedico`),
  ADD KEY `paciente` (`idpaciente`);

--
-- Índices para tabela `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD CONSTRAINT `agendamentos_ibfk_1` FOREIGN KEY (`idmedico`) REFERENCES `medicos` (`id`),
  ADD CONSTRAINT `agendamentos_ibfk_2` FOREIGN KEY (`idpaciente`) REFERENCES `pacientes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
