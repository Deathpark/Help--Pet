-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 17-Nov-2017 Ã s 20:43
-- VersÃ£o do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Nome do banco de dados: `hep-pet`
--

-- --------------------------------------------------------

--
-- Criando a tabela `usuarios`
--
DROP TABLE IF EXISTS `Usuarios`;
CREATE TABLE IF NOT EXISTS `Usuarios` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `nome`  varchar(100) NOT NULL,
  `sobrenome`  varchar(100) NOT NULL,
  `idade`  INT(11),
  `sexo`  CHAR(1),
  `telefone`  varchar(14),
  `regiao`  varchar(100),
  `descricao`  varchar(300),
  `foto` varchar(500) DEFAULT '../fotos/pata.png',
   PRIMARY KEY(`id_usuario`)
)ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;


INSERT INTO `Usuarios` (`id_usuario`,`email`, `senha`, `nome`, `sobrenome`, `idade`, `sexo`, `telefone`, `regiao`, `descricao`) VALUES
(1,'teste', '$2y$10$YvtC0EYdxr2uSUxlnt5t3OnAQOY.O4DT0s.DGuC7LuxAUfjiL6ZOK', 'fulano', 'silva', 36, 'M', '1234-5678', 'barreiro', 'oi tudo bom');
-- senha: barbavermelha123 e sparow123




DROP TABLE IF EXISTS `Posts`;
CREATE TABLE IF NOT EXISTS `Posts` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `texto` varchar(500) NOT NULL,
  `midia` varchar(100),
  `data` DATE NOT NULL,
  `hora` TIME NOT NULL,
  `tags` varchar(100),
  `id_usuario` int(11) NOT NULL,
FOREIGN KEY(`id_usuario`) REFERENCES Usuarios(`id_usuario`),
  PRIMARY KEY (`id_post`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;


INSERT INTO `Posts` (`id_post`, `texto`, `midia`, `data`, `hora`, `tags`, `id_usuario`) VALUES
(1, 'oi eu sou o rato do barreiro', 'fotos/rato.png', '2018-10-01', '11:59:01', 'cachorro', 1);


DROP TABLE IF EXISTS `Pets`;
CREATE TABLE IF NOT EXISTS `Pets` (
  `id_pet` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `idade` INT(11),
  `sexo` CHAR(1),
  `especie` varchar(100),
  `raca` varchar(100),
  `descricao` varchar(300),
  `id_usuario` int(11) NOT NULL,
FOREIGN KEY(`id_usuario`) REFERENCES Usuarios(`id_usuario`),
  PRIMARY KEY (`id_pet`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;



COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
