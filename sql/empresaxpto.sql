-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Máquina: localhost:3306
-- Data de Criação: 09-Jan-2017 às 16:06
-- Versão do servidor: 5.6.34
-- versão do PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `wwweurog_empresaxpto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `activiry`
--

CREATE TABLE IF NOT EXISTS `activiry` (
  `id_activity` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(400) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_client` int(11) NOT NULL,
  PRIMARY KEY (`id_activity`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `activiry`
--

INSERT INTO `activiry` (`id_activity`, `comment`, `date`, `id_client`) VALUES
(1, 'O Client Helder Ferreira foi adicionado ao sistema!', '2017-01-05 10:52:31', 0),
(2, 'O Client teste foi adicionado ao sistema!', '2017-01-05 10:54:42', 0),
(3, 'O Ficheiro ../clients/teste/16-12.pdf foi carregado!', '2017-01-05 10:54:49', 3),
(4, 'O Client teste foi editado!', '2017-01-05 11:05:05', 0),
(5, 'O Client teste foi editado!', '2017-01-05 11:36:43', 0),
(6, 'O Client #3 foi movido para Inativo.', '2017-01-05 11:37:11', 3),
(7, 'O Client #3 foi ativado.', '2017-01-05 11:37:31', 3),
(8, 'O Client #3 foi movido para Inativo.', '2017-01-05 11:54:41', 3),
(9, 'O Client #3 foi ativado.', '2017-01-05 11:54:51', 3),
(10, 'O Ficheiro ../clients/helder/Resumo_Projeto.pdf foi carregado!', '2017-01-05 12:46:34', 2),
(11, 'O Ficheiro ../clients/teste/Resumo_Projeto.pdf foi carregado!', '2017-01-05 12:47:42', 3),
(12, 'O Ficheiro ../clients/teste/16-12.pdf foi removido!', '2017-01-06 09:24:32', 3),
(13, 'O Ficheiro ../clients/teste/16-12.pdf foi carregado!', '2017-01-06 09:24:37', 3),
(14, 'O Client A foi adicionado ao sistema!', '2017-01-06 10:06:08', 0),
(15, 'O Client A foi editado!', '2017-01-06 10:07:22', 0),
(16, 'O Client A foi editado!', '2017-01-06 10:08:08', 0),
(17, 'O Ficheiro ../clients/a123/16-12.pdf foi carregado!', '2017-01-06 10:09:24', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `isadmin` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id_user`, `name`, `username`, `password`, `email`, `isadmin`, `status`) VALUES
(1, 'Nelson Rodrigues', 'nelson', 'a4e360681676c770121e891f8c407572', 'nelson@ipvc.pt', 1, 1),
(2, 'Helder Ferreira', 'helder', 'e9f713c3ef1cd2a6559d3bfc6911cda1', 'heferreira@ipvc.pt', 1, 1),
(3, 'teste', 'teste', '698dc19d489c4e4db73e28a713eab07b', 'teste@ipvc.pt', 0, 1),
(4, 'A', 'a123', '202cb962ac59075b964b07152d234b70', 'ola@ipvc.pt', 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
