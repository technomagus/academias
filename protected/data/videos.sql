-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 25-Fev-2014 às 03:21
-- Versão do servidor: 5.6.14
-- versão do PHP: 5.5.6
USE technomagus_acd;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `technomagus_acd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `nnumevid` int(11) NOT NULL AUTO_INCREMENT,
  `clink` varchar(180) DEFAULT NULL,
  `Titulo` varchar(40) NOT NULL,
  `Descricao` text NOT NULL,
  PRIMARY KEY (`nnumevid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `videos`
--

INSERT INTO `videos` (`nnumevid`, `clink`, `Titulo`, `Descricao`) VALUES
(1, 'Qu3pw6WX6Hc', 'Agachamentos ', 'Dicas sobre agachamento'),
(2, 'OFQQhZ2gb9A', 'sei la ', 'um video aleatorio de academia '),
(3, 'wK3MCwoY3K4', 'outro video qualquer', 'mais um video de academia para encher o site');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
