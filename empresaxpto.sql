-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23-Dez-2016 às 12:47
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empresaxpto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `activiry`
--

CREATE TABLE `activiry` (
  `id_activity` int(11) NOT NULL,
  `comment` varchar(400) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `activiry`
--

INSERT INTO `activiry` (`id_activity`, `comment`, `date`, `id_client`) VALUES
(1, 'dada', '2016-12-22 20:39:33', 0),
(2, 'O Client #15foi movido para Inativo.', '2016-12-22 20:39:33', 0),
(3, 'O Client manuel foi adicionado ao sistema!', '2016-12-22 20:39:33', 0),
(4, 'O Client 1234 foi adicionado ao sistema!', '2016-12-22 20:40:01', 0),
(5, 'O Client #2 foi movido para Inativo.', '2016-12-22 20:49:35', 0),
(6, 'O Ficheiro clients/1234/sirmateria.txt foi removido!', '2016-12-22 22:32:35', 0),
(7, 'O Ficheiro clients/1234/sirmateria.txt foi removido!', '2016-12-22 22:32:41', 0),
(8, 'O Ficheiro clients/1234/sirmateria.txt foi removido!', '2016-12-22 22:36:37', 0),
(9, 'O Ficheiro clients/1234/sirmateria.txt foi carregado!', '2016-12-22 22:42:10', 16),
(10, 'O Ficheiro clients/manuel/sirmateria.txt foi carregado!', '2016-12-22 23:03:01', 16),
(11, 'O Ficheiro clients/manuel/sirmateria.txt foi removido!', '2016-12-22 23:03:05', 16),
(12, 'O Ficheiro clients/nelson/activity.php foi carregado!', '2016-12-22 23:03:36', 1),
(13, 'O Client #17 foi movido para Inativo.', '2016-12-22 23:03:45', 17),
(14, 'O Client pplware foi adicionado ao sistema!', '2016-12-22 23:13:21', 0),
(15, 'O Client rato foi adicionado ao sistema!', '2016-12-22 23:13:44', 0),
(16, 'O Client bbc foi adicionado ao sistema!', '2016-12-22 23:14:09', 0),
(17, 'O Client you foi adicionado ao sistema!', '2016-12-22 23:15:45', 0),
(18, 'O Ficheiro clients/you/header.php foi carregado!', '2016-12-22 23:15:55', 21),
(19, 'O Ficheiro clients/you/-2872596376773148879.pdf foi carregado!', '2016-12-22 23:16:37', 21),
(20, 'O Ficheiro clients/you/header.php foi removido!', '2016-12-23 00:46:31', 21);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `repassword` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `isadmin` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id_user`, `name`, `username`, `password`, `repassword`, `email`, `isadmin`, `status`) VALUES
(1, 'Nelson', 'nelson', 'nelson', 'nelson', 'nelson@ipvc.pt', 1, 1),
(2, 'Fernandes', 'fernandes', 'fernandes', 'fernandes', 'fernandes@ipvc.pt', 1, 0),
(3, 'joaquim', 'joaquim', 'joaquim', 'joaquim', 'joaquim@ipvc.pt', 0, 1),
(5, 'ferreira', 'ferreira', 'ferreira', '', 'ferreira@ipvc.pt', 0, 0),
(8, 'pereira', 'pereira', 'pereira', 'pereira', 'pereira@ivc.pt', 0, 0),
(9, 'alves', 'alves', 'alves', 'alves', 'alves@ipvc.pt', 0, 0),
(12, 'manel', 'manel', 'manel', 'manel', 'manel@ipvc.pt', 0, 0),
(14, 'ola', 'ola', 'ola', 'ola', 'ola@gmail.com', 0, 0),
(15, 'Pedro Dias', 'pedro', 'pedro', 'pedro', 'pedro@ipvc.pt', 0, 0),
(16, 'manuel', 'manuel', 'manuel', 'manuel', 'manuel@ipvc.pt', 0, 1),
(17, '1234', '1234', '1234', '1234', 'ferreira@ipvc.pt', 0, 0),
(18, 'pplware', 'pplware', 'pplware', 'pplware', 'pplware@ipvc.pt', 1, 1),
(19, 'rato', 'rato', 'rato', 'rato', 'rato@ipvc.pt', 0, 1),
(20, 'bbc', 'bbc', 'bbc', 'bbc', 'bbc@ipvc.pt', 0, 1),
(21, 'you', 'you', 'you', 'you', 'you@ipvc.pt', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activiry`
--
ALTER TABLE `activiry`
  ADD PRIMARY KEY (`id_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activiry`
--
ALTER TABLE `activiry`
  MODIFY `id_activity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
