-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21-Dez-2016 às 11:23
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
  `comment` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `activiry`
--

INSERT INTO `activiry` (`id_activity`, `comment`) VALUES
(1, 'dada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `repository`
--

CREATE TABLE `repository` (
  `id_repository` int(11) NOT NULL,
  `path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `repository`
--

INSERT INTO `repository` (`id_repository`, `path`) VALUES
(1, '');

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
  `status` tinyint(1) NOT NULL,
  `idactivity` int(11) NOT NULL,
  `idrepository` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id_user`, `name`, `username`, `password`, `repassword`, `email`, `isadmin`, `status`, `idactivity`, `idrepository`) VALUES
(1, 'Nelson', 'nelson', 'nelson', 'nelson', 'nelson@ipvc.pt', 1, 1, 1, 1),
(2, 'Fernandes', 'fernandes', 'fernandes', 'fernandes', 'fernandes@ipvc.pt', 1, 1, 1, 1),
(3, 'joaquim', 'joaquim', 'joaquim', 'joaquim', 'joaquim@ipvc.pt', 0, 1, 1, 1),
(5, 'ferreira', 'ferreira', 'ferreira', '', 'ferreira@ipvc.pt', 0, 0, 0, 0),
(7, 'joaquim', 'joaquimmm', '123', '123', 'ferreira@ipvc.pt', 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activiry`
--
ALTER TABLE `activiry`
  ADD PRIMARY KEY (`id_activity`);

--
-- Indexes for table `repository`
--
ALTER TABLE `repository`
  ADD PRIMARY KEY (`id_repository`);

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
  MODIFY `id_activity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `repository`
--
ALTER TABLE `repository`
  MODIFY `id_repository` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
