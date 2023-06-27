-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 26-Jun-2023 às 01:35
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `email`, `senha`) VALUES
(1, '', 'vitor_hugo-lopes@estundate.sesisenai.org.br', '1234'),
(2, 'Vitor', 'vitor@vitor', '123444'),
(3, 'Vitor', 'vitor@vitor', '×mø'),
(4, 'Vitor', 'chistianlorenzoni@gmail.com', '×mø'),
(5, 'Vitor', 'chistianlorenzoni@gmail.com', '×mø');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `Nome` varchar(100) DEFAULT NULL,
  `Autor` varchar(100) DEFAULT NULL,
  `Imagem` varchar(255) DEFAULT NULL,
  `Quantidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `Nome`, `Autor`, `Imagem`, `Quantidade`) VALUES
(1, 'O Grande Gatsby', 'F. Scott Fitzgerald', 'grande_gatsby.jpg', 10),
(2, '1984', 'George Orwell', '1984.jpg', 5),
(3, 'Dom Quixote', 'Miguel de Cervantes', 'dom_quixote.jpg', 3),
(4, 'Orgulho e Preconceito', 'Jane Austen', 'orgulho_preconceito.jpg', 8),
(5, 'O Apanhador no Campo de Centeio', 'J.D. Salinger', 'apanhador_centeio.jpg', 12),
(6, 'Matar um Mockingbird', 'Harper Lee', 'matar_mockingbird.jpg', 2),
(7, 'Ulisses', 'James Joyce', 'ulisses.png', 6),
(8, 'Cem Anos de Solidão', 'Gabriel García Márquez', 'cem_anos_solidao.jpg', 15),
(9, 'A Divina Comédia', 'Dante Alighieri', 'divina_comedia.jpg', 4),
(10, 'A Revolução dos Bichos', 'George Orwell', 'revolucao_bichos.jpg', 7),
(11, 'Crime e Castigo', 'Fyodor Dostoevsky', 'crime_castigo.jpg', 9),
(12, 'O Senhor dos Anéis', 'J.R.R. Tolkien', 'senhor_aneis.jpg', 11),
(13, 'A Odisséia', 'Homero', 'odisseia.jpg', 1),
(14, 'O Morro dos Ventos Uivantes', 'Emily Brontë', 'morro_ventos_uivantes.jpg', 3),
(15, 'Ensaio sobre a Cegueira', 'José Saramago', 'ensaio_cegueira.jpg', 6),
(16, 'O Processo', 'Franz Kafka', 'processo.jpg', 8),
(17, 'A Revolta de Atlas', 'Ayn Rand', 'revolta_atlas.jpg', 2),
(18, 'O Conde de Monte Cristo', 'Alexandre Dumas', 'conde_monte_cristo.jpg', 14),
(19, 'As Vinhas da Ira', 'John Steinbeck', 'vinhas_ira.png', 7),
(20, 'A Insustentável Leveza do Ser', 'Milan Kundera', 'insustentavel_leveza_ser.jpg', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
