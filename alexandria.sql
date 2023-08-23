-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/08/2023 às 11:21
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `alexandria`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_categorias`
--

CREATE TABLE `tb_categorias` (
  `id` varchar(100) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `qnt_livros` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_categorias`
--

INSERT INTO `tb_categorias` (`id`, `categoria`, `qnt_livros`) VALUES
('050ae0ce3d49bb98ca1f08b33c6756b7', 'Negócios e empreendedorismo', 0),
('058fcf8b126253956deb3ce672d107a7', 'Terror', 0),
('081fc8e8bd39e1dc72ca3f5a5fdf6697', 'Romance', 0),
('0958484de21f797ee0c4fa5ed4b2fbbc', 'Teatro', 0),
('0b54423fff76787c152d834af1d25650', 'Literatura clássica', 0),
('0d352ceb1000d8c25f6d602fe7c9d86c', 'Ciência', 0),
('18d967c71c1179a10f8314db2b984bff', 'Sociedade e cultura', 0),
('1a6ebae756d174c27b5ebdb6bc2ade7b', 'Alimentação e culinária', 0),
('1bb3224235692ec3430dbc5980f376d6', 'Thriller psicológico', 0),
('1e6651f9bb41a986a504b88fc4eaaae8', 'Esportes', 0),
('205b8c9a6b18d476abc94908e0280ea5', 'Drama', 0),
('22316b0b7df0101aca0c261275e91fbb', 'Livros juvenis', 0),
('25bbf7a903c0b7f10673056dbd7a5a5a', 'Política', 0),
('2e2032673d3bbd3afea3f48620f8073b', 'Saúde e bem-estar', 0),
('2fe8156e2a8f0695db83aa92c461ba01', 'Desenvolvimento pessoal', 0),
('43b6985031b69d71adb267b6703950ff', 'Livros infantis', 0),
('4b7e8830c32d9391078e521180787c74', 'Poesia', 0),
('4bf4f090dc6beb285103c5ed7a93759e', 'Ação e aventura', 0),
('67748f8e528227ff0da54e29ac3334ba', 'Histórico', 0),
('6ab45b4acb36dc638dd0bf4e03533176', 'História', 0),
('740f8c13285afed64f27536cfdbde271', 'Fantasia', 0),
('7a875c393308e0e8580af0024dea7edf', 'Guias e manuais técnicos', 0),
('7fc2b9ec3d1aaf0403d310ade7312fab', 'Fábula', 0),
('8355ea97f9757e13f3d4803f624dba40', 'Autobiografia', 0),
('83c1720cae1b159e5208bacab12304c8', 'Ficção distópica', 0),
('866d594683963249a2219e47f9da5c0d', 'Conto', 0),
('99ed86c9970eed8bbcca9f61242e4d01', 'Mistério', 0),
('a93d98cec2489ffef8aabf7dfa62b1ce', 'Suspense', 0),
('ac6646ebe0b195efc9f047083d650f47', 'Ciência da computação', 0),
('b383920b68520e24de053aaf7cc73a56', 'Economia', 0),
('bc8be9b0ad7ca8589f364fd8782e973e', 'Ficção científica', 0),
('c450f90bf55356169ede77a2f187a455', 'Espiritualidade', 0),
('c5fc6366e0c55b9e2f87f7fe65b2b6b6', 'Biografia', 0),
('c8c4bf59e00a3c0cd42c221f3817e89b', 'Comédia', 0),
('ca29d87258253b73a48557fbd7bd39e8', 'Arte e fotografia', 0),
('d9b0f124567d35a08376d5c803a9fe91', 'Autoajuda', 0),
('e03a24bd42fbd94cc32a1ba2a90e8ed6', 'Viagens', 0),
('f882f2c728279f1e67ff896c7e0116a2', 'Filosofia', 0),
('f9818320831291a9e15c71602f72bb99', 'Ficção histórica', 0),
('fee8a3968fbb437720c6362d6f308367', 'Matemática', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_likes`
--

CREATE TABLE `tb_likes` (
  `id_like` varchar(255) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `id_livro` varchar(255) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_likes`
--

INSERT INTO `tb_likes` (`id_like`, `id_user`, `id_livro`, `tipo`) VALUES
('64b1713b835d7', 'Marcelinho', '978-3-16-148410-0', 0),
('64b1edbcc11b3', '', '64adfd7b95d8b', 0),
('64b1edc595ebe', '', '978-0-8044-2957-9', 1),
('64b1edcb10d87', '', '978-3-16-148410-0', 0),
('64b2e316962d5', 'Marcelinho', '64adff3c7aba8', 1),
('64b5ab30c87c1', 'Marcelinho', '978-0-8044-2957-9', 1),
('64b835e061bca', 'Marcelinho', '', 1),
('64b835e06618f', 'Marcelinho', '64adfd7b95d8b', 1),
('64b836036f89d', 'Marcelinho', '978-1-68488-585-0', 1),
('64b836323ac07', 'AlexandriaOficial', '', 1),
('64b836323e9a4', 'AlexandriaOficial', '978-1-68488-585-0', 1),
('64b89e1b76de3', 'AlexandriaOficial', '64adff3c7aba8', 1),
('64b89ecb94ddc', 'AlexandriaOficial', '978-0-8044-2957-9', 1),
('64b96ff2978c3', 'AlexandriaOficial', '64adfd7b95d8b', 0),
('64b9737ad8a3a', 'AlexandriaOficial', '978-3-16-148410-0', 1),
('64bdc87baa200', '', '', 0),
('64bdc87bae349', '', '<?php echo $idLivro ?>', 0),
('64bdc88954d95', '', '64adff3c7aba8', 0),
('64bdc8ae5431c', 'Marcelinho', '<?php echo $idLivro ?>', 1),
('64d6e471b17fd', 'Marcelinho', '64d6e2be5d4f2', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_livros`
--

CREATE TABLE `tb_livros` (
  `id` varchar(100) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `descricao` text DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `pdf` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `usuarioPost` varchar(255) NOT NULL,
  `dataPost` date DEFAULT NULL,
  `likes` int(11) NOT NULL DEFAULT 0,
  `dislikes` int(11) NOT NULL DEFAULT 0,
  `downloads` int(11) NOT NULL DEFAULT 0,
  `views` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_livros`
--

INSERT INTO `tb_livros` (`id`, `titulo`, `autor`, `descricao`, `ano`, `pdf`, `audio`, `usuarioPost`, `dataPost`, `likes`, `dislikes`, `downloads`, `views`) VALUES
('64adfd7b95d8b', 'Planejamento de Treino', 'Gabriel Cox', 'Descrição curta', 2023, '1', '0', 'Marcelinho', '2023-07-14', 1, 2, 0, 2),
('64adff3c7aba8', 'A Arte da Guerra', 'Sun Tsu', 'Livro a arte da guerra de sun tsu', 1000, '1', '0', 'Marcelinho', '2023-07-12', 2, 1, 0, 21),
('64d6e2be5d4f2', 'Carefully Accident', 'Paola, Thiago e Marcelo', 'Uma musica top pra krl', 2018, '64d6e2be5d4f2.pdf', '64d6e2be5d4f2.mp3', 'Marcelinho', '2023-08-12', 1, 0, 0, 12),
('978-0-8044-2957-9', 'O Poder do Hábito', 'Charles Duhigg', 'Este livro explora a ciência por trás dos hábitos e como podemos transformá-los para alcançar o sucesso pessoal e profissional.', 2012, '1', '1', 'maria_1985', '2022-05-10', 3, 0, 0, 29),
('978-1-68488-585-0', 'Sapiens: Uma Breve História da Humanidade', 'Yuval Noah Harari', 'Uma análise fascinante da história humana, abordando desde a evolução dos primeiros hominídeos até os desafios enfrentados pela espécie no século XXI.', 2014, '0', '0', 'alex_123', '2022-07-20', 2, 0, 0, 6),
('978-3-16-148410-0', 'Cem Anos de Solidão', 'Gabriel García Márquez', 'Um clássico da literatura latino-americana que conta a história da família Buendía ao longo de várias gerações em Macondo.', 1967, '1', '0', 'joseph_w', '2022-06-15', 1, 2, 0, 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_users`
--

CREATE TABLE `tb_users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `qntLivros` int(11) NOT NULL DEFAULT 0,
  `dataCriacao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_users`
--

INSERT INTO `tb_users` (`username`, `password`, `email`, `foto`, `qntLivros`, `dataCriacao`) VALUES
('AlexandriaOficial', '25d55ad283aa400af464c76d713c07ad', 'alexandria@oficial.org.br', 'AlexandriaOficial.', 0, '2023-07-19'),
('Marcelinho', '25d55ad283aa400af464c76d713c07ad', 'marcelox042@gmail.com', NULL, 0, '2023-07-11'),
('marcelo123', '25d55ad283aa400af464c76d713c07ad', 'marcelo123@gmail.com', NULL, 0, '2023-07-11'),
('marceloteste', '25d55ad283aa400af464c76d713c07ad', 'madsadsadfs@dfasdfafg.com', NULL, 0, '2023-07-11'),
('qwertywww4', '25d55ad283aa400af464c76d713c07ad', 'qwertyww4@gmail.com', NULL, 0, '2023-07-11'),
('testeFinalFoto', '25d55ad283aa400af464c76d713c07ad', 'testefinalfoto@foto.com', 'testeFinalFoto.jpg', 0, '2023-07-11'),
('testeFinalsemFoto', '25d55ad283aa400af464c76d713c07ad', 'testefinasenlfoto@foto.com', 'testeFinalsemFoto.', 0, '2023-07-11'),
('testeFinalsemFoto2', '25d55ad283aa400af464c76d713c07ad', 'testefinasenlfoto2@foto.com', 'NULL', 0, '2023-07-11'),
('testeFinalsemFoto3', '25d55ad283aa400af464c76d713c07ad', 'testefinasenlfoto3@foto.com', NULL, 0, '2023-07-11'),
('TesteFoto', '25d55ad283aa400af464c76d713c07ad', 'foto@gmail.com', 'NULL', 0, '2023-07-11');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_categorias`
--
ALTER TABLE `tb_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_likes`
--
ALTER TABLE `tb_likes`
  ADD PRIMARY KEY (`id_like`);

--
-- Índices de tabela `tb_livros`
--
ALTER TABLE `tb_livros`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
